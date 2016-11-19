<?php

/*
 * Some pages doesn't need Auth user and therefore Session::init() for some methods ...
 *
 */

class Site extends Controller {

    function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
        $output = [];
        $output['header'] = "Index Page Header";
        $output['content'] = "Sample Content text";
        $this->render('site/index', $output);
    }


    public function contact()
    {
        $output = [];
        $output['number'] = "0559498868";
        $this->render('site/contact', $output);
    }

    public function login()
    {
        Session::init();
        if($_POST)
        {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_MAGIC_QUOTES);

            $model = new User_Model;

            $model = $model::find_by_username($username);

            if($model->username)
            {
                if($username == $model->username && Hash::verifyPassword($password, $model->password))
                {
                    Session::set('loggedIn', $model->username);
                    Session::set('UserID', $model->id);
                    Session::set('UserPhoto', $model->photo);
                    header('location:' . BaseUrl);
                } else
                {
                    header('location: ' .BaseUrl. 'site/login');
                }
            }

        }

        $this->render('site/login');

    }
    


    
}

