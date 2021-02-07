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
                <form id="form">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div id="stepper1" class="bs-stepper">
                                <div class="bs-stepper-header">
                                    <div class="step" data-target="#test-l-1">
                                        <button type="button" class="btn step-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Informações Pessoais</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#test-l-2">
                                        <button type="button" class="btn step-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Endereço</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#test-l-3">
                                        <button type="button" class="btn step-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">Informações Adicionais</span>
                                        </button>
                                    </div>
                                    
                                </div>
                                <div class="bs-stepper-content">

                                    <div id="test-l-1" class="content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name">Nome Completo</label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Primeiro Nome:"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="document">CPF</label>
                                                        <input type="text" id="cpfCnpjDevedor" name="cpf" class="form-control" placeholder="000.000.000-00"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="document">RG</label>
                                                        <input type="text" id="rg" name="rg" class="form-control" placeholder="0000000000"  />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="name">Data Nascimento</label>
                                                        <input type="date" id="dt_nascimento" name="name" class="form-control" placeholder="Data Nascimento"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="document">Estado Civil</label>
                                                        <select class="form-control" id="estado_civil" name="estado_civil">
                                                            <option>Selecione:</option>
                                                            <?php
                                                                $estadoCivilENUM = EstadoCivilENUM();
                                                                foreach ($estadoCivilENUM as $statusCivil => $desc):
                                                                    if ($statusCivil):
                                                                        echo "<option";
                                                                        echo " value='{$statusCivil}'>{$desc}</option>";
                                                                    endif;
                                                                endforeach;
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="sexo">Sexo</label>
                                                        <select class="form-control" id="sexo" name="sexo">
                                                            <option >Gênero:</option>
                                                            <?php
                                                            $sexoEnum = SexoENUM();
                                                            foreach ($sexoEnum as $sexo => $desc):
                                                                if ($sexo):
                                                                    echo "<option";
                                                                    echo " value='{$sexo}'>{$desc}</option>";
                                                                endif;
                                                            endforeach;
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="celular">Celular*</label>
                                                        <input type="text" id="celular" class="form-control" name="celular" placeholder="(00) 00000-0000" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="telefone">Telefone</label>
                                                        <input type="text" id="telefone" class="form-control" name="telefone" placeholder="(00) 0000-0000" />
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Nome da mãe:<span></span></label>
                                                        <input type="text" id="telephone" name="telephone" class="form-control" placeholder="nome da mãe" />
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Nome do pai:<span></span></label>
                                                        <input type="text" id="" name="cell" class="form-control" placeholder="nome do pai" />
                                                    </div>
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

                                            <button class="btn btn-primary" onclick="stepper1.next()">Continuar</button>
                                        </div>
                                    </div>

                                    <div id="test-l-2" class="content">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="name">Cep</label>
                                                    <input type="text" id="cep" name="cep" class="form-control" placeholder="cep:"  />
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="document">Logradouro</label>
                                                    <input type="text" id="logradouro" name="logradouro" class="form-control" placeholder="logradouro"  />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Bairro</label>
                                                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="bairro:"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="document">Nº</label>
                                                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="bairro:"  />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="name">Complemento</label>
                                                    <input type="text" id="complemento" name="complemento" class="form-control" placeholder="complemento:"  />
                                                </div>
                                            </div>                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Estado</label>
                                                    <select name="estados" id="estados" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Município</label>
                                                    <select name="cidades" id="cidades" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" onclick="stepper1.next()">Continuar</button>
                                        <button class="btn btn-warning" onclick="stepper1.previous()">Voltar</button>
                                    </div>

                                    <div id="test-l-3" class="content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Escolaridade</label>
                                                    <select name="escolaridade" id="escolaridade" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="name">Escola</label>
                                                    <input type="text" id="cep" name="cep" class="form-control" placeholder="cep:"  />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Período Escolar</label>
                                                    <select name="escolaridade" id="escolaridade" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Moradia </label>
                                                    <select name="moradia_propria" id="moradia_propria" class="form-control">
                                                        <option value="">Aluguel</option>
                                                        <option value="">Cedia</option>
                                                        <option value="">Própria</option>
                                                    </select>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="row">                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Roupa</label>
                                                    <select name="roupa" id="roupa" class="form-control">
                                                        <option value="">GG</option>
                                                        <option value="">G</option>
                                                        <option value="">M</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Calçados</label>
                                                    <input type="text" id="cep" name="cep" class="form-control" placeholder="cep:"  />
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="document">PROBLEMA DE SAÚDE OU RESTRIÇÃO ALIMENTAR?</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>                                         
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Função</label>
                                                    <select name="instituto" id="instituto" class="form-control">
                                                        <option value="">Trabalhador</option>
                                                        <option value="">Assistido</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Turma</label>
                                                    <select name="instituto" id="instituto" class="form-control">
                                                        <option value="">Esclarecimento</option>
                                                        <option value="">Nível II</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Instituto</label>
                                                    <select name="instituto" id="instituto" class="form-control">
                                                        <option value="">Esclarecimento</option>
                                                        <option value="">Infância</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Trabalho</label>
                                                    <select name="trabalho" id="trabalho" class="form-control">
                                                        <option value="">Sim</option>
                                                        <option value="">Não</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Renda Mensal</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Benefício</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="document">Trabalho/Estágio</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Observação*: <span id="rsStatus">&nbsp;</span></label>
                                                    <textarea rows="2" name="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary" onclick="stepper1.next()">Continuar</button>
                                        <button class="btn btn-warning" onclick="stepper1.previous()">Voltar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>          
        </div>
    </div>
</section>