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

    this.showNextChild = function(element){
        element.next().next().removeClass('hidden').next().removeClass('hidden');
    };

    /*контрол готсей (выделение при наведении)*/
    $('.formDirections__guest-btn .formDirections__guest-btn-icon').hover(function () {
            $(this).prevAll().addClass('hover-active');
            $(this).nextAll().removeClass('hover-active');
            $(this).addClass('hover-active');
        }
    );

    $('.adult').on('click', function () {
        $(this).prevAll().addClass('selected');
        $(this).nextAll().removeClass('selected');

        if ($(this).index() === 0 && $(this).is('.selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
    });

    $('.formDirections__guest-btn').hover( function () {
            $('.formDirections__guest-btn-icon').removeClass('hover-active');
    });

    $('.guestChild').on('click', function () {
        $(this).prevAll().addClass('selected');
        $(this).nextAll().removeClass('selected');

        //$(this).next().next().removeClass('hidden').next().removeClass('hidden');
        self.showNextChild($(this));
        if ($(this).is('.selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }

        self.adultsAmount = $('.adult.selected').length;
        self.childrenAmount = $('.guestChild.selected').length;
        $('#childrenAmount-inpt').val(self.childrenAmount);
        $('#adultsAmount-inpt').val(self.adultsAmount);
    });

    var child = null;

    $('.ages').on('click', '.showAges', function () {
        child = $(this).attr('data-child');

        $(this).closest('.formDirections__bottom-item ').hide();
        $('.childAges').show();
    });

    this.setAgeBlok.on('click', function () {
        $('.childAges').hide();
        $('.guests').show();
        var icon;
        var childAge = $(this).text();
       if(child === "1"){
           self.child1Age = parseInt(childAge);
           $('#chid1Age-spn').text(self.child1Age);
           $('#child1Age-inpt').val(self.child1Age);

           icon = $('i.js-added-show1');
           self.showNextChild(icon);
           icon.addClass('selected');
       }
       else if(child === "2"){
           self.child2Age = parseInt(childAge);
           $('#chid2Age-spn').text(self.child2Age);
           $('#child2Age-inpt').val(self.child1Age);

           icon = $('i.js-added-show2');
           self.showNextChild(icon);
           icon.addClass('selected');
       }
       else if(child === "3") {
           self.child3Age = parseInt(childAge);
           $('#chid3Age-spn').text(self.child3Age);
           $('#child3Age-inpt').val(self.child1Age);

           icon = $('i.js-added-show3');
           self.showNextChild(icon);
           icon.addClass('selected');
       }
    });

    $('.guestsSubmit').on('click', self.initGuests);

    $('#showMorePeople').on('click', self.showPeople);

    //начальная инициалищация
    this.initGuests();
};