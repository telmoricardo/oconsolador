<?php


namespace App\DAO;

use App\DAO\Conn;
use App\Model\User;

class UserDAO extends Conn
{

    private $debug;
    private $data;

    public function Cadastrar($data){
        try {
            $this->data = $data;
            $userModel = new User();
            $userModel::Create($data);
            return $userModel::getResult();

        }catch (\PDOException $e){
            if($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //listar usuários com limite
    public function allUser($inicio = null, $quantidade = null) {
        try {
            $userModel = new User();
            $Query = "SELECT * FROM users ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
            $userModel::FullRead($Query, array());
            return $userModel::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //conta as quantidades de listas
    public function countUsers() {
        try {
            $userModel = new User();
            $Query = "SELECT * FROM users";
            $userModel::FullRead($Query, array());
            $pkCount = ($userModel::getResult() != null) ? count($userModel::getResult()) : 0;
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
    public function findUser($field, $value) {
        try {
            $userModel = new User();
            $userModel::ReadByField($field, $value);
            return $userModel::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //atualizar o usuario
    public function Atualizar($Data, $cod_pk, $id) {
        try {
            $this->Data = $Data;
            $userModel = new User();
            $userModel::Update($Data, $cod_pk, $id);
            return $userModel::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}