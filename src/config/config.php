<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt_BR', 'pt_br.utf-8', 'portuguese');

//pastas

define('MODEL_PATH', realpath(dirname(__FILE__)).'/../models');

require_once(realpath(dirname(__FILE__).'/database.php'));
require_once(realpath(MODEL_PATH."/Models.php"));
?>