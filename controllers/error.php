<?php

class Error extends Controller {
    
    function __construct() 
    {
        parent::__construct();
    }
    
    public function error()
    {
        $output = [];
        $output['error'] = "Invalid Request";
        $this->render('error/PageNotFound', $output);
    }
    
    /*public function dbCon()
    {
        $output['error'] = "Database not connected";
        $this->render('error/DbNotFound', $output);
    
     * }
     */

}