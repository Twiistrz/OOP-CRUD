<?php
// !!! Edit at your own risk
class Database
{
    private static $_instance = null;
    private $_pdo,
            $_query,
            $_error = false,
            $_results,
            $_count = 0;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/name'), Config::get('mysql/user'), Config::get('mysql/pass'));
        }

        catch (PDOException $e) {
            throw new Exception($e->getMessage(), 1);
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }

    public function query($stmt, $params = array())
    {
        $this->_error = false;
        if ($this->_query = $this->_pdo->prepare($stmt)) {
            if (count($params) {
                $count = 1;
                foreach ($params as $param) {
                    $this->_query->bindValue($count, $param);
                    $count++;
                }
            }

            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_ASSOC);
                $this->_count = $this->_query->rowCount();
            }

            else {
                $this->_error = true;
            }
        }
        return $this;
    }

    public function action($action, $table, $where = array())
    {
        if (count($where) === 3) {
            $operators = array('=', '>', '<', '>=', '<=');
            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if (in_array($operator, $operators)) {
                $query = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                if (!$this->query($query, array($value))->error()) return $this;
            }
        }

        else
        {
            $query = "{$action} FROM {$table}";
            if (!$this->query($query)->error()) return $this;
        }
        return false;
    }

    public function get($table, $where)
    {
        return $this->action('SELECT *', $table, $where);
    }

    public function getAll($table, $where = array())
    {
        return (count($where)) ? $this->action('SELECT *', $table, $where) : $this->action('SELECT *', $table);
    }

    public function delete($table, $where)
    {
        return $this->action('DELETE', $table, $where);
    }

    public function insert($table, $fields = array())
    {
        $keys = array_keys($fields);
        $values = null;
        $count = 1;

        foreach ($fields as $field) {
            $values .= '?';
            if ($count < count($fields)) $values .= ', ';
            $count++;
        }

        $query = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";
        return (!$this->query($query, $fields)->error()) ? true : false;
    }

    public function update($table, $id_field, $id_value, $fields = array())
    {
        $set = '';
        $id = '';
        $count = 1;

        foreach ($fields as $name => $value) {
            $set .= "{$name} = ?";
            if ($count < count($fields)) $set .= ', ';
            $count++;
        }

        $query = "UPDATE {$table} SET {$set} WHERE {$id_field} = {$id_value}";
        return (!$this->query($query, $fields)->error()) ? true : false;
    }

    public function results()
    {
        return $this->_results;
    }

    public function first()
    {
        return $this->results()[0];
    }

    public function error()
    {
        return $this->_error;
    }

    public function count()
    {
        return $this->_count;
    }
}
