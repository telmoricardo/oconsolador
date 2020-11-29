<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1></h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= HOME; ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= HOME; ?>/user/index">Usuário</a></li>
                <li class="breadcrumb-item active">Novo</li>
            </ol>
            </div>
        </div>
    </div>
</section>
<?php
$userController = new \App\Controller\UserController();
$resultado = "";
$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):
    $registration = date("Y-m-d H:i:s");
    $usuario = array(
        'name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
        'lastname' => filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING),
        'document' => filter_input(INPUT_POST, 'document', FILTER_SANITIZE_STRING),
        'telephone' => filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING),
        'cell' => filter_input(INPUT_POST, 'cell', FILTER_SANITIZE_STRING),
        'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
        'password' => password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), CRYPT_BLOWFISH, ['cost' => 12]),
        'level' => filter_input(INPUT_POST, 'level', FILTER_SANITIZE_NUMBER_INT),
        'genre' => filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_NUMBER_INT),
        'status' => filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT),
        'registration' => $registration
    );

   if($userController->Cadastrar($usuario)):
       $resultado = '<div class="trigger trigger-infor">
                        <p><b class="trigger-accept-bold">Sucesso:</b> Usuário Cadastrado com sucesso!</p>
                      </div>';
       $insertGoTo = HOME."/user/index";
       header("refresh:2;url={$insertGoTo}");
   else:
       $resultado = '<div class="trigger trigger-error">
                        <p><b class="trigger-accept-bold">Error:</b> Favor preencha os campos que possuem *!</p>
                      </div>';
   endif;
endif;
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?= $resultado; ?>
            </div>
        </div>
        <div class="row">         
            <div class="col-md-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar Usuário</h3>
              </div>
             
              <form method="post" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Primeiro Nome</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Primeiro Nome:"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lastname">Último Nome</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Sobrenome:"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="document">CPF</label>
                                <input type="text" id="document" name="document" class="form-control" placeholder="000.000.000-00"  />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telefone:<span></span></label>
                                <input type="text"  id="telephone" name="telephone" class="form-control" placeholder="(99) 9999-9999" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Celular:<span></span></label>
                                <input type="text" id="cell" name="cell" class="form-control" placeholder="(99) 99999-9999" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>E-mail: <span id="rsEmail">&nbsp;</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail:"  />
                            </div>
                        </div>
                    </div>

                    <div class="row">         
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha (Entre 5 e 11 caracteres)</label>
                                <input type="password" id="password" class="form-control"  name="password" placeholder="Senha:" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label>Nível: <span id="rsLevel">&nbsp;</span></label>
                            <select class="form-control" id="level" name="level">
                                <option value="">Nível de acesso:</option>
                                <?php
                                $NivelDeAcesso = getLevel();
                                foreach ($NivelDeAcesso as $Nivel => $Desc):
                                    if ($Nivel):
                                        echo "<option";                                        
                                        echo " value='{$Nivel}'>{$Desc}</option>";
                                    endif;
                                endforeach;
                                ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Sexo: <span id="rsSexo">&nbsp;</span></label>                        
                                <select class="form-control" id="genre" name="genre">
                                    <option selected disabled value="">Gênero:</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Status: <span id="rsStatus">&nbsp;</span></label>
                            <select class="form-control" id="status" name="status">
                                <option selected disabled value="">Status:</option>
                                <option value="1">Ativo</option>
                                <option value="2">Bloqueado</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagem de Perfil</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" id="myfile" name="myfile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" name="btnEnviar" value="Enviar">
                </div>
              </form>
            </div>
          </div>          
        </div>    
    </div>
</section>