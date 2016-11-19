<?php
/**
 * Created by PhpStorm.
 * User: Valeh
 * Date: 07.11.2016
 * Time: 15:28
 */


class Hash {

    public static function hashPassword($password)
    {
        $options = ['cost' => 12];
        $pass    = password_hash($password, PASSWORD_BCRYPT, $options);
        return $pass;
    }

    public static function verifyPassword($password, $hash)
    {
        if(password_verify($password, $hash))
            return $hash;
        else
            FALSE;
    }

}