<?php


namespace App\Controller;


use App\DAO\BrandDAO;

class BrandController
{

    private $brandDAO;
    private $data;


    public function __construct()
    {
        $this->brandDAO = new BrandDAO();
    }

    public function Cadastrar($data)
    {
        $this->data = $data;

        if($this->data != null):
            return $this->brandDAO->Cadastrar($data);
        else:
            return false;
        endif;

    }

    //listar com limite
    public function all($inicio = null, $quantidade = null) {
        return $this->brandDAO->all($inicio, $quantidade);
    }
    //QUANTIDADE METODO AUXILIAR PARA FAZER PAGINAÇÃO DE RESULTADOS
    public function counts() {
        return $this->brandDAO->counts();
    }

    //RETORNO DADOS
    public function find($field, $value) {
        return $this->brandDAO->find($field, $value);
    }

    //atualiza
    public function Atualizar($Data, $cod_pk, $id) {
        $this->Data = $Data;
        if ($Data['title'] && strlen($Data['title']) >= 2):
            return $this->brandDAO->Atualizar($Data, $cod_pk, $id);
        else:
            return false;
        endif;
    }

    //Excluir
    public function Excluir($cod_pk, $id) {
        return $this->brandDAO->Excluir($cod_pk, $id);
    }

    //listar post por status e category
    public function allStatus($status, $inicio = null, $quantidade = null){
        return $this->brandDAO->allStatus($status, $inicio, $quantidade);
    }


}