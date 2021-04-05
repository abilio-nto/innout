<?php

require_once(dirname(__FILE__,2)."/src/config/config.php");
require_once(dirname(__FILE__,2)."/src/models/Users.php");

$users = new Users(['nome'=>'abilio','email'=>'Abiliofcb@gmail.com']);
print_r($users);
echo "fim!"
?>