
<?php
require_once '../../../../ConfigAdmin.php';
sleep(2);
$pfController = new \App\Controller\PessoaFisicaController();
$helper = new \App\Helper\Helper();

$registration = date("Y-m-d H:i:s");
$telefone = $helper::limpaTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));
$celular = $helper::limpaTelefone(filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING));
$cpf = $helper::limpaCPFCNPJ(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));

$pessoa_fisica = array(
    'nome_completo' => filter_input(INPUT_POST, 'nome_completo', FILTER_SANITIZE_STRING),
    'cpf' => $cpf,
    'rg' => filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING),
    'dt_nascimento' => filter_input(INPUT_POST, 'dt_nascimento', FILTER_SANITIZE_STRING),
    'estado_civil' => filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_STRING),
    'sexo' => filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING),
    'celular' => $celular,
    'telefone' => $telefone,
    'filiacao_materna' => filter_input(INPUT_POST, 'filiacao_materna', FILTER_SANITIZE_STRING),
    'filiacao_paterna' => filter_input(INPUT_POST, 'filiacao_paterna', FILTER_SANITIZE_STRING),
    'dt_registrado' => $registration
);


if($pfController->Cadastrar($pessoa_fisica)):
   echo json_encode('Sucesso: Usuário Cadastrado com sucesso!');
else:
    echo json_encode('Error: Favor preencha os campos que possuem *!');
endif;





