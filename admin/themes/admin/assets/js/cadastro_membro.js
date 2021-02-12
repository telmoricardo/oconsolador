$(document).ready(function() {
    $("#celular").mask("(99) 99999-9999");
    $("#telefone").mask("(99) 9999-9999");
    $("#cpfCnpjDevedor").mask("999.999.999-99");

    carregarEstadosMunicipios();

    $("#form").submit(function(e){
        return false;
    });
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

$('#gravar').click(function () {
    var pathname = 'admin/themes/admin/ajax/cadastro_familia.php';
    var url = "http://localhost/oconsolador/";
    //var url = 'https://www.cialdf.com.br/';
    var page = url + pathname;

    console.log(page);

    var dados = $('#form').serialize();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: page,
        async: true,
        data: dados
    }).done(function (result) {
        setTimeout(function() {
            alert(result);
            window.location.href = "http://localhost/oconsolador/admin/membro/create";
        }, 5000);
    });

    return false;

})
