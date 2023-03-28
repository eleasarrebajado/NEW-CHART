<?php

class ValidateClass{
    private $userName;
    private $userPass;

    public function __construct($userName, $userPass){
        $this->$userName = $userName;
        $this->$userPass = $userPass;
    }

    public function get_name(){
        $result;
        if(empty($this->$userName) || empty($this->$userPass)){
            $result = FALSE;
        }else{
            $result = TRUE;
        }
        return $result;
    }

    public function invalidUser(){
        $result;
        if(!preg_match("/^[a-zA-Z-0-9]*$/", $userName)){
            $result = FALSE;
        }else {
            $result = TRUE;
        }
        return $result;
    }
  
}