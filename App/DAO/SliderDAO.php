<?php


namespace App\DAO;

use App\Model\Slider;

class SliderDAO extends Conn
{

    private $debug;
    private $data;

    public function Cadastrar($data){
        try {
            $this->data = $data;
            $sliderModel = new Slider();
            $sliderModel::Create($data);
            return $sliderModel::getResult();

        }catch (\PDOException $e){
            if($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //listar usuários com limite
    public function allSlider($inicio = null, $quantidade = null) {
        try {
            $sliderModel = new Slider();
            $Query = "SELECT * FROM sliders ORDER BY id DESC LIMIT {$inicio}, {$quantidade}";
            $sliderModel::FullRead($Query, array());
            return $sliderModel::getResult();
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //conta as quantidades de listas
    public function countSliders() {
        try {
            $sliderModel = new Slider();
            $Query = "SELECT * FROM users";
            $sliderModel::FullRead($Query, array());
            $pkCount = ($sliderModel::getResult() != null) ? count($sliderModel::getResult()) : 0;
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