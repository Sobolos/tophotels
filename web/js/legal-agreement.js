$(function () {
    $('.legal-information-pp').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true

    });

    $('.legal-information-pp').on('click', function () {
        $('#usage-role').click()
    });

    $('#usage-role').click(function () {
        line($(this));
        $('#usage-rolePanel').show();
        $('#confidentialityPanel').hide();
    });

    $('#confidentiality').click(function () {
        line($(this));
        $('#usage-rolePanel').hide();
        $('#confidentialityPanel').show();
    });



    $('#agreement').click(function () {
        line($(this));
        $('#agreementPanel').show();
        $('#siteRolePanel').hide();
    });
    $('#siteRole').click(function () {
        line($(this));
        $('#agreementPanel').hide();
        $('#siteRolePanel').show();
    });

    var line = function (obj) {
        var w = obj.width();
        var p = obj.position().left;
        var el = $('.agreement-pp__line');
        $('.agreement-pp__tab').removeClass('active');
        obj.addClass('active');
        el.clearQueue().animate({
            left: p,
            width: w
        }, 300);
    };

    $('.p-agreement-pp').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });
    $('.p-agreement-pp').on('click', function () {
        $('html').css('overflow', 'hidden');
    });
    $('.legal-information-pp').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });

    $('.legal-information-pp').on('click', function () {
        $('html').css('overflow');
    });

    $('.p-agreement-pp.agree').on('click', function () {
        $('#agreement').click()
    });

    $('.p-agreement-pp.site-role').on('click', function () {
        $('#siteRole').click();
    });

    $('#agreed').on('click', function (e) {
        "use strict";
        e.preventDefault();
        $.magnificPopup.close();
    })
});