<?php
require_once 'core/init.php';
require_once 'views/header.php';

if (Input::exists()) {
    die(Input::get('username'));
}
require_once 'views/login.php';
require_once 'views/footer.php';
