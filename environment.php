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

// NÍVEL DE PAGAMENTO ####################################################
function getPayment($Payment = null) {
    $PaymentLevel = [
        1 => 'Aguardando pagamento',
        2 => 'Pago'       
    ];
    if (!empty($Payment)):
        return $PaymentLevel[$Payment];
    else:
        return $PaymentLevel;
    endif;
}

// NÍVEL DE ENDEREÇO ####################################################
function getAddress($Address = null) {
    $AddressLevel = [
        1 => 'Aguardando pagamento',
        2 => 'Encomenda'       
    ];
    if (!empty($Address)):
        return $AddressLevel[$Address];
    else:
        return $AddressLevel;
    endif;
}

?>
