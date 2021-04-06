<?php

require_once(realpath(MODEL_PATH."/Users.php"));

class Login extends Models{

  public function checkLogin(){
   
    $user = Users::getOne(['email' => $this->email]);

    if($user){
       if(password_verify($this->password, $user->password)){
           return $user;
       }
       
    }else{
        throw new Exception();
    }
  }


}

?>