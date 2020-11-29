<?php


namespace App\Controller;


use App\DAO\UserDAO;

class UserController
{

    private $userDAO;
    private $data;


    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function Cadastrar($data)
    {
        $this->data = $data;

        if($this->data != null):
            return $this->userDAO->Cadastrar($data);
        else:
            return false;
        endif;


    }

    //listar usuários com limite
    public function allUser($inicio = null, $quantidade = null) {
        return $this->userDAO->allUser($inicio, $quantidade);
    }
    //QUANTIDADE DE USUARIOS - METODO AUXILIAR PARA FAZER PAGINAÇÃO DE RESULTADOS
    public function countUsers() {
        return $this->userDAO->countUsers();
    }

    //RETORNO DADOS
    public function findUser($field, $value) {
        return $this->userDAO->findUser($field, $value);
    }

    //atualiza o usuario
    public function Atualizar($Data, $cod_pk, $id) {
        $this->Data = $Data;
        if ($Data['name'] && strlen($Data['name']) >= 2):
            return $this->userDAO->Atualizar($Data, $cod_pk, $id);
        else:
            return false;
        endif;
    }
}