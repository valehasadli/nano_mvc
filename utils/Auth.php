<?php

class Auth
{

	public static function handleLogin()
	{
		Session::init();
        
		$logged = Session::get('loggedIn');
        $UserID = Session::get('UserID');
        $UserPhoto = Session::get('UserPhoto');
        
		if ($logged == FALSE) {
			Session::destroy();
			header('location:' . BaseUrl . 'site/login');
			exit;
		}
	}
    
    public static function user()
    {
        return Session::get('loggedIn');
    }
	
}

