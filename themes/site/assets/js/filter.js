/*  -------------CODIGO JS COM EFEITO TRANSITIONS BOX------------*/

$(document).ready(function() {
    $('.list-btn-window .btn_item[window="markeOne"]').addClass('ct_active');
    //	$('.btn_list ').addClass('ct_active');

    /*  -------------FILTRANDO TODOS OS PRODUTO------------*/
    $('.btn_item').click(function(event) {
        event.preventDefault();
        var bxBtnRepertorie = $(this).attr('window');
        //			console.log(bxBtnRepertorie);
        /*  -------------AGREGANDO CLASSE ACTIVE A TODOS SELECIONADOS------------*/
        $('.btn_item').removeClass('ct_active');
        $(this).addClass('ct_active');

        /*  -------------OCUTANDO PRODUTO------------*/
        $('.item_').css('transform', 'scale(0)');

        function hideRepertorie() {
            $('.item_').hide();
        }
        setTimeout(hideRepertorie, 400);
        /*  -------------MOSTRANDO PRODUTO------------*/
        function showRepertotie() {
            $('.item_[window="' + bxBtnRepertorie + '"]').show();
            $('.item_[window="' + bxBtnRepertorie + '"]').css('transform', 'scale(1)');
        }
        setTimeout(showRepertotie, 400);
    });

    /*  -------------MOSTRANDO TODOS PRODUTO------------*/
    $('.btn_item[window="all"]').click(function() {
        function showAll() {
            $('.item_').hide();
            //			$('.item_').css('transform', 'scale(1)');
        }
        setTimeout(show, 400);
    });

});