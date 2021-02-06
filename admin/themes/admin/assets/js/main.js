function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g,'');
    if(cpf == '') return false;
    // Elimina CPFs invalidos conhecidos
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
    // Valida 1o digito
    add = 0;
    for (i=0; i < 9; i ++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    // Valida 2o digito
    add = 0;
    for (i = 0; i < 10; i ++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}

function viaCep(valor) {
    //Nova variável "cep" somente com dígitos.
    let cep = valor.replace(/[^\d]+/gm, '');
    //cep = cep.val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#logradouro").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#estados").val("...");


            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    console.log(dados);
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#estados").val(dados.uf);

                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    //limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            //limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        //limpa_formulário_cep();
    }
}

function carregarEstadoMunicipio(){
    var selectEstados = $('#estados'),
        selectCidades = $('#cidades');
    $('.cidade-select').hide();

    var url = 'https://gist.githubusercontent.com/letanure/3012978/raw/36fc21d9e2fc45c078e0e0e07cce3c81965db8f9/estados-cidades.json';
    $.getJSON(url, function(data){
        var options = "<option value=''>Selecione um estado</option>";
        $.each(data.estados, function(key, val){
            options += "<option value='" + val.sigla + "'> " + val.nome + "</option>";
        });
        selectEstados.html(options);
        selectEstados.on('change', function(){
            var estado = data.estados.find(function(estado){
                return selectEstados.val() === estado.sigla;
            })
            var options = "<option value=''>Selecione uma cidade</option>";
            $.each(estado.cidades, function(key, val){
                options += "<option value='" + val + "'> " + val + "</option>";
            });
            selectCidades.html(options);
            $('.cidade-select').show();
        });
    });
}