<?php
// !!! Edit at your own risk
class Validate {
    private $_passed = false,
            $_errors = array(),
            $_db = null;

    public function __construct () {
        $this->_db = DB::getInstance();
    }

    public function check ($source, $items = array(), $field_name = '') {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {
                $value = trim($source[$item]);
                $item = escape($item);
                $fieldname = $rules['fieldname'];

                if ($rule['required'] && empty($value)) {
                    $this->addError("{$fieldname} must not be empty.");
                } elseif (condition) {
                    # code...
                }
            }
        }

        if (empty($this->_errors)) {
            $this->_passed = true;
        }
        return $this;
    }

    private function addError ($e) {
        $this->_errors[] = $e;
    }

    public function errors () {
        return $this->_errors;
    }

    public function passed () {
        return $this->_passed;
    }
}
