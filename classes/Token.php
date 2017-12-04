<?php
class Token
{
    public static function generate()
    {
        return Session::put(Config::get('session/token_name'), md5(uniqid()));
    }

    public static function check($token)
    {
        if(Session::exists(Config::get('session/token_name')) &&
            $token === Session::get(Config::get('session/token_name'))) {

            Session::delete(Config::get('session/token_name'));
            return true;
        }
        return false;
    }
}
