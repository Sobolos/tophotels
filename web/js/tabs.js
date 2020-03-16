$(document).ready(function () {
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

    if(location.hash){
        line($(location.hash));
        $(location.hash + "Panel").prev().hide();
        $(location.hash + "Panel").show();
    }

//Табы
    $('#step1').click(function () {
        line($(this));
        //_hashState('#step1');
        $('#step1Panel').show();
        $('#formPanel').hide();
    });
    $('#form').click(function () {
        line($(this));
        // _hashState('#form');
        $('#step1Panel').hide();
        $('#formPanel').show();
    });
});

if (!window.location.hash)
    $('#form').click();
else
    $(window.location.hash).click();

$(window).bind('hashchange', function () {
    $(window.location.hash).click();
});