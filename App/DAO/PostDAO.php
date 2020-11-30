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
            $postModel = new Post();
            $postModel::Create($data);
            return $postModel::getResult();
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
            $postModel = new Post();
            $Query = "SELECT * FROM posts ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
            $postModel::FullRead($Query, array());
            return $postModel::getResult();
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
            $postModel = new Post();
            $Query = "SELECT * FROM posts";
            $postModel::FullRead($Query, array());
            $pkCount = ($postModel::getResult() != null) ? count($postModel::getResult()) : 0;
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
    public function findSlider($field, $value) {
        try {
            $sliderModel = new Slider();
            $sliderModel::ReadByField($field, $value);
            return $sliderModel::getResult();
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

    //excluir usuário
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

    //pagina de login -autenticação do usuárip
    public function authenticationUser($email, $password) {
        try {
            $userModel = new User();
            $Query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $Fields = array("email" => $email, "password" => $password);
            $userModel::FullRead($Query, $Fields);
            return $userModel::getResult();
        }catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    // usuário deslogar
    public function userLogout() {
        $_SESSION['logado'] = false;
        session_destroy();
        header('location: login.php');
    }

}