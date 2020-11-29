<?php


namespace App\Controller;


use App\DAO\UserDAO;

class UserController
{

    private $userDAO;
    private $data;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function Cadastrar($data)
    {
        $this->data = $data;

        if($this->data != null):
            return $this->userDAO->Cadastrar($data);
        else:
            return false;
        endif;


    }

}