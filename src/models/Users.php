<?php

require_once(realpath(MODEL_PATH."/Models.php"));

class Users extends Models{
    protected static $tablename = '';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',
    ];
}


?>