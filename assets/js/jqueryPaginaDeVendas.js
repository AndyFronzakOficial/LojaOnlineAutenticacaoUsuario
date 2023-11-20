$(document).ready(function() {
    var headerTop = $('.fixo').offset().top; // Obtém a posição da borda superior da div .header

    $(window).scroll(function() {
        if ($(this).scrollTop() > headerTop) {
            $('.fixo').addClass('fixed');
        } else {
            $('.fixo').removeClass('fixed');
        }
    });
});