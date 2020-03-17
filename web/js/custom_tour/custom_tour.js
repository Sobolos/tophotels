jQuery(document).ready(function () {
    "use strict";
    $('#parametrs').val(''); //очистка формы при загрузке
    $('#nameInput').val('');
    $('#phoneInput').val('');
    $('#emailInput').val('');

    function validateEmail(emailVal) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(emailVal).toLowerCase());
    }

    function validatePhone(phoneVal) {
        var re = /^[0-9]+$/gm;
        return re.test(phoneVal);
    }

    $('#CustomTourForm').on('beforeSubmit', function (event) { //отлавливаем нажатие на кнопку формы
        var btnLoader = $('.bth__loader');
        var nameVal = $('#nameInput').val();
        var phoneVal = $('#phoneInput').val();
        var emailVal = $('#emailInput').val();

        btnLoader.addClass('bth__loader--animate');

        if (nameVal === '') {
            btnLoader.removeClass('bth__loader--animate');
            $('#nameLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
            return false;
        }else {
            $('#nameLbl').removeClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }

        if (!validatePhone(phoneVal)) {
            btnLoader.removeClass('bth__loader--animate');
            $('#phoneLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }else {
            $('#phoneLbl').removeClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }

        if (emailVal !== '' && !validateEmail(emailVal)) {
            btnLoader.removeClass('bth__loader--animate');
            $('#emailLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
            return false;
        }else {
            $('#emailLbl').removeClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }

        var data = $(this).serialize();
        $.ajax({
            url: '/tophotels/help-selection',
            type: 'POST',
            data: data,
            success: function () {
                //очистка формы
                $('#parametrs').val('');
                $('#nameInput').val('');
                $('#phoneInput').val('');
                $('#emailInput').val('');
                btnLoader.removeClass('bth__loader--animate');

                $('#emailLbl').removeClass('has-error');
                $('#phoneLbl').removeClass('has-error');
                $('#nameLbl').removeClass('has-error');

                location.hash = '#formStep2';
                console.log(location.hash);
                if(location.hash){
                    $(location.hash + "Panel").siblings().hide();
                    $(location.hash + "Panel").show();
                }
            },
            error: function () {
                btnLoader.removeClass('bth__loader--animate');
            }
        });
        return false; //чтобы не шла стандартная отправка
    });
});