jQuery(document).ready(function () {
    $('#parametrs').val('');

    function validateEmail(emailVal)
    {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(emailVal).toLowerCase());
    }

    function validatePhone(phoneVal)
    {
        var re = /^[0-9]+$/gm;
        return re.test(phoneVal);
    }

    $('#CustomTourForm').on('beforeSubmit', function (event)
    {
        var btnLoader = $('.bth__loader');
        var nameVal = $('#nameInput').val();
        var phoneVal = $('#phoneInput').val();
        var emailVal = $('#emailInput').val();

        btnLoader.addClass('bth__loader--animate');

        if(nameVal === '')
        {
            btnLoader.removeClass('bth__loader--animate');
            $('#nameLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }
        if(!validatePhone(phoneVal))
        {
            btnLoader.removeClass('bth__loader--animate');
            $('#phoneLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }
        if(emailVal !== '' && !validateEmail(emailVal)){
            btnLoader.removeClass('bth__loader--animate');
            $('#emailLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }

        var data = $(this).serialize();
        $.ajax({
            url: '/tophotels/help-selection',
            type: 'POST',
            data: data,
            success: function(){
                $('#formPanel').hide();
                $('#formStep2').show();
            },
            error: function(){
                btnLoader.removeClass('bth__loader--animate');
            }
        });
        return false;
    });
//Подсказки для полей
    $('.bth__inp.js-stop-label').on('focus', function () {
        $(this).addClass('focus');
        $(this).next('.bth__inp-lbl').hide();
    });


    $('.bth__inp.js-stop-label').on('blur', function () {
        if ($(this).val().trim() !== '') {
            $(this).next('.bth__inp-lbl').hide();
        } else {

            $(this).next('.bth__inp-lbl').show();
        }
    });

    $('.js-label').on('focus', function () {
        $(this).next('.bth__inp-lbl').addClass('active');
        $(this).closest('.js-show-saggest').next().show();
    });

    $('.js-label').on('blur', function () {
        if ($(this).val().trim() === '') {
            $(this).next('.bth__inp-lbl').removeClass('active');
            $(this).closest('.js-show-saggest').next().hide();
        }
    });


    $('.js-label').on('change', function () {
        $('.js-label').each(function () {
            if ($(this).val().length) {
                $(this).next('.bth__inp-lbl').addClass('active');
            }
        });
    });

    $('.js-label').change();


    $('.bth__inp-block.long textarea').on('focus', function () {
        $(this).closest('.bth__inp-block.long').addClass('active');
    });
    $('.bth__inp-block.long textarea').on('blur', function () {
        $(this).closest('.bth__inp-block.long').removeClass('active');
    });
});

$(document).on('click', '.js-modal-close', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
});
