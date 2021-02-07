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

?>

