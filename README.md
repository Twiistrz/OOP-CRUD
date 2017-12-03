# OOP Create, Read, Update and Delete
Bootstrap Admin Template by [Creative Tim](https://www.creative-tim.com/)

Still in development don't use this in production.

Custom login and remember already included `classes/Users.php`.

Default files `classes/Config.php`, `classes/Cookie.php`, `classes/Session.php`, `classes/Database.php`, `classes/Validate.php` you can create your own class by copying the class file template

# Tasks
- [ ] Login User
- [ ] Register User
- [ ] Create Data
- [ ] Update Data
- [ ] Select Data
- [ ] Delete Data
- [ ] Upload Images

## Global Configuration File
You can find this configuration in `core/init.php`
```php
// Global Configuration
$GLOBALS['config'] = array
(
    'development' => array
    (
        // Set this true if you want to display errors.
        'debug' => true
    ),
    'mysql' => array
    (
        // Database Host
        'host' => '127.0.0.1',
        // Database Username
        'user' => 'root',
        // Database Password
        'pass' => '',
        // Database Name
        'name' => 'crud'
    ),
    'remember' => array
    (
        // Remember me cookie name.
        'cookie_name'   => 'c_hash',
        // Cookie expiration in seconds.
        'cookie_expiry' => 604800
    ),
    'session' => array
    (
        // Login session name.
        'session_name' => 'c_user',
        // Globa token session name.
        'token_name'   => 'c_token'
    )
);
```

## Class File Template
Save all class file in `classes` folder.
```php
<?php
//
// @Author: ΞMMANUΞL SΞΞ TΞ
// @Email: emmanuelseete.2016@gmail.com
// @GitHub: https://github.com/Twiistrz
// @Facebook: https://www.facebook.com/Twiistrz
// @Twitter: https://twitter.com/_twiistrz
//
// This is only template file for class.
// Use this to create your own class file.
class Template
{
    // Declare Variables
    private $_tblName = '{{ Edit me }}', // Table name.
            $_tblRowId = '{{ Edit me }}', // Table row primary id.
            $_errDelete = '{{ Edit me }}', // Delete error message.
            $_errCreate = '{{ Edit me }}', // Create error message.
            $_errUpdate = '{{ Edit me }}', // Update error message.
            $_db, // Database connection
            $_data, // Row data
            $_count = 0; // Row count

    public function __construct()
    {
        // Database connection
        $this->_db = Database::getInstance();
    }

    // ### Fetch Single Data
    // Usage: $template->find('integer or text');
    // Example 1: $template->find('2');
    // Example 2: $template->find('Twiistrz');
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

    // ### Fetch All Data
    // Available Operators: '=', '>', '<', '>=', '<='
    // Usage: $template->findAll('table_row_name', 'operator', 'integer or text');
    // Example 1: $template->findAll('group', '=', '4')
    // Example 2: $template->findAll('group', '=', 'Administrator');
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

    // ### Insert Data
    // Usage: $template->create('table_row_name' => Input::get('input_name'));
    // Example 1: $template->create('username' => Input::get('username'));
    // Example 2: $template->create(
    //                'username' => Input::get('username'),
    //                'age' => Input::get('age'),
    //                'bio' => Input::get('bio')
    //            );
    public function create()
    {
        if (!$this->_db->insert($this->_tblName, $fields)) throw new Exception($this->_errCreate, 1);
    }

    // ### Delete Data
    // Usage: $template->delete('integer only');
    // Example: $template->delete('6');
    public function delete($value = null)
    {
        if ($value) {
            if (!$this->_db->delete($this->_tblName), array($this->_tblRowId, '=', $value)) throw new Exception($this->errDelete, 1);
        }
    }

    // ### Update Data
    // Usage: $template->update(array('table_row_name' => Input::get('input_name')), 'integer or primary id');
    // Example 1: $template->update(array('table_row_name' => Input::get('input_name')), 4);
    // Example 2: $template->update(array(
    //                'username' => Input::get('username'),
    //                'age' => Input::get('age'),
    //                'bio' => Input::get('bio'),
    //            ), 4);
    public function update($fields = array(), $id = null)
    {
        if ($id) {
            if (!$this->_db->update($this->_tblName, $this->_tblRowId, $id, $fields)) throw new Exception($this->_errUpdate, 1);
        }
    }

    // ### Exist
    // You need to find the data to check if it exist.
    // Usage: $template->exists();
    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    // ### Results
    // You need to find the data/s to fetch.
    // Usage: $template->data();
    public function data()
    {
        return $this->_data;
    }

    // ### Count
    // You need to find the data/s to count.
    public function count()
    {
        return $this->_count;
    }
}
```
