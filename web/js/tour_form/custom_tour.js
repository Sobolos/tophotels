jQuery(document).ready(function () {
    $('#parametrs').val('');

    function validateEmail(emailVal) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(emailVal).toLowerCase());
    }

    function validatePhone(phoneVal) {
        var re = /^[0-9]+$/gm;
        return re.test(phoneVal);
    }

    $('#CustomTourForm').on('beforeSubmit', function (event) {
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
        }
        if (!validatePhone(phoneVal)) {
            btnLoader.removeClass('bth__loader--animate');
            $('#phoneLbl').addClass('has-error');
            event.preventDefault();
            event.stopImmediatePropagation();
        }
        if (emailVal !== '' && !validateEmail(emailVal)) {
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
            success: function () {
                $('#formPanel').hide();
                $('#formStep2').show();
            },
            error: function () {
                btnLoader.removeClass('bth__loader--animate');
            }
        });
        return false;
    });
});