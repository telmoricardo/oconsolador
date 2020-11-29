<?php


namespace App\Controller;
use App\DAO\SliderDAO;

class SliderController
{
    private $sliderDAO;
    private $data;

    public function __construct() {
        $this->sliderDAO = new SliderDAO();
    }

    public function Cadastrar($data){
        $this->data = $data;

        if($this->data != null):
            return $this->sliderDAO->Cadastrar($data);
        else:
            return false;
        endif;
    }

    //listar usuários com limite
    public function allSlider($inicio = null, $quantidade = null) {
        return $this->sliderDAO->allSlider($inicio, $quantidade);
    }
    //QUANTIDADE DE USUARIOS - METODO AUXILIAR PARA FAZER PAGINAÇÃO DE RESULTADOS
    public function countSliders() {
        return $this->sliderDAO->countSliders();
    }
}