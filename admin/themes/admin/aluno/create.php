<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1></h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= HOME; ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= HOME; ?>/aluno/index">Aluno</a></li>
                <li class="breadcrumb-item active">Novo</li>
            </ol>
            </div>
        </div>
    </div>
</section>

<?php
$pessoaController = new \App\Controller\PessoaController();
$enderecoController = new \App\Controller\EnderecoController();
$informacaoController = new \App\Controller\InformacaoComplementarController();
$contatoController = new \App\Controller\ContatoController();
$alunoController = new \App\Controller\AlunoController();
$saudeController = new \App\Controller\SaudeController();
$socioEcomomicoController = new \App\Controller\SocioEconomicoController();

$upload = new \App\Helper\Upload();
$helper = new \App\Helper\Helper();

$cpf = $helper::limpaCPFCNPJ(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));
$nomeAluno = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

//dados mae
$nomeMae = filter_input(INPUT_POST, 'nome1', FILTER_SANITIZE_STRING);
$cpfMae = $helper::limpaCPFCNPJ(filter_input(INPUT_POST, 'cpf1', FILTER_SANITIZE_STRING));
$telMae = $helper::limpaTelefone(filter_input(INPUT_POST, 'telefone1', FILTER_SANITIZE_STRING));

//dados pai
$nomePai = filter_input(INPUT_POST, 'nome2', FILTER_SANITIZE_STRING);
$cpfPai = $helper::limpaCPFCNPJ(filter_input(INPUT_POST, 'cpf2', FILTER_SANITIZE_STRING));
$telPai = $helper::limpaTelefone(filter_input(INPUT_POST, 'telefone2', FILTER_SANITIZE_STRING));



$resultado = "";
$idPessoaAluno = '';
$idPessoaMae = '';
$idPessoaPai = '';
$idSaude='';
$idSocioEconomico='';
$arrayDoencas = '';
$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):

    if($nomeAluno != null){
        $endereco = array(
            'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING),
            'logradouro' => filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING),
            'bairro' => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING),
            'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING),
            'complemento' => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING),
            'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING),
            'municipio' => filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING)
        );
        var_dump($endereco);
        //$idEndereco = $enderecoController->Cadastrar($endereco);
        $pessoa = array(
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING),
            'cpf' => $cpf,
            'rg' => filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING),
            'dt_nascimento' => filter_input(INPUT_POST, 'dt_nascimento', FILTER_SANITIZE_STRING),
            'estado_civil' => filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_STRING),
            'sexo' => filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING),
            'naturalidade' => filter_input(INPUT_POST, 'naturalidade', FILTER_SANITIZE_STRING)
        );
        //$idPessoaAluno = $pessoaController->Cadastrar($pessoa);
    }


    //verifica se existe nome da mae
    if($nomeMae != null){
        $pessoa_info1 = array(
            'escolaridade' => filter_input(INPUT_POST, 'escolaridade1', FILTER_SANITIZE_STRING),
            'religiao' => filter_input(INPUT_POST, 'religiao1', FILTER_SANITIZE_STRING),
            'profissao' => filter_input(INPUT_POST, 'profissao1', FILTER_SANITIZE_STRING)
        );

        $pessoa_c1 = array(
            'telefone' => $telMae,
            'email' => filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_STRING)
        );
        $pessoa1 = array(
            'nome' => $nomeMae,
            'cpf' => $cpfMae,
            'sexo' => 'FEMININO',
            'estado_civil' => filter_input(INPUT_POST, 'estado_civil1', FILTER_SANITIZE_STRING),
//            'id_complemento' => $informacaoController->Cadastrar($pessoa_info1),
//            'id_contato' =>  $contatoController->Cadastrar($pessoa_c1)
        );
        //$idPessoaMae = $pessoaController->Cadastrar($pessoa1);
    }

    //verifica se existe nome da pai
    if($nomePai != null){
        $pessoa_info2 = array(
            'escolaridade' => filter_input(INPUT_POST, 'escolaridade2', FILTER_SANITIZE_STRING),
            'religiao' => filter_input(INPUT_POST, 'religiao2', FILTER_SANITIZE_STRING),
            'profissao' => filter_input(INPUT_POST, 'profissao2', FILTER_SANITIZE_STRING)
        );

        $pessoa_c2 = array(
            'telefone' => $telPai,
            'email' => filter_input(INPUT_POST, 'email2', FILTER_SANITIZE_STRING)
        );

        $pessoa2 = array(
            'nome' => $nomePai,
            'cpf' => $cpfPai,
            'sexo' => 'MASCULINO',
            'estado_civil' => filter_input(INPUT_POST, 'estado_civil2', FILTER_SANITIZE_STRING),
            'id_complemento' => $informacaoController->Cadastrar($pessoa_info2),
            'id_contato' =>  $contatoController->Cadastrar($pessoa_c2)
        );
        //$idPessoaPai = $pessoaController->Cadastrar($pessoa2);
    }

    if(isset($_POST['doencas']) != null){
        $array = $_POST['doencas'];
        $arrayDoencas = arrayDoencas($array);
    }

    $saude = array(
        'tipo_parto' => filter_input(INPUT_POST, 'tipo_parto', FILTER_SANITIZE_STRING),
        'prematuro' => filter_input(INPUT_POST, 'prematuro', FILTER_SANITIZE_STRING),
        'resfriados' => filter_input(INPUT_POST, 'resfriados', FILTER_SANITIZE_STRING),
        'doencas' => $arrayDoencas,
        'doencas_atuais' => filter_input(INPUT_POST, 'doencas_atuais', FILTER_SANITIZE_STRING),
        'alergica' => filter_input(INPUT_POST, 'alergica', FILTER_SANITIZE_STRING),
        'alergica_descricao' => filter_input(INPUT_POST, 'alergica_descricao', FILTER_SANITIZE_STRING),
        'medicacao' => filter_input(INPUT_POST, 'medicacao', FILTER_SANITIZE_STRING),
        'quais_medicacao' => filter_input(INPUT_POST, 'quais_medicacao', FILTER_SANITIZE_STRING),
        'motivo_medicacao' => filter_input(INPUT_POST, 'motivo_medicacao', FILTER_SANITIZE_STRING),
    );
    //$idSaude = $saudeController->Cadastrar($saude);

    $socio_ecomicos = array(
        'habitacao' => filter_input(INPUT_POST, 'habitacao', FILTER_SANITIZE_STRING),
        'quem_mora' => filter_input(INPUT_POST, 'quem_mora', FILTER_SANITIZE_STRING),
        'outros' => filter_input(INPUT_POST, 'outros', FILTER_SANITIZE_STRING),
        'is_irmao' => filter_input(INPUT_POST, 'is_irmao', FILTER_SANITIZE_STRING),
        'quantos' => filter_input(INPUT_POST, 'quantos', FILTER_SANITIZE_STRING),
        'renda_familiar' => filter_input(INPUT_POST, 'renda_familiar', FILTER_SANITIZE_STRING),
        'is_bolsa_familia' => filter_input(INPUT_POST, 'is_bolsa_familia', FILTER_SANITIZE_STRING),
        'nis' => filter_input(INPUT_POST, 'nis', FILTER_SANITIZE_STRING),
        'observacoes' => filter_input(INPUT_POST, 'observacoes', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    );

    //$idSocioEconomico = $socioEcomomicoController->Cadastrar($socio_ecomicos);
    $aluno = array(
        'id_pessoa' => $idPessoaAluno,
        'id_pessoa1' => $idPessoaMae,
        'id_pessoa2' => $idPessoaPai,
        'id_saude' => $idSaude,
        'id_socio_economico' => $idSocioEconomico
    );

    /*if($alunoController->Cadastrar($aluno)):
        $resultado = '<div class="trigger trigger-infor">
                         <p><b class="trigger-accept-bold">Sucesso:</b> Aluno Cadastrado com sucesso!</p>
                       </div>';
        $insertGoTo = HOME."/aluno/index";
        header("refresh:2;url={$insertGoTo}");
    else:
        $resultado = '<div class="trigger trigger-error">
                         <p><b class="trigger-accept-bold">Error:</b> Favor preencha os campos que possuem *!</p>
                       </div>';
    endif;*/
endif;
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?= $resultado; ?>
            </div>
        </div>

        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados Pessoais</h3>
                        </div>
                        <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome:"  />
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Data Nascimento</label>
                                            <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" placeholder="Data Nascimento"  />
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="naturalidade">naturalidade</label>
                                            <input type="text" id="naturalidade" class="form-control" name="naturalidade" placeholder="Naturalidade" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Endereço</h3>
                        </div>
                        <div class="row">
                            <div class="card-body">
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
                                            <input type="text" id="numero" name="numero" class="form-control" placeholder="bairro:"  />
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
                                            <select name="estado" id="estados" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Município</label>
                                            <select name="municipio" id="cidades" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados Familiares</h3>
                        </div>
                        <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nome da mãe</label>
                                            <input type="text" id="nome1" name="nome1" class="form-control" placeholder="Nome:"  />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">CPF</label>
                                            <input type="text" id="cpfCnpjDevedor1" name="cpf1" class="form-control" placeholder="000.000.000-00"  />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Telefone</label>
                                            <input type="text" id="telefone1" name="telefone1" class="form-control" placeholder="0000000000"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="name">Profissão</label>
                                            <input type="text" id="profissao1" name="profissao1" class="form-control" placeholder="Profissão"  />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="name">E-mail</label>
                                            <input type="text" id="email1" name="email1" class="form-control" placeholder="e-mail"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Grau de Instrução</label>
                                            <input type="text" id="escolaridade1" name="escolaridade1" class="form-control" placeholder="Grau de Instrução"  />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="document">Estado Civil</label>
                                            <select class="form-control" id="estado_civil1" name="estado_civil1">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="religiao1">Religião</label>
                                            <input type="text" id="religiao1" class="form-control" name="religiao1" placeholder="Religião" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nome do Pai</label>
                                            <input type="text" id="nome2" name="nome2" class="form-control" placeholder="Nome:"  />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">CPF</label>
                                            <input type="text" id="cpfCnpjDevedor2" name="cpf2" class="form-control" placeholder="000.000.000-00"  />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Telefone</label>
                                            <input type="text" id="telefone2" name="telefone2" class="form-control" placeholder="0000000000"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="name">Profissão</label>
                                            <input type="text" id="profissao2" name="profissao2" class="form-control" placeholder="Profissão"  />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="name">E-mail</label>
                                            <input type="text" id="email2" name="email2" class="form-control" placeholder="e-mail"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Grau de Instrução</label>
                                            <input type="text" id="escolaridade2" name="escolaridade2" class="form-control" placeholder="Grau de Instrução"  />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="document">Estado Civil</label>
                                            <select class="form-control" id="estado_civil2" name="estado_civil2">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="religiao2">Religião</label>
                                            <input type="text" id="religiao2" class="form-control" name="religiao2" placeholder="Religião" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados Sobre a Saúde</h3>
                        </div>
                        <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Tipo de parto</label>
                                            <select class="form-control" id="tipo_parto" name="tipo_parto">
                                                <option>Selecione:</option>
                                                <?php
                                                $tipoPartolENUM = PartoENUM();
                                                foreach ($tipoPartolENUM as $tipoParto => $desc):
                                                    if ($tipoParto):
                                                        echo "<option";
                                                        echo " value='{$tipoParto}'>{$desc}</option>";
                                                    endif;
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Prematuro</label>
                                            <select class="form-control" id="prematuro" name="prematuro">
                                                <option>Selecione:</option>
                                                <?php
                                                $prematuroENUM = PrematuroENUM();
                                                foreach ($prematuroENUM as $prematuro => $desc):
                                                    if ($prematuro):
                                                        echo "<option";
                                                        echo " value='{$prematuro}'>{$desc}</option>";
                                                    endif;
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="resfriados">Resfriados constantes?</label>
                                            <select class="form-control" id="resfriados" name="resfriados">
                                                <option>Selecione:</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="document">Doenças que já teve:</label>
                                            <div class="form-group clearfix">
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="sarampo" name="doencas[]" value="sarampo">
                                                    <label for="sarampo">
                                                        sarampo
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="catapora" name="doencas[]" value="catapora">
                                                    <label for="catapora">
                                                        catapora
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="variola" name="doencas[]" value="variola">
                                                    <label for="variola">
                                                        varíola
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="coqueluche" name="doencas[]" value="coqueluche">
                                                    <label for="coqueluche">coqueluche</label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="caxumba" name="doencas[]" value="caxumba">
                                                    <label for="caxumba">
                                                        caxumba
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="rubeola" name="doencas[]" value="rubeola">
                                                    <label for="rubeola">
                                                        rubéola
                                                    </label>
                                                </div>

                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="pneumonia" name="doencas[]" value="pneumonia">
                                                    <label for="pneumonia">
                                                        pneumonia
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="asma" name="doencas[]" value="asma">
                                                    <label for="asma">
                                                        asma
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="bronquite" name="doencas[]" value="bronquite">
                                                    <label for="bronquite">
                                                        bronquite
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" id="dengue" name="doencas[]" value="dengue">
                                                    <label for="dengue">
                                                        dengue
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="doencas_atuais">Doenças atuais</label>
                                            <input type="text" id="doencas_atuais" class="form-control" name="doencas_atuais" placeholder="Doenças Atuais" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="alergica">É alérgica?</label>
                                            <select class="form-control" id="alergica" name="alergica">
                                                <option>Selecione:</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="alergica_descricao">A quê?</label>
                                            <input type="text" id="alergica_descricao" class="form-control" name="alergica_descricao" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="alergica">Toma alguma medicação?</label>
                                            <select class="form-control" id="medicacao" name="medicacao">
                                                <option>Selecione:</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="quais_medicacao"> Qual (is)?</label>
                                            <input type="text" id="quais_medicacao" class="form-control" name="quais_medicacao" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="motivo_medicacao">Por quê?</label>
                                            <input type="text" id="motivo_medicacao" class="form-control" name="motivo_medicacao" placeholder="Doenças Atuais" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados Sócio-Econômicos</h3>
                        </div>
                        <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Habitação</label>
                                            <select class="form-control" id="habitacao" name="habitacao">
                                                <option>Selecione:</option>
                                                <?php
                                                $habitacaoENUM = habitacaoENUM();
                                                foreach ($habitacaoENUM as $habitacao => $desc):
                                                    if ($habitacao):
                                                        echo "<option";
                                                        echo " value='{$habitacao}'>{$desc}</option>";
                                                    endif;
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="document">Com quem mora?</label>
                                            <select class="form-control" id="quem_mora" name="quem_mora">
                                                <option>Selecione:</option>
                                                <?php
                                                $quemMoraEnum = moraComQuemENUM();
                                                foreach ($quemMoraEnum as $alguemMora => $desc):
                                                    if ($alguemMora):
                                                        echo "<option";
                                                        echo " value='{$alguemMora}'>{$desc}</option>";
                                                    endif;
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="outros">Outros</label>
                                                <input type="text" id="outros" class="form-control" name="outros" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="is_irmao">Tem irmãos?</label>
                                            <select class="form-control" id="is_irmao" name="is_irmao">
                                                <option>Selecione:</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="quantos">Quantos</label>
                                            <input type="text" id="quantos" class="form-control" name="quantos" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="renda_familiar">Renda familiar:</label>
                                            <input type="text" id="renda_familiar" class="form-control" name="renda_familiar" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="is_bolsa_familia">Recebe Bolsa Família:?</label>
                                            <select class="form-control" id="is_bolsa_familia" name="is_bolsa_familia">
                                                <option>Selecione:</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nis">NIS</label>
                                            <input type="text" id="nis" class="form-control" name="nis" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Observações Gerais</label>
                                        <textarea rows="3" name="observacoes" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn btn-success" name="btnEnviar" value="Salvar">
                    </div>
              </div>
            </div>
        </form>
    </div>
</section>

