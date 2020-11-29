/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('.main-header').addClass('hiddem-top');
    } else {
        $('.main-header').removeClass('hiddem-top');
    }
})

