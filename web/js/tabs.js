$(document).ready(function () {
    $(window).bind('hashchange', function () {
        console.log('hash changed');
        $(window.location.hash  + "Panel").click();
        $(location.hash  + "Panel").siblings().hide();
        $(location.hash  + "Panel").show();
    });

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

    var _hashState = function (_hash) {
        if (history.pushState) {
            history.pushState(null, null, _hash);
        }
        else {
            location.hash = _hash;
        }
    };

    if (!window.location.hash)
        $('.tab.active').first().click();
    else
        $(window.location.hash).click();

    $(location.hash + "Panel").show();
    $(location.hash + "Panel").siblings().hide();
//Табы
    $('#form').bind('click.smoothscroll',function (e) {
        line($(this));
        _hashState('#form');
        $(location.hash + "Panel").show();
        $(location.hash + "Panel").siblings().hide();
        window.location.hash = '#form';
    });

    $('#step1').bind('click.smoothscroll',function (e) {
        line($(this));
        _hashState('#step1');
        $(location.hash + "Panel").show();
        $(location.hash + "Panel").siblings().hide();
        window.location.hash = '#step1';
    });
});

$('a.header-nav-link, a.header-logo, a.headerMobile__logo').bind('click.smoothscroll',function (e) {
    e.preventDefault();
    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': window.pageYOffset
    });
    window.location.hash = target;
});