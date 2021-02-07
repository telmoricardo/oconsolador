
<?php
require_once '../../../../ConfigAdmin.php';
sleep(2);
$pfController = new \App\Controller\PessoaFisicaController();
$enderecoController = new \App\Controller\EnderecoController();
$helper = new \App\Helper\Helper();

$registration = date("Y-m-d H:i:s");
$telefone = $helper::limpaTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));
$celular = $helper::limpaTelefone(filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING));
$cpf = $helper::limpaCPFCNPJ(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));

$endereco = array(
    'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING),
    'logradouro' => filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING),
    'bairro' => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING),
    'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING),
    'complemento' => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING),
    'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING),
    'municipio' => filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING)
);
$idEndereco = $enderecoController->Cadastrar($endereco);


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
    'dt_registrado' => $registration,
    'id_endereco' => $idEndereco

);


if($pfController->Cadastrar($pessoa_fisica)):
   echo json_encode('Sucesso: Usuário Cadastrado com sucesso!');
else:
    echo json_encode('Error: Favor preencha os campos que possuem *!');
endif;





