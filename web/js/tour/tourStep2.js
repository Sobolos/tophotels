jQuery(document).ready(function () {
    "use strict";

    this.directionFlyCity = null;
    this.UserName = null;
    this.UserPhone = null;
    this.UserEmail = null;
    this.flyCity = null;

    this.SendButton = $('.metro-valid-pp');

    var self = this;

    console.log(self.SendButton);

    function validateEmail(emailVal) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return re.test(String(emailVal).toLowerCase());
    }

    function validatePhone(phoneVal) {
        var re = /^[0-9]+$/gm;
        return re.test(phoneVal);
    }

    this.SendButton.on('click', function (event) { //отлавливаем нажатие на кнопку формы
        event.preventDefault();

        self.UserName = $('#nameInput2').val();
        self.UserPhone = $('#phoneInput2').val();
        self.UserEmail = $('#emailInput2').val();
        self.myCity = $('#directionMyCityStep2').val();

        self.SendButton.addClass('bth__loader--animate');

        function validateAll() {
            var emailValaid = true;
            var phoneValaid;
            var nameValaid;
            var cityValid = false;

            if (self.UserName !== '') {
                $('.nameStep2').removeClass('has-error');
                nameValaid = true;

                console.log('Имя верный: ', nameValaid)
            }else {
                self.SendButton.removeClass('bth__loader--animate');
                $('.nameStep2').addClass('has-error');
                nameValaid = false;

                console.log('Имя верный: ', nameValaid)
            }

            if (validatePhone(self.UserPhone) === true) {
                $('.phoneStep2').removeClass('has-error');
                phoneValaid = true;

                console.log('Телефон верный: ', phoneValaid)
            }else {
                self.SendButton.removeClass('bth__loader--animate');
                $('.phoneStep2').addClass('has-error');
                phoneValaid = false;

                console.log('Телефон верный: ', phoneValaid)
            }

            console.log(self.myCity);

            if(self.myCity === '' || self.myCity === null || self.myCity === "Не указан"){
                self.SendButton.removeClass('bth__loader--animate');
                $('#myCityBlock').addClass('has-error');
                cityValid = false;

                console.log('Город верный: ', cityValid)
            }else {
                self.SendButton.removeClass('bth__loader--animate');
                $('#myCityBlock').removeClass('has-error');
                cityValid = true;

                console.log('Город верный: ', cityValid)
            }

            if (self.UserEmail !== ''){
                if (validateEmail(self.UserEmail) === false) {
                    self.SendButton.removeClass('bth__loader--animate');
                    $('.emailStep2').addClass('has-error');
                    emailValaid = false;

                    console.log('емаил верный: ', emailValaid)
                }else {
                    $('.emailStep2').removeClass('has-error');
                    emailValaid = true;

                    console.log('емаил верный: ', emailValaid)
                }
            }else {
                emailValaid = true;

                console.log('емаил верный: ', emailValaid)
            }

            var valid = nameValaid && phoneValaid && emailValaid && cityValid;
            console.log("Итог: ", valid);

            return valid;
        }

        if(validateAll()===true){
            var data = $('#TourFormStep2').serialize();
            $.ajax({
                url: '/tophotels/inserttour',
                type: 'POST',
                data: data,
                success: function (res) {
                    console.log(res);
                    //очистка формы
                    $('#nameInput').val('');
                    $('#phoneInput').val('');
                    $('#emailInput').val('');
                    self.SendButton.removeClass('bth__loader--animate');

                    $('#emailLbl').removeClass('has-error');
                    $('#phoneLbl').removeClass('has-error');
                    $('#nameLbl').removeClass('has-error');

                    location.hash = '#formStep2';
                    if(location.hash){
                        $(location.hash).siblings().hide();
                        $(location.hash).show();
                    }
                },
                error: function () {
                    self.SendButton.removeClass('bth__loader--animate');
                }
            });
        }else return false;
    });

    $('#directionMyCityStep2').on('change', function() {
        self.myCity = $('#directionMyCityStep2').val();
        $('#MyCityLable').addClass('active');
        $('#MyCitySpan').text(self.myCity);
        console.log(self.myCity);
    });
});