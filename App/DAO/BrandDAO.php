<?php


namespace App\DAO;

use App\Model\Brand;

class BrandDAO extends Conn
{

    private $debug;
    private $data;

    public function Cadastrar($data){
        try {
            $this->data = $data;
            $model = new Brand();
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

    //listar com limite
    public function all($inicio = null, $quantidade = null) {
        try {
            $model = new Brand();
            $Query = "SELECT * FROM brands ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
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
    public function counts() {
        try {
            $model = new Brand();
            $Query = "SELECT * FROM brands";
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
            $model = new Brand();
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
            $model = new Brand();
            $model::Update($Data, $cod_pk, $id);
            return $model::getResult();
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
            $model = new Post();
            $model::Delele($cod_pk, $id);
            return $model::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //listar post por status e category
    public function allStatus($status, $inicio = null, $quantidade = null){
        try {
            $model = new Brand();
            $query = "SELECT * FROM brands WHERE status = ? ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
            $arrayParams = array($status);
            $model::SQLGeneric($query,$arrayParams,true);
            return $model::getResult();
        }catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}