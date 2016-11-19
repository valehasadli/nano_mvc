<?php
use ActiveRecord\Model as ActiveRecord;

class User_Model extends ActiveRecord {
    
/*
 * must be use table name which use and primary key for coloumn
 * 
 */
    public static $table_name   = 'user';
    public static $primary_key  = 'id';

    
    /*
     * validate require field
     */
    
    static $validates_presence_of = [
        ['username'],
        ['password'],
        ['name'],
        ['surname'],
        ['email'],
        ['gender'],
        ['role'],
        ['photo']
    ];
    
    
    /*
     * fields size 
     */
    
    static $validates_size_of = [
        ['username', 'within' => [1,20]],
        ['password', 'minimum' => 6],
        ['name', 'within' => [2,50]],
        ['surname', 'within' => [2,50]],
    ];
    
    /*
     * boolens
     */
    
    static $validates_inclusion_of = [
            ['gender', 'in' => ['male', 'female']],
            ['role', 'in' => ['0', '1', '2']]
    ];
     
    /*
     * unique field require
     */
    static $validates_uniqueness_of = [
        ['username', 'message' => 'is already used.'],
        ['email', 'message' => 'is already used.'],
        ['photo', 'message' => 'change photo name']
    ];
    
    /*
     *  @validates_format_of
     *  use reg ex for email
     */
    
    static $validates_format_of = [
        ['email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/']  
    ];
    

    # before_save() is callback function
    /*
     * if password input use hashPassword static method for salt hash
     * if photo blank is null save default.png to database
     */
    public function before_save()
    {
        if($this->password)
            $this->password = Hash::hashPassword($this->password);
        if($this->photo == null)
            $this->photo = "default.png";
    }
    
    /*
     * upload file method
     */
    
    public function uploadFile($tmp, $destination)
    {
        move_uploaded_file($tmp, 'assets/img/'.$destination);
    }


   
}