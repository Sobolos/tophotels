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
    this.adultsBlocks = $('i.adult');

    var self = this;

    this.initGuests = function () {
        this.childrenAmount = $('.guestChild.selected').length;

        for(var i = 0; i < this.adultsAmount; i ++)
            this.adultsBlocks[i].classList.add('selected');

        $('#adultsAmount-inpt').val(self.adultsAmount);
        $('#childrenAmount-inpt').val(self.childrenAmount);
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

        if ($(this).index() === 0 && $(this).is('.selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }

        self.adultsAmount = $('.adult.selected').length;
        self.childrenAmount = $('.guestChild.selected').length;
        $('#adultsAmount-inpt').val(self.adultsAmount);
        $('#childrenAmount-inpt').val(self.childrenAmount);
    });

    //показ детей
    $('.js-added-show1 ').on('click', function () {
        $('.js-added-show2 ').removeClass('hidden');
    });

    $('.js-added-show2 ').on('click', function () {
        $('.js-added-show3 ').removeClass('hidden');
    });

    //показать возрасты
    $('.js-show-ages1').on('click', function () {
        $(this).closest('.formDirections__bottom-item ').hide();
        $(this).prev().addClass('selected');

        $('.childAges').show();
    });

    $('#showMorePeople').click(self.showPeople);

    //начальная инициалищация
    this.initGuests();
};