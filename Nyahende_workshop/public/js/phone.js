$(document).ready(function(){
    $('.menubtn').click(function(){
     $('.navigationbar ul').slideToggle();
    });
    $('#livestock').click(function(){
        $(this).next().find('.livestockul ul').slideToggle();
       });
});