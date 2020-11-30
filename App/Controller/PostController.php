<?php


namespace App\Controller;


use App\DAO\PostDAO;

class PostController
{

    private $postDAO;
    private $data;


    public function __construct()
    {
        $this->postDAO = new PostDAO();
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
    //QUANTIDADE DE POSTS - METODO AUXILIAR PARA FAZER PAGINAÇÃO DE RESULTADOS
    public function countPosts() {
        return $this->postDAO->countPosts();
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
}