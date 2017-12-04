<?php
class User
{
    private $_tblName = 'users', // Table name.
            $_tblRowId = 'id', // Table row primary id.
            $_errDelete = 'Unable to delete this user.', // Delete error message.
            $_errCreate = 'Unable to create new user.', // Create error message.
            $_errUpdate = 'Error updating this account', // Update error message.
            $_db, // Database connection
            $_data, // Row data
            $_count = 0, // Row count
            $_sessionName,
            $_cookieName,
            $_isLoggedIn;

    public function __construct($user = null)
    {
        $this->_db = Database::getInstance();
        $this->_sessionName = Config::get('session/session_name');
        $this->_cookieName = Config::get('remember/cookie_name');

        if (!$user) {
            if (Session::exists($this->_sessionName)) {
                ($this->find(Session::get($this->_sessionName))) ? $this->_isLoggedIn = true : Redirect::to('logout');
            }
        }

        else {
            $this->find($user);
        }
    }

    public function login($username = null, $password = null, $remember = false)
    {
        if (!$username && !$password && $this->exists()) {
            Session::put($this->_sessionName, $this->data()->id);
        }

        else {
            if ($this->find($username)) {
                if ($this->data()->password === Hash::encrypt($password, $this->data()->salt)) {
                    Session::put($this->_sessionName, $this->data()->id);
                    if ($remember) {
                        $hash = Hash::unique();
                        $data = $this->_db->get('users_session', array($this->_tblRowId, '=', $this->data()->id));
                        if ($data->count()) {
                            $data->insert('users_session', array(
                                'user_id' => $this->data()->id,
                                'hash' => $hash
                            ));
                        }

                        else {
                            $hash = $data->first()->hash;
                        }
                        Cookie::put($this->_cookieName, $hash, time() + Config::get('remember/cookie_expiry'));
                    }
                    return true;
                }
            }
        }
        return false;
    }

    public function logout()
    {
        $this->_db->delete('users_session', array('user_id', '=', $this->data()->id));
        Cookie::delete($this->_cookieName);
        Session::delete($this->_sessionName);
    }

    public function find($user = null)
    {
        if ($user) {
            $field = (is_numeric($user)) ? $this->_tblRowId : '{{ Table row name, edit me }}';
            $data = $this->_db->get($this->_tblName, array($field, '=', $name));
            if ($data->count()) {
                $this->_data = $data->first();
                $this->_count = $data->count();
                return true;
            }
            return false;
        }
    }

    public function findAll($where = array())
    {
        $data = (count($where)) ? $this->_db->getAll($this->_tblName, $where) : $this->_db->getAll($this->_tblName);
        if ($data->count()) {
            $this->_data = $data->results();
            $this->_count = $data->count();
            return true;
        }
        return false;
    }

    public function create()
    {
        if (!$this->_db->insert($this->_tblName, $fields)) throw new Exception($this->_errCreate, 1);
    }

    public function delete($value = null)
    {
        if ($value) {
            if (!$this->_db->delete($this->_tblName, array($this->_tblRowId, '=', $value))) throw new Exception($this->errDelete, 1);
        }
    }

    public function update($fields = array(), $id = null)
    {
        if ($id) {
            if (!$this->_db->update($this->_tblName, $this->_tblRowId, $id, $fields)) throw new Exception($this->_errUpdate, 1);
        }
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function data()
    {
        return $this->_data;
    }

    public function count()
    {
        return $this->_count;
    }
}
