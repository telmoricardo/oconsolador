<?php


namespace App\Controller;


use App\DAO\CategoryDAO;

class CategoryController
{

    private $categoryDAO;
    private $data;


    public function __construct()
    {
        $this->categoryDAO = new CategoryDAO();
    }

    public function Cadastrar($data)
    {
        $this->data = $data;

        if($this->data != null):
            return $this->postDAO->Cadastrar($data);
        else:
            return false;
        endif;

    }

    //listar usuários com limite
    public function allPosts($inicio = null, $quantidade = null) {
        return $this->postDAO->allPosts($inicio, $quantidade);
    }

    //listar
    public function all() {
        return $this->categoryDAO->all();
    }
    //QUANTIDADE DE POSTS - METODO AUXILIAR PARA FAZER PAGINAÇÃO DE RESULTADOS
    public function countPosts() {
        return $this->postDAO->countPosts();
    }

    //RETORNO DADOS
    public function find($field, $value) {
        return $this->postDAO->find($field, $value);
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
}