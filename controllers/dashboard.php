<?php

class Dashboard extends Controller {

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index()
    {
        $this->render('dashboard/index');
    }
    
    public function logout()
    {
        
    }
    
    public function create()
    {
        
    }
    
    public function read()
    {
        
    }
    
    public function delete()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function userList()
    {
        $output = [];
        $output['users'] = Dashboard_Model::all();
        $this->render('dashboard/userlist', $output);
    }
    
    
}