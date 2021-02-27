<?php


namespace App\Controller;


use App\DAO\CidadeDAO;


class CidadeController
{

    private $cidade;
    private $data;


    public function __construct()
    {
        $this->cidade= new CidadeDAO();
    }

    public function Cadastrar($data)
    {
        $this->data = $data;

        if($this->data != null):
            return $this->cidade->Cadastrar($data);
        else:
            return false;
        endif;


    }

    public function listaCidade(){
        return $this->cidade->listaCidade();
    }

    public function find($field, $value) {
        return $this->cidade->find($field, $value);
    }

    public function listaCidadePorEstado($uf){
        return $this->cidade->listaCidadePorEstado($uf);
    }



    //listar usuários com limite
    /*public function allUser($inicio = null, $quantidade = null) {
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

    //Excluir usuario
    public function Excluir($cod_pk, $id) {
        return $this->userDAO->Excluir($cod_pk, $id);
    }

    //autenticação usuario
    public function authenticationUser($email, $password) {
        return $this->userDAO->authenticationUser($email, $password);
    }

    //Logout usuario
    public function userLogout() {
        return $this->userDAO->userLogout();
    }

    public function isLoggedIn() {
        return $this->userDAO->isLoggedIn();
    }*/
}