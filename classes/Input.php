<?php
class Input
{
    public static function exists($method = 'post')
    {
        switch($method) {
            case 'post':
                return (!empty($_POST)) ? true : false;
            break;
            case 'get':
                return (!empty($_GET)) ? true : false;
            break;
            default:
                return false;
            break;
        }
    }

    public static function getCheck($item)
    {
        return (isset($_GET[$item])) ? true : false;
    }

    public static function get($item)
    {
        if (isset($_POST[$item])) {
            return $_POST[$item];
        } elseif ($_GET[$item]) {
            return $_GET[$item];
        }
        return '';
    }
}
