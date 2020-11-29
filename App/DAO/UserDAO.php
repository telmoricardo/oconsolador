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

}