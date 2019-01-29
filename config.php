<?php

require 'environment.php';

global  $db;
$db = array();

if (ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/semur/");
    $db['dbname'] = 'nti';
    $db['host'] = '127.0.0.1';
    $db['dbuser'] = 'root';
    $db['dbpass'] = 'root';
} else {
    define("BASE_URL", "htpp://meusite.com.br/");

    // Esse camndo é para o servidor.
    // $db['dbname'] = 'estrutura_mcv';
    // $db['host'] = 'localhost';
    // $db['dbuser'] = 'root';
    // $db['dbpass'] = '';
}

