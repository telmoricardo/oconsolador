<?php
namespace App\Helper;
/**
 * 
 * Helper [tipo]
 * Description
 * @copyright (c) year, Telmo Ricardo CodWeb
 */
class Helper {

    private static $Data;
    private static $Format;

    /**
     * <b>Tranforma URL:</b> Tranforma uma string no formato de URL amigável e retorna o a string convertida!
     * @param STRING $Name = Uma string qualquer
     * @return STRING = $Data = Uma URL amigável válida
     */
    public static function Name($Name) {
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª²³"';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                    ';

        self::$Data = strtr(utf8_decode($Name), utf8_decode(self::$Format['a']), self::$Format['b']);
        self::$Data = strip_tags(trim(self::$Data));
        self::$Data = str_replace(' ', '-', self::$Data);
        self::$Data = str_replace(array('-----', '----', '---', '--'), '-', self::$Data);

        return strtolower(utf8_encode(self::$Data));
    }

    public function converteData($data) {
        if (strstr($data, "/")) {//verifica se tem a barra /
            $d = explode("/", $data); //tira a barra
            $rstData = "$d[2]-$d[1]-$d[0]"; //separa as datas $d[2] = ano $d[1] = mes etc...
            return $rstData;
        } else if (strstr($data, "-")) {
            $data = substr($data, 0, 10);
            $d = explode("-", $data);
            $rstData = "$d[2]/$d[1]/$d[0]";
            return $rstData;
        } else {
            return '';
        }
    }

    public function converteDataHora($data) {
        if (strstr($data, "/")) {//verifica se tem a barra /
//            $d = explode("/", $data); //tira a barra
//            $rstData = "$d[2]-$d[1]-$d[0]"; //separa as datas $d[2] = ano $d[1] = mes etc...
//            return $rstData;
            $data = substr($data, 0, 25);
            $d = explode(" ", $data);
            $d1 = explode("/", $d[0]);
            $rstData = "$d1[2]-$d1[1]-$d1[0]";
            $rsTime = $d[1];
            return $rstData . ' ' . $rsTime;

        } else if (strstr($data, "-")) {
            $data = substr($data, 0, 25);
            $d = explode(" ", $data);
            $d1 = explode("-", $d[0]);
            $rstData = "$d1[2]/$d1[1]/$d1[0]";
            $rsTime = $d[1];
            return $rstData . ' ' . $rsTime;
        } else {
            return '';
        }
    }

    public static function limpaCPFCNPJ($valor) {
        $valor = trim($valor);
        $valor = str_replace(".", "", $valor);
        $valor = str_replace(",", "", $valor);
        $valor = str_replace("-", "", $valor);
        $valor = str_replace("/", "", $valor);
        return $valor;
    }

    public static function limpaTelefone($valor) {
        $valor = trim($valor);
        $valor = str_replace("(", "", $valor);
        $valor = str_replace(")", "", $valor);
        $valor = str_replace(" ", "", $valor);
        $valor = str_replace("-", "", $valor);
        return $valor;
    }

    /**
     * <b>Tranforma Data:</b> Transforma uma data no formato DD/MM/YY em uma data no formato TIMESTAMP!
     * @param STRING $Name = Data em (d/m/Y) ou (d/m/Y H:i:s)
     * @return STRING = $Data = Data no formato timestamp!
     */
    public static function Data($Data) {
        self::$Format = explode(' ', $Data);
        self::$Data = explode('/', self::$Format[0]);

        if (empty(self::$Format[1])):
            self::$Format[1] = date('H:i:s');
        endif;

        self::$Data = self::$Data[2] . '-' . self::$Data[1] . '-' . self::$Data[0] . ' ' . self::$Format[1];
        return self::$Data;
    }

    /**
     * <b>Limita os Palavras:</b> Limita a quantidade de palavras a serem exibidas em uma string!
     * @param STRING $String = Uma string qualquer
     * @return INT = $Limite = String limitada pelo $Limite
     */
    public static function Words($String, $Limite, $Pointer = null) {
        self::$Data = strip_tags(trim($String));
        self::$Format = (int) $Limite;

        $ArrWords = explode(' ', self::$Data);
        $NumWords = count($ArrWords);
        $NewWords = implode(' ', array_slice($ArrWords, 0, self::$Format));

        $Pointer = (empty($Pointer) ? ' ' : ' ' . $Pointer );
        $Result = ( self::$Format < $NumWords ? $NewWords . $Pointer : self::$Data );
        return $Result;
    }
    
   
    public function limitarTexto($texto, $limite) {
        $contador = strlen($texto);
        if ($contador >= $limite) {
            $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
            return $texto;
        } else {
            return $texto;
        }
    }

    /**
     * <b>Moeda:</b> Converter uma string em decimal ou float!
     * @param STRING $String = Uma string qualquer
     * @return DECIMAL = $Data = RETORNA UM DECIMAL
     */
    public static function moeda($Data) { 
        self::$Data = str_replace(",",".",str_replace(".","",$Data));
        return self::$Data;
    }

    public function pegarMes($data){
        $monthNum  = $data;
        $dateObj   = \DateTime::createFromFormat('m', $monthNum);
        $dateObj->setTimezone(new \DateTimeZone('America/Sao_Paulo'));
        $monthName = $dateObj->format('M');
        return $monthName;
    }
   

}
