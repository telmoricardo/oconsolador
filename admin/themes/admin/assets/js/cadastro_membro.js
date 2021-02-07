$(document).ready(function() {
    $("#celular").mask("(99) 99999-9999");
    $("#telefone").mask("(99) 9999-9999");
    $("#cpfCnpjDevedor").mask("999.999.999-99");

    //getEstados();
    carregarEstadosMunicipios();


});

$('#cpfCnpjDevedor' ).change(function() {
    // clearMsgAlerta();
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
    alert(cpfCnpjDevedor);
});

$('#cep').change(function() {
    var cep = $('#cep').val();
    if (cep != null){
      viaCep(cep);      
    }
});
