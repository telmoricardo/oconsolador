/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//PEGAR ELEMENTO MODAL
var modal = document.getElementById('simpleModal');
//PEGAR MODAL DENTRO DO ELEMENTO
var modalBtn = document.getElementById('modalBtn');
//PEGAR BOTAL CLOSE
//var closeBtn = document.getElementsByClassName('closeBtn')[0];
var close = document.getElementsByClassName('close')[0];
//LISTAR PARA CLICK
modalBtn.addEventListener('click', openModel);
//LISTAR PARA CLOSE CLICK
//closeBtn.addEventListener('click', closeModal);
close.addEventListener('click', closeForm);
//FUNCAO P,ARA ABRIR O MODAL
function openModel() {
    modal.style.display = 'block';   
}
//FUNCAO PARA FECHAR MODAL
//function closeModal() {
//    modal.style.display = 'none';
//}
function closeForm(){
    modal.style.display = 'none';
}
//$(function(){
//    
//    $(".modal-express-ajax").on('click', function(e){
//       e.preventDefault();
//       $('.modal_express').html('carregando...');
//       $('.bx_modal_express').show();
//       var link = $(this).attr('href');
//       
//       $.ajax({
//            url: 'ajax/contratar.php',
//            type: 'GET',
//            success: function (html) {
//                $('.modal_express').html(html);
//            }
//        });
//    });
//    
//    $('#btn-closer-express').click(function(){
//        $('.bx_modal_express').hide();
//    });
//    
//});


