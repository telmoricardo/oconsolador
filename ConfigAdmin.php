<?php
session_start();
ob_start();
require 'environment.php';
date_default_timezone_set('America/Sao_Paulo');


// CONFIGURAÇÕES DA URL AMIGAVEL ####################
$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

// CONFIGRAÇÕES DO AUTOLOAD ####################
require_once 'vendor/autoload.php';


if (ENVIRONMENT == 'development') {
    // CONFIGURAÇÕES DO TEMA ####################
    // DEFINE A BASE DO SITE ####################
    define('HOME', 'http://localhost/consolador/admin');
    define('THEME', 'admin');
    define('INCLUDE_PATH', HOME . '/themes/' . THEME);
    define('REQUIRE_PATH', 'themes/' . THEME);
    

    // CONFIGRAÇÕES DO BANCO ####################
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('DBSA', 'consolador');
} else {
    //PRODUÇÃO
    // CONFIGURAÇÕES DO TEMA ####################
    define('HOME', '');
     define('THEME', 'admin');
    define('INCLUDE_PATH', HOME . '/themes/' . THEME);
    define('REQUIRE_PATH', 'themes/' . THEME);
    
    // CONFIGRAÇÕES DO BANCO ####################
    define('HOST', '127.0.0.1');
    define('USER', 'cial_loja');
    define('PASS', 'a1b2c3d4');
    define('DBSA', 'cial_loja');
}

?>


