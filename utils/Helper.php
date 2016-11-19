<?php
/**
 * Created by PhpStorm.
 * User: Valeh
 * Date: 07.11.2016
 * Time: 13:19
 */

class Helper {

    public static function dd($arg)
    {
        echo "<pre>";
        var_dump($arg);
        echo "</pre>";
        die();
    }

    public static function vd($arg)
    {
        echo "<pre>";
        var_dump($arg);
        echo "</pre>";
    }


    public static function redirect($location = NULL)
    {
        header('location: ' . BaseUrl . $location . '/');
    }




}