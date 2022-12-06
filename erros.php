<?php
error_reporting(E_ALL);
ini_set('display_errors',1);//erros ligado
//ini_set('log_errors',1);//log ligado
//ini_set('error_log','erro');//manda os erro pro arquivo erro
set_error_handler(function ($errno,$errstr,$errfile,$errline){

switch ($errno){
    case E_WARNING:
        echo "isso é perigoso".PHP_EOL;
        break;
    case E_NOTICE:
        echo "e melhor n fazer isso".PHP_EOL;
        break;
    case E_ERROR:
        echo "deu ruim";
        break;
}
});
echo $t;
echo $a[1];

echo CONSTANTE;