<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index()
    {
        $breadcrumbs = [__CLASS__, __METHOD__];
        $output['breadcrumbs'] = $breadcrumbs;
        $this->render('user/index', $output);
    }



    public function logout()
    {
        Session::destroy();
        header('location: ' . BaseUrl);
    }

    public function profile()
    {
        $output = [];
        $model = $this->model;
        $model = $model::find(Session::get('UserID'));
        if($model->id)
        {
            $output['id'] =  $model->id;
            $output['username'] = $model->username;
            $output['_name'] = $model->name;
            $output['surname'] = $model->surname;
            $output['email'] = $model->email;
            $output['gender'] = $model->gender;
            $output['photo'] = $model->photo;
            $output['role'] = $model->role;
        }

        $this->render('user/profile', $output);


    }

    public function create()
    {
        //$this->userAccess(EDITOR);

        if($_POST)
        {
            $model = $this->model;

            $model->name        = $_POST['name'];
            $model->surname     = $_POST['surname'];
            $model->username    = $_POST['username'];
            $model->password    = $_POST['password'];
            $model->gender      = $_POST['gender'];
            $model->email       = $_POST['email'];
            $model->role        = $_POST['role'];

            $model->photo       = $_FILES['photo']['name'];
            $photoTmp           = $_FILES['photo']['tmp_name'];
            $photoSize          = $_FILES['photo']['size'];
            $photoType          = $_FILES['photo']['type'];

            if($model->is_valid())
            {
                $model->uploadFile($photoTmp, $model->photo);
                $model->save();
                header('location: ' . BaseUrl);
            } else
            {
                print_r($model->errors->full_messages()); die();
            }
        }

        $this->render('user/create');
    }



    public function update()
    {
        $output = [];
        $model = $this->model;
        $model = $model::find_by_username(Auth::user());

        $output['username']     = $model->username;
        $output['password']     = $model->password;
        $output['email']        = $model->email;
        $output['_name']        = $model->name;
        $output['surname']      = $model->surname;
        $output['gender']       = $model->gender;
        $output['photo']        = $model->photo;

        $this->render('user/update', $output);
    }

    public function saveProfile()
    {
        if($_POST)
        {
            $model = $this->model;
            $model = $model::find_by_username(Auth::user());

            $model->name        = $_POST['name'];
            $model->surname     = $_POST['surname'];
            $model->username    = $_POST['username'];
            $model->password    = $_POST['password'];
            $model->gender      = $_POST['gender'];
            $model->email       = $_POST['email'];
            $model->role        = $_POST['role'];

            if($model->is_valid())
            {
                $this->uploadPhoto($model);
                $model->beforeSave();
                $model->save();
                header('location: ' . BaseUrl . 'user/profile');
            } else
            {
                var_dump($model->errors->full_messages()); die();
            }
        }



    }


    public function delete()
    {
        
    }


    public function uploadPhoto($model)
    {
        if($_FILES['photo']['name'] != ''){
            $model->photo       = time().$_FILES['photo']['name'];
            $photoTmp           = $_FILES['photo']['tmp_name'];
            $photoSize          = $_FILES['photo']['size'];
            $photoType          = $_FILES['photo']['type'];
            $model->uploadFile($photoTmp, $model->photo);
        }
    }



}