<?php
class Redirect
{
    public static function to($url = null)
    {
        if ($url) {
            header("Location: {$url}.php");
        }
    }
}
