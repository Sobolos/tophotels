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

    $('#sendCustomTour').on('click', function (event) { //отлавливаем нажатие на кнопку формы
        event.preventDefault();

        var btnLoader = $('.bth__loader');
        var nameVal = $('#nameInput').val();
        var phoneVal = $('#phoneInput').val();
        var emailVal = $('#emailInput').val();

        btnLoader.addClass('bth__loader--animate');

        function validateAll() {
            var emailValaid = true;
            var phoneValaid;
            var nameValaid;

            if (nameVal !== '') {
                $('#nameLbl').removeClass('has-error');
                nameValaid = true;

                console.log('Имя верный: ', nameValaid)
            }else {
                btnLoader.removeClass('bth__loader--animate');
                $('#nameLbl').addClass('has-error');
                nameValaid = false;

                console.log('Имя верный: ', nameValaid)
            }

            if (validatePhone(phoneVal) === true) {
                $('#phoneLbl').removeClass('has-error');
                phoneValaid = true;

                console.log('Телефон верный: ', phoneValaid)
            }else {
                btnLoader.removeClass('bth__loader--animate');
                $('#phoneLbl').addClass('has-error');
                phoneValaid = false;

                console.log('Телефон верный: ', phoneValaid)
            }

            if (emailVal !== ''){
                if (validateEmail(emailVal) === false) {
                    btnLoader.removeClass('bth__loader--animate');
                    $('#emailLbl').addClass('has-error');
                    emailValaid = false;

                    console.log('емаил верный: ', emailValaid)
                }else {
                    $('#emailLbl').removeClass('has-error');
                    emailValaid = true;

                    console.log('емаил верный: ', emailValaid)
                }
            }else {
                emailValaid = true;

                console.log('емаил верный: ', emailValaid)
            }

            var valid = nameValaid && phoneValaid && emailValaid;
            console.log("Итог: ", valid);

            return valid;
        }

        if(validateAll()===true){
            console.log('query');
            var data = $('#CustomTourForm').serialize();
            $.ajax({
                url: '/tophotels/insertcustomtour',
                type: 'POST',
                data: data,
                success: function (res) {
                    console.log(res);
                    //очистка формы
                    $('#parametrs').val('');
                    $('#nameInput').val('');
                    $('#phoneInput').val('');
                    $('#emailInput').val('');
                    btnLoader.removeClass('bth__loader--animate');

                    $('#emailLbl').removeClass('has-error');
                    $('#phoneLbl').removeClass('has-error');
                    $('#nameLbl').removeClass('has-error');

                    window.location.hash = '#formStep2';
                    if(location.hash){
                        $(location.hash + "Panel").siblings().hide();
                        $(location.hash + "Panel").show();
                    }
                },
                error: function () {
                    btnLoader.removeClass('bth__loader--animate');
                }
            });
        }else return false;
    });
});