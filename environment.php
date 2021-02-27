<?php
//define("ENVIRONMENT", "produment");
define("ENVIRONMENT", "development");

// NÍVEL DE USUARIO ####################################################
function getLevel($Level = null) {
    $UserLevel = [
        1 => 'Cliente (user)',
        2 => 'Assinante (user)',
        6 => 'Colaborador (adm)',
        7 => 'Suporte Geral (adm)',
        8 => 'Gerente Geral (adm)',
        9 => 'Administrador (adm)',
        10 => 'Super Admin (adm)'
    ];
    if (!empty($Level)):
        return $UserLevel[$Level];
    else:
        return $UserLevel;
    endif;
}

// ESTADO CIVIL ENUM ####################################################
function EstadoCivilENUM($estadoCivil = null) {
    $maritalStatus = [
        SOLTEIRO => 'Solteiro(a)',
        CASADO => 'Casado(a)',
        DIVORCIADO => 'Divorciado(a)',
        VIUVO => 'Viúvo(a)',
        SEPARADO => 'Separado(a)'
    ];
    if (!empty($estadoCivil)):
        return $maritalStatus[$estadoCivil];
    else:
        return $maritalStatus;
    endif;
}

// SEXO ENUM ####################################################
function SexoENUM($sexo = null) {
    $sexoEnum = [
        MASCULINO => 'Masculino',
        FEMININO => 'Feminino'
    ];
    if (!empty($sexo)):
        return $sexoEnum[$sexo];
    else:
        return $sexoEnum;
    endif;
}

// PARTO ENUM ####################################################
function PartoENUM($parto = null) {
    $partoEnum = [
        NORMAL => 'Normal',
        CESARIANA => 'Cesariana',
        FORCEPS => 'Fórceps',
    ];
    if (!empty($parto)):
        return $partoEnum[$parto];
    else:
        return $partoEnum;
    endif;
}

// HABITAÇÃO ENUM ####################################################
function habitacaoENUM($habitacao = null) {
    $habitacaoEnum = [
        PROPRIA => 'própria',
        CEDIDA => 'cedida',
        ALUGADA => 'alugada',
    ];
    if (!empty($habitacao)):
        return $habitacaoEnum[$habitacao];
    else:
        return $habitacaoEnum;
    endif;
}

// PREMATURO ENUM ####################################################
function PrematuroENUM($prematuro = null) {
    $prematuroEnum = [
        SIM => 'Sim',
        NAO => 'Não'
    ];
    if (!empty($prematuro)):
        return $prematuroEnum[$prematuro];
    else:
        return $prematuroEnum;
    endif;
}
// MORA COM QUEM ENUM ####################################################
function moraComQuemENUM($alguem = null) {
    $moraEnum = [
        PAI => 'Pai',
        MAE => 'Mãe',
        OUTROS => 'Outros',
    ];
    if (!empty($alguem)):
        return $moraEnum[$alguem];
    else:
        return $moraEnum;
    endif;
}

function arrayDoencas($array = null) {
    if(!empty($array)):
        $comma_separated = implode(",", $array);
        return $comma_separated;
    else:
        return null;
    endif;
}

?>

