/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//PEGAR ELEMENTO MODAL
var modal = document.getElementById('simpleModal');
var amodal = document.getElementById('asimpleModal');
var bmodal = document.getElementById('bsimpleModal');
var cmodal = document.getElementById('csimpleModal');
var dmodal = document.getElementById('dsimpleModal');
var emodal = document.getElementById('esimpleModal');
var fmodal = document.getElementById('fsimpleModal');
var gmodal = document.getElementById('gsimpleModal');
////BOTOES TOPO
//var imodal = document.getElementById('iModal');
//var jmodal = document.getElementById('jModal');
//var lmodal = document.getElementById('lModal');
//var mmodal = document.getElementById('mModal');

//PEGAR MODAL DENTRO DO ELEMENTO
var modalBtn = document.getElementById('modalBtn');
var amodalBtn = document.getElementById('amodalBtn');
var bmodalBtn = document.getElementById('bmodalBtn');
var cmodalBtn = document.getElementById('cmodalBtn');
var dmodalBtn = document.getElementById('dmodalBtn');
var emodalBtn = document.getElementById('emodalBtn');
var fmodalBtn = document.getElementById('fmodalBtn');
var gmodalBtn = document.getElementById('gmodalBtn');
////BOTAO TOPO
//var imodalBtn = document.getElementById('imodalBtn');
//var jhmodalBtn = document.getElementById('jmodalBtn');
//var lmodalBtn = document.getElementById('lmodalBtn');
//var mmodalBtn = document.getElementById('mmodalBtn');

//PEGAR BOTAL CLOSE
var closeBtn = document.getElementsByClassName('closeBtn')[0];
var acloseBtn = document.getElementsByClassName('acloseBtn')[0];
var bcloseBtn = document.getElementsByClassName('bcloseBtn')[0];
var ccloseBtn = document.getElementsByClassName('ccloseBtn')[0];
var dcloseBtn = document.getElementsByClassName('dcloseBtn')[0];
var ecloseBtn = document.getElementsByClassName('ecloseBtn')[0];
//var fcloseBtn = document.getElementsByClassName('fcloseBtn')[0];
//var gcloseBtn = document.getElementsByClassName('gcloseBtn')[0];
////PEGAR BOTAO TOPO
//var icloseBtn = document.getElementsByClassName('icloseBtn')[0];
//var jcloseBtn = document.getElementsByClassName('jcloseBtn')[0];
//var lcloseBtn = document.getElementsByClassName('lcloseBtn')[0];
//var mcloseBtn = document.getElementsByClassName('mcloseBtn')[0];

//LISTAR PARA CLICK
modalBtn.addEventListener('click', openModel);
amodalBtn.addEventListener('click', aopenModel);
bmodalBtn.addEventListener('click', bopenModel);
cmodalBtn.addEventListener('click', copenModel);
dmodalBtn.addEventListener('click', dopenModel);
emodalBtn.addEventListener('click', eopenModel);
//fmodalBtn.addEventListener('click', fopenModel);
//gmodalBtn.addEventListener('click', gopenModel);
////LISTA CLICK TOPO
//imodalBtn.addEventListener('click', iopenModel);
//jmodalBtn.addEventListener('click', jopenModel);
//lmodalBtn.addEventListener('click', lopenModel);
//mmodalBtn.addEventListener('click', mopenModel);




//LISTAR PARA CLOSE CLICK
closeBtn.addEventListener('click', closeModal);
acloseBtn.addEventListener('click', acloseModal);
bcloseBtn.addEventListener('click', bcloseModal);
ccloseBtn.addEventListener('click', ccloseModal);
dcloseBtn.addEventListener('click', dcloseModal);
ecloseBtn.addEventListener('click', ecloseModal);
//fcloseBtn.addEventListener('click', fcloseModal);
//gcloseBtn.addEventListener('click', gcloseModal);
////FECHAR MODAL TOPO
//icloseBtn.addEventListener('click', icloseModal);
//jcloseBtn.addEventListener('click', jcloseModal);
//lcloseBtn.addEventListener('click', lcloseModal);
//mcloseBtn.addEventListener('click', mcloseModal);


//FUNCAO PARA ABRIR O MODAL
function openModel() {
    modal.style.display = 'block';   
}
function aopenModel() {    
    amodal.style.display = 'block'; 
}
function bopenModel() {    
    bmodal.style.display = 'block'; 
}
function copenModel() {    
    cmodal.style.display = 'block'; 
}
function dopenModel() {    
    dmodal.style.display = 'block'; 
}
function eopenModel() {    
    emodal.style.display = 'block'; 
}
//function fopenModel() {    
//    fmodal.style.display = 'block'; 
//}
//function gopenModel() {    
//    gmodal.style.display = 'block'; 
//}
//
////CLICK JOOBS TOPO
//function iopenModel() {    
//    imodal.style.display = 'block'; 
//}
//function jopenModel() {    
//    jmodal.style.display = 'block'; 
//}
//function lopenModel() {    
//    lmodal.style.display = 'block'; 
//}
//function mopenModel() {    
//    mmodal.style.display = 'block'; 
//}


//FUNCAO PARA FECHAR MODAL
function closeModal() {
    modal.style.display = 'none';
}
function acloseModal() {
    amodal.style.display = 'none';
}
function bcloseModal() {
    bmodal.style.display = 'none';
}
function ccloseModal() {
    cmodal.style.display = 'none';
}
function dcloseModal() {
    dmodal.style.display = 'none';
}
function ecloseModal() {
    emodal.style.display = 'none';
}
//function fcloseModal() {
//    fmodal.style.display = 'none';
//}
//function gcloseModal() {
//    gmodal.style.display = 'none';
//}
////FUNCAO PARA FECHAR MODAL TOPO
//function icloseModal() {
//    imodal.style.display = 'none';
//}
//function jcloseModal() {
//    jmodal.style.display = 'none';
//}
//function lcloseModal() {
//    lmodal.style.display = 'none';
//}
//function mcloseModal() {
//    mmodal.style.display = 'none';
//}
