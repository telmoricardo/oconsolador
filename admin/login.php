<?php
require_once '../ConfigAdmin.php';
use App\Controller\UserController;
$userController = new UserController();

$btnLogar = filter_input(INPUT_POST, 'btnLogar', FILTER_SANITIZE_STRING);
if ($btnLogar):
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    //Email e Senha não pode estar vazio
    if ($email != null && !empty($email) && $password != null && !empty($password)):
        //pegando dados do usuario atraves do emal
        $dadosUsuario = $userController->findUser("email", $email);

        if($dadosUsuario != null):
            //retorno dados do usuário
            if (password_verify($password, $dadosUsuario->password) && $dadosUsuario->status == 1):
                $validarUsuario = $userController->authenticationUser($email, $password);
                if ($validarUsuario != null):
                    $_SESSION["id"] = $validarUsuario->id;
                    $_SESSION["name"] = $validarUsuario->name;
                    $_SESSION["level"] = $validarUsuario->level;
                    $_SESSION["logado"] = true;

                    $idUser = $_SESSION["id"];
                    if ($idUser > 0):
                        $lastupdate = date("Y-m-d H:i:s");

//                        $dataAcess = array('user_lastaccess' => $lastupdate);
//                        $userController->lastAccess($dataAcess, "user_id", $idUser);
                    endif;

                    //se usuário existir, redirecionamento para pagina checkout
                    $insertGoTo = HOME . "/index.php";
                    header("refresh:3;url={$insertGoTo}");
                    /*$resultado = "<div class='alert alert-success'>
                                    <span>Seja Bem-vindo <b>{$_SESSION["name"]}</b>, estamos redirecionando para o painel administrativo</b></span>
                                 </div>";*/
                    echo '<span>Seja Bem-vindo <b> '.$_SESSION["name"].'</b>, estamos redirecionando para o painel administrativo</b></span>';
                endif;
            else:
                echo "<span><b>Error, </b> usuario ou senha incompativeis!!!</span>";
            endif;
        else:
          echo "<span><b>Error, </b> usuário não cadastrado, favor cadastre-se!!!</span>";
        endif;
    else:
        echo "<span><b>Informe, </b> e-mail e senha para acessar o painel!</span>";
    endif;
endif;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Consolador | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/assets/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/assets/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>Consolador</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça login para iniciar sua sessão</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembre de mim
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" name="btnLogar" class="btn btn-primary btn-block" value="Login">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Esqueci a minha senha</a>
      </p>      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</body>
</html>
