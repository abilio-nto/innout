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
             $this->$key = $value;
          }
    }


    public function __get($key){
        return $values[$key];
    }

    public function __set($key, $value){
        $this->values[$key] = $value;
    }

    public static function get($filters = [], $columns = '*'){
        $objects = [];
        $result = static::getResultSetFromSelect($filters,$columns);
        if($result){
            $class = get_called_class();
            while($row = $result->fetch_assoc()){
                array_push($objects, new $class($row));
            }
        }
        return $objects;
    }


    public static function getResultSetFromSelect($filters = [], $columns = '*'){
        $sql = "SELECT ${columns} from ". static::$tablename . static::getFilters($filters);
        $result = database::getResultFromQuery($sql);
        if($result->num_rows === 0){
            return null;
        }else{
            return $result;
        }
        
    }

    private static function getFilters($filters){
        $sql = '';
        if(count($filters)>0){
           $sql.=" WHERE 1 = 1 ";
            foreach($filters as $columns => $value){
                $sql.=" AND ${columns} = ".static::getFormatValue($value);
            } 
        } 
       return $sql;
     }

     private static function getFormatValue($value){
         if(is_null($value)){
             return "NULL";
         }elseif(gettype($value) == 'string'){
             return "'${value}'";
         }else{
             return $value;
         }
     }

}



?>