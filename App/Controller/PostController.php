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

    //listar com limite
    public function allPosts($inicio = null, $quantidade = null) {
        return $this->postDAO->allPosts($inicio, $quantidade);
    }
    //QUANTIDADE DE POSTS - METODO AUXILIAR PARA FAZER PAGINAÇÃO DE RESULTADOS
    public function countPosts() {
        return $this->postDAO->countPosts();
    }

    //RETORNO DADOS
    public function find($field, $value) {
        return $this->postDAO->find($field, $value);
    }

    //atualiza
    public function Atualizar($Data, $cod_pk, $id) {
        $this->Data = $Data;
        if ($Data['title'] && strlen($Data['title']) >= 2):
            return $this->postDAO->Atualizar($Data, $cod_pk, $id);
        else:
            return false;
        endif;
    }

    //Excluir
    public function Excluir($cod_pk, $id) {
        return $this->postDAO->Excluir($cod_pk, $id);
    }

    //listar post por status e category
    public function allStatusCategory($status, $category, $inicio = null, $quantidade = null){
        return $this->postDAO->allStatusCategory($status,$category,$inicio, $quantidade);
    }

    public function countPostsStatus($status) {
        return $this->postDAO->countPostsStatus($status);
    }


}