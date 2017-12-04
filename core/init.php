<?php
session_start();

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

// Autoload classes when called.
spl_autoload_register
(
    function ($class)
    {
        require_once "classes/{$class}.php";
    }
);

if (Config::get('development/debug'))
{
    // Debug you can add your own file log here.
    ini_set ('error_prepend_string', "<code>");
    ini_set ('error_append_string', "</code>");
    ini_set ('display_errors', 1);
    ini_set ('display_startup_errors', 1);
    error_reporting (E_ALL);
}

else
{
    error_reporting (0);
}

$filename = basename($_SERVER['PHP_SELF'], '.php');
$user = new User();
