<?php


namespace App\DAO;

use App\Model\Post;
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

    //listar por status
    public function allStatus($status){
        try {
            $model = new Slider();
            $query = "SELECT * FROM sliders WHERE status = ? ORDER BY id";
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