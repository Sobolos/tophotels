var line = function (obj) {
    var w = obj.width();
    var p = obj.position().left;
    var el = $('.line ');
    $('.tab').removeClass('active');
    obj.addClass('active');
    el.clearQueue().animate({
        left: p,
        width: w
    }, 300);
};

$(window).bind('hashchange', function () {
    $(window.location.hash).click();
});

$(document).ready(function () {
    if(location.hash){
        line($(location.hash));
        $(location.hash + "Panel").show();
        $(location.hash + "Panel").siblings().hide();
    }
//Табы
    $('#form').bind('click.smoothscroll',function (e) {
        line($(this));
        $(location.hash + "Panel").show();
        $(location.hash + "Panel").siblings().hide();
        window.location.hash = '#form';
    });

    $('#step1').bind('click.smoothscroll',function (e) {
        line($(this));
        $(location.hash + "Panel").show();
        $(location.hash + "Panel").siblings().hide();
        window.location.hash = '#step1';
    });
});

$('a.header-nav-link').bind('click.smoothscroll',function (e) {
    e.preventDefault();
    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': window.pageYOffset
    });
    window.location.hash = target;
});