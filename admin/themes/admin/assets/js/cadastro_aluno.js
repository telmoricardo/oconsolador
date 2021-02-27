$(document).ready(function() {
    // $("#celular").mask("(99) 99999-9999");
    $("#telefone1").mask("(99) 9999-9999");
    $("#telefone2").mask("(99) 9999-9999");
    $("#cpfCnpjDevedor").mask("999.999.999-99");
    $("#cpfCnpjDevedor1").mask("999.999.999-99");
    $("#cpfCnpjDevedor2").mask("999.999.999-99");

    carregarEstadosMunicipios();
});

$('#cpfCnpjDevedor' ).change(function() {
    //clearMsgAlerta();
    var cpfCnpjDevedor = $('#cpfCnpjDevedor').val().trim();

    if (cpfCnpjDevedor.length > 13){
        cpfCnpjDevedor = cpfCnpjDevedor.replace(/\D/g, '');
        console.log(cpfCnpjDevedor);
    }
    if(!validarCPF(cpfCnpjDevedor)){
        //msgAlerta('warning', 'CPF/CNPJ inválido.', false);
        alert('CPF/CNPJ inválido.');
        $('#cpfCnpjDevedor').val('');
    }
    //alert(cpfCnpjDevedor);
});

$('#cep').change(function() {
    var cep = $('#cep').val();
    if (cep != null){
      viaCep(cep);      
    }
});

