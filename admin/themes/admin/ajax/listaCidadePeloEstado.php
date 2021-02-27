
<?php
require_once '../../../../ConfigAdmin.php';
sleep(2);

$cod_estado = $_GET['idEstado'];
$cidadeController = new \App\Controller\CidadeController();

//echo( json_encode( $cidadeController->listaCidade() ) );
echo( json_encode( $cidadeController->listaCidadePorEstado($cod_estado)) );

/*if($pessoaController->Cadastrar($pessoa)):
   echo json_encode('Sucesso: Usuário Cadastrado com sucesso!');
else:
    echo json_encode('Error: Favor preencha os campos que possuem *!');
endif;*/





