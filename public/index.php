<?php

require_once(dirname(__FILE__,2)."/src/config/config.php");
require_once(realpath(MODEL_PATH."/login.php"));
//require_once(dirname(__FILE__,2)."/src/views/login.php");


$login = new login([
    'email'=>'chaves@cod3r.com.br',
    'password'=>'a'
]);

try{
    $login->checkLogin();
    echo "Sucesso no login!";
}catch(Exception $e){
    echo "erro ao logar";
}

?>