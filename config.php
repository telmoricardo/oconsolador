<?php
// CONFIGURAÇÕES DEFAULT ####################
//set_time_limit(0);
//session_start();
//ob_start();
//date_default_timezone_set('America/Sao_Paulo');
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set( 'America/Sao_Paulo' );

// CONFIGURAÇÕES ENVIRONMENT ####################
require 'environment.php';

// CONFIGURAÇÕES DA URL AMIGAVEL ####################
$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

// CONFIGRAÇÕES DO AUTOLOAD ####################
require_once 'vendor/autoload.php';

if (ENVIRONMENT == 'development') {
    // CONFIGURAÇÕES DO TEMA ####################
    define('HOME', 'http://localhost/oconsolador');
    define('THEME', 'site');
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
    define('HOME', 'http://oconsolador.org.br');
    define('THEME', 'site');
    define('INCLUDE_PATH', HOME . '/themes/' . THEME);
    define('REQUIRE_PATH', 'themes/' . THEME);

    // CONFIGRAÇÕES DO BANCO ####################
    define('HOST', '127.0.0.1');
    define('USER', 'oconsol2_novo');
    define('PASS', 'K@rdec01');
    define('DBSA', 'oconsol2_novo');
}

//------------------------AUTOLOAD PARA NÃO INSTANCIAR O REQUIRE EM ALGUMAS PAGINAS------------------------ //
/*function __autoload($Class) {
    $cDir = ['Util', 'DAL', 'Model', 'Controller'];
    $iDir = null;

    foreach ($cDir as $dirName):
       if (!$iDir && file_exists(__DIR__ . '/' . $dirName . '/' . $Class . '.php') && !is_dir(__DIR__ . '/' . $dirName . '/' . $Class . '.php')):
            include_once (__DIR__ . '/' . $dirName . '/' . $Class . '.php');
            $iDir = true;
        endif;
    endforeach;

    if (!$iDir):
        trigger_error("Não foi possível incluir classe {$Class}.php", E_USER_ERROR);
        die;
    endif;
}*/



