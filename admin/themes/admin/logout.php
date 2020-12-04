<?php

////iniciando a sessao
//session_start();

//mudando o valor de logado para false
$_SESSION['logado'] = false;

//destruindo a sessao
session_destroy();

//retorna para a pagina index.php
//header('location: login.php');

$insertGoTo = HOME . "/login.php";
header("refresh:0;url={$insertGoTo}");