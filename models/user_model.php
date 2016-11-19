<?php
use ActiveRecord\Model as ActiveRecord;

class User_Model extends ActiveRecord {
    

    public static $table_name   = 'user';
    public static $primary_key  = 'id';

    
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
    
    static $validates_size_of = [
        ['username', 'within' => [1,20]],
        ['password', 'minimum' => 6],
        ['name', 'within' => [2,50]],
        ['surname', 'within' => [2,50]],
    ];
    
    static $validates_inclusion_of = [
            ['gender', 'in' => ['male', 'female']],
            ['role', 'in' => ['0', '1']]
    ];
     
    static $validates_uniqueness_of = [
        ['username', 'message' => 'is already used.'],
        ['email', 'message' => 'is already used.'],
        ['photo', 'message' => 'change photo name']
    ];
    
    static $validates_format_of = [
        ['email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/']  
    ];
    

    public function beforeSave()
    {
        if($this->password)
            $this->password = Hash::hashPassword($this->password);
        if($this->photo == NULL)
            $this->photo = "default.png";
    }
    
    public function uploadFile($tmp, $destination)
    {
        move_uploaded_file($tmp, 'assets/img/'.$destination);
    }


   
}