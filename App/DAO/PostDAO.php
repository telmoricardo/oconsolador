<?php


namespace App\DAO;

use App\Model\Post;

class PostDAO extends Conn
{

    private $debug;
    private $data;

    public function Cadastrar($data){
        try {
            $this->data = $data;
            $model = new Post();
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
    public function allPosts($inicio = null, $quantidade = null) {
        try {
            $model = new Post();
            $Query = "SELECT p.id, p.title, p.description, p.status, p.thumb, p.data, p.category, c.title as titleCategory FROM posts p 
                      INNER JOIN category c ON c.id = p.category ORDER BY p.id DESC LIMIT {$inicio}, {$quantidade}";
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
            $model = new Post();
            $Query = "SELECT * FROM posts";
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
            $model = new Post();
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
            $model = new Post();
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
    public function allStatusCategory($status, $category, $inicio = null, $quantidade = null){
        try {
            $model = new Post();
            $query = "SELECT * FROM posts WHERE status = ? AND category = ? ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
            $arrayParams = array($status, $category);
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

    //conta as quantidades de listas
    public function countPostsStatus($status) {
        try {
            $model = new Post();
            $query = "SELECT * FROM posts WHERE status = ?";
            $arrayParams = array($status);
            $model::SQLGeneric($query,$arrayParams,true);
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

}