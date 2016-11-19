<?php

/*
 * Nano MVC core Base Controller
 * author: Valeh
 */

class Controller {
    
    
    public function __construct()
    {
        
    }

    public function render($name, Array $datas = [], $noInclude = FALSE) 
    {
        extract($datas);

        if ($noInclude == FALSE) {
            require 'views/layouts/header.php';
            require 'views/' . $name . '.php';
            require 'views/layouts/footer.php';
        } else {
            require 'views/' . $name . '.php';
        }
    }
    
    public static function registerCSS()
    {
        echo '<link href="/assets/css/bootstrap.min.css" rel="stylesheet">';
        echo '<link href="/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">';
        echo '<link href="/assets/css/sticky-footer-navbar.css" rel="stylesheet">';
        echo '<link href="/assets/css/design.css" rel="stylesheet">';
    }
    
    public static function registerJS($position)
    {
        if($position == "POS_HEAD")
        {
            echo '<script src="/assets/js/ie-emulation-modes-warning.js"></script>';
        }
        if($position == "POS_END") 
        {
            echo '<script src="assets/js/jquery.min.js"></script>';
            echo '<script src="/assets/js/bootstrap.min.js"></script>';
            echo '<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>';
            echo '<script src="/assets/js/custom.js"></script>';
        }
    }
    
    public function loadModel($name)
    {
        $path = 'models/'.$name.'_model.php';
        if(file_exists($path)){
            require 'models/'.$name.'_model.php';
            $modelName  = $name . '_Model';
            $this->model = new $modelName;
        }
    }

    public function userAccess($minLevel)
    {
        $user = User_Model::find_by_username(Auth::user());

        if($minLevel > $user->role)
            Helper::redirect('user/profile');

    }




}
