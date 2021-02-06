<?php


namespace App\DAO;

use App\Model\Category;

class CategoryDAO extends Conn
{

    private $debug;
    private $data;

    public function Cadastrar($data){
        try {
            $this->data = $data;
            $model = new Category();
            $model::Create($data);
            return $model::getResult();
        }catch (\PDOException $e){
            if($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //listar posts com limite
    public function allPosts($inicio = null, $quantidade = null) {
        try {
            $model = new Category();
            $Query = "SELECT * FROM category ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
            $model::FullRead($Query, array());
            return $model::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //listar
    public function all() {
        try {
            $model = new Category();
            $Query = "SELECT * FROM category WHERE status = 1 ORDER BY id DESC";
            $model::FullRead($Query, array());
            return $model::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //conta as quantidades de listas
    public function countPosts() {
        try {
            $model = new Category();
            $Query = "SELECT * FROM category";
            $model::FullRead($Query, array());
            $pkCount = ($model::getResult() != null) ? count($model::getResult()) : 0;
            return $total = $pkCount;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //seleciona o campo e o valor
    public function find($field, $value) {
        try {
            $model = new Category();
            $model::ReadByField($field, $value);
            return $model::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //atualizar
    public function Atualizar($Data, $cod_pk, $id) {
        try {
            $this->Data = $Data;
            $sliderModel = new Slider();
            $sliderModel::Update($Data, $cod_pk, $id);
            return $sliderModel::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //excluir
    public function Excluir($cod_pk, $id) {
        try {
            $sliderModel = new Slider();
            $sliderModel::Delele($cod_pk, $id);
            return $sliderModel::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }



}