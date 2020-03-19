"use strict";

if (typeof mytour === "undefined") {
    var mytour = {};
}

if (typeof mytour.searchTours === "undefined") {
    mytour.searchTours = {};
}

/**
 * Модуль гостей
 */
mytour.searchTours.formGuests = function() {
    this.adultsAmount = 2;
    this.childrenAmount = 0;
    this.child1Age = null;
    this.child2Age = null;
    this.child3Age = null;
    this.setAgeBlok = $("label[data-action]");

    var self = this;

    this.initGuests = function () {
        self.adultsAmount = $('.adult.selected').length;
        self.childrenAmount = $('.guestChild.selected').length;

        if(self.childrenAmount === 2) self.child3Age = null;
        if(self.childrenAmount === 1){
            self.child3Age = null;
            self.child2Age = null;
        }
        if(self.childrenAmount === 0){
            self.child3Age = null;
            self.child2Age = null;
            self.child1Age = null;
        }

        $('#adultsAmount-inpt').val(self.adultsAmount);
        $('#childrenAmount-inpt').val(self.childrenAmount);
        $('#child1Age-inpt').val(self.child1Age);
        $('#child2Age-inpt').val(self.child2Age);
        $('#child3Age-inpt').val(self.child3Age);

        $('#adultsAmount-spn').text(self.adultsAmount + " взрослых");
        $('#guests-lbl').addClass('active');
        $('#guests-spn').text(self.adultsAmount + " взрослых " + self.childrenAmount + " детей");
    };

    this.showPeople = function(){
        $('#showMorePeople').hide();
        $('.adult').removeClass('hidden');
    };

    /*контрол готсей (выделение при наведении)*/
    $('.formDirections__guest-btn .formDirections__guest-btn-icon').hover(function () {
            $(this).prevAll().addClass('hover-active');
            $(this).nextAll().removeClass('hover-active');
            $(this).addClass('hover-active');
        }
    );

    $('.formDirections__guest-btn').hover( function () {
            $('.formDirections__guest-btn-icon').removeClass('hover-active');
        });

    //при клике устанавливаем значение
    $('.formDirections__guest-btn-icon').on('click', function () {
        $(this).prevAll().addClass('selected');
        $(this).nextAll().removeClass('selected');

        if ($(this).is('.selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }

        self.adultsAmount = $('.adult.selected').length;
        self.childrenAmount = $('.guestChild.selected').length;
        $('#adultsAmount-inpt').val(self.adultsAmount);
        $('#childrenAmount-inpt').val(self.childrenAmount);
    });

    var child = null;

    $('.test').on('click', '.showAges', function () {
        child = $(this).attr('data-child');

        if($(this).prev().hasClass('selected')){
            $(this).closest('.formDirections__bottom-item ').hide();
            $('.childAges').show();
        }
    });

    this.setAgeBlok.on('click', function () {
        $('.childAges').hide();
        $('.guests').show();
       var childAge = $(this).text();
       if(child === "1"){
           $('.js-added-show2 ').removeClass('hidden');
           self.child1Age = parseInt(childAge);
           $('#chid1Age-spn').text(self.child1Age);
       }
       else if(child === "2"){
           $('.js-added-show3 ').removeClass('hidden');
           self.child2Age = parseInt(childAge);
           $('#chid2Age-spn').text(self.child2Age);
       }
       else if(child === "3") {
           self.child3Age = parseInt(childAge);
           $('#chid3Age-spn').text(self.child3Age);
       }
    });

    $('.guestsSubmit').on('click', self.initGuests);

    $('#showMorePeople').on('click', self.showPeople);

    //начальная инициалищация
    this.initGuests();
};