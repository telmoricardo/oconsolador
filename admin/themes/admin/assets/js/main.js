//var url = '../../admin/themes/admin/assets/dados/estados_cidades.json';
var pathEstado = 'admin/themes/admin/ajax/lista_estados.php';
var urlEst = "http://localhost/oconsolador/";
var urlEstado = urlEst + pathEstado;

var pathCidade = 'admin/themes/admin/ajax/listaCidadePeloEstado.php';
var urlCid= "http://localhost/oconsolador/";
var urlCidade = urlCid + pathCidade;

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
            $("#cidades").val("...");
            $("#estados").val("...");          


            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    console.log(dados);
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidades").val(dados.localidade);
                    $("#estados").val(dados.uf);  
                    
                    var sigla = dados.uf;
                    if(sigla){
                        carregarCidades(sigla);
                    }
                   

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

function carregarEstadosMunicipios(){
    var selectEstados = $('#estados'),
        selectCidades = $('#cidades');
    $('.cidade-select').hide();
    
    $.getJSON(urlEstado, function(data){
        var options = "<option value=''>Selecione um estado</option>";
        $.each(data, function(key, val){
            options += "<option value='" + val.id + "'> " + val.nome + "</option>";
        });
        /*$.each(data.estados, function(key, val){
            options += "<option value='" + val.sigla + "'> " + val.nome + "</option>";
        });*/
        selectEstados.html(options);

        selectEstados.on('change', function(){
            var estado = data.find(function(estado){
                return selectEstados.val() === estado.id;
            })
            /*var estado = data.estados.find(function(estado){
                return selectEstados.val() === estado.sigla;
            })
            var options = "<option value=''>Selecione uma cidade</option>";
            $.each(estado.cidades, function(key, val){
                options += "<option value='" + val + "'> " + val + "</option>";
            });
            selectCidades.html(options);
            $('.cidade-select').show();*/

            $.getJSON(urlCidade, {
                idEstado: $(this).val(),
                ajax: 'true'
            }, function(data){
                var options = "<option value=''>Selecione uma cidade</option>";
                $.each(data, function(key, val){
                    options += "<option value='" + val.id + "'> " + val.nome + "</option>";
                });
                selectCidades.html(options);
                $('.cidade-select').show();
            });
        });
    });
}

function carregarCidades(sigla){
    var selectCidades = $('#cidades');    
    $.getJSON(urlEstado, function(data){
        console.log(data);

        var estado = data.find(function(estado){
            return sigla === data.uf;
            console.log(sigla);
        })
        var options = "<option value=''>Selecione uma cidade</option>";
        $.each(estado.cidades, function(key, val){
            options += "<option value='" + val + "'> " + val + "</option>";
        });
        selectCidades.html(options);
    });
}

