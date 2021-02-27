
<?php
require_once '../../../../ConfigAdmin.php';
sleep(2);
$pessoaController = new \App\Controller\PessoaController();
$enderecoController = new \App\Controller\EnderecoController();
$helper = new \App\Helper\Helper();

$registration = date("Y-m-d H:i:s");
//$telefone = $helper::limpaTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));
//$celular = $helper::limpaTelefone(filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING));
$cpf = $helper::limpaCPFCNPJ(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));

/*$endereco = array(
    'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING),
    'logradouro' => filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING),
    'bairro' => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING),
    'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING),
    'complemento' => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING),
    'id_estado' => filter_input(INPUT_POST, 'id_estado', FILTER_SANITIZE_STRING),
    'id_cidade' => filter_input(INPUT_POST, 'id_cidade', FILTER_SANITIZE_STRING)
);
$enderecoController->Cadastrar($endereco);*/
//$idEndereco = $enderecoController->Cadastrar($endereco);


$pessoa = array(
    'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING),
    'cpf' => $cpf,
    'rg' => filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING),
    'dt_nascimento' => filter_input(INPUT_POST, 'dt_nascimento', FILTER_SANITIZE_STRING),
    'estado_civil' => filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_STRING),
    'sexo' => filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING),
    'naturalidade' => filter_input(INPUT_POST, 'naturalidade', FILTER_SANITIZE_STRING)
//    'id_contrato' => 1,
//    'id_complemento' => 1
);

var_dump($pessoa);

if($pessoaController->Cadastrar($pessoa)):
   echo json_encode('Sucesso: Usuário Cadastrado com sucesso!');
else:
    echo json_encode('Error: Favor preencha os campos que possuem *!');
endif;





