$(document).ready(function () {
//Табы
    $('#step1').click(function () {
        line($(this));
        _hashState('#step1');
        $('#step1Panel').show();
        $('#formPanel').hide();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('#formStep2Panel').hide();
        $('.orders-consultants').show();
        $('.rega-field').hide();
        $('.orders-back-hotels').hide();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').hide();
    });
    $('#form').click(function () {
        line($(this));
        _hashState('#form');
        $('#step1Panel').hide();
        $('#formPanel').show();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('#formStep2Panel').hide();

        $('.orders-consultants').hide();
        $('.orders-back-hotels').hide();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').hide();
    });
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

$(window).bind('hashchange', function () {
    $(window.location.hash).click();
});

//пакет/отель
$('.js-type2').on('click', function () {
    $('.js-types-search-tours-blocks').hide();
    $('.js-types-search-hotel-blocks').show();
});
$('.js-type1').on('click', function () {
    $('.js-types-search-tours-blocks').show();
    $('.js-types-search-hotel-blocks').hide();
});
