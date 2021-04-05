<?php

class Models{

    protected static $tablename = '';
    protected static $columns = [];
    protected $values = [];
   
    function __construct($arr){
          $this->loadFromArray($arr);
    }

   
    public function loadFromArray($arr){
          foreach($arr as $key=>$value){
             $this->set($key,$value);
          }
    }


    public function get($key){
        return $values[$key];
    }

    public function set($key, $value){
        $this->value[$key] = $value;
    }

}



?>