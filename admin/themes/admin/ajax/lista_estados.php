
<?php
require_once '../../../../ConfigAdmin.php';
sleep(2);
$estadoController = new \App\Controller\EstadoController();

echo( json_encode( $estadoController->listaEstados() ) );

/*if($pessoaController->Cadastrar($pessoa)):
   echo json_encode('Sucesso: Usuário Cadastrado com sucesso!');
else:
    echo json_encode('Error: Favor preencha os campos que possuem *!');
endif;*/





