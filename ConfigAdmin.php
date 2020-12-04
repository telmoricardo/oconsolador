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
    //PRODUÇÃO
    // CONFIGURAÇÕES DO TEMA ####################
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
    define('HOME', 'http://oconsolador.org.br/admin');
     define('THEME', 'admin');
    define('INCLUDE_PATH', HOME . '/themes/' . THEME);
    define('REQUIRE_PATH', 'themes/' . THEME);
    
    // CONFIGRAÇÕES DO BANCO ####################
    define('HOST', '127.0.0.1');
    define('USER', 'oconsol2_novo');
    define('PASS', 'K@rdec01');
    define('DBSA', 'oconsol2_novo');
}

?>


