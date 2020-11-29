/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//---------------------------------------SCRIPT MOBILE------------------------------------------------------
$(document).ready(function () {
    $(".sidebarBtn").click(function () {
        $(".sidebar").toggleClass('active');
        $(".sidebarBtn").toggleClass('toggle');
    });
});


