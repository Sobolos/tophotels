"use strict";

if (typeof mytour === "undefined") {
    var mytour = {};
}

if (typeof mytour.searchTours === "undefined") {
    mytour.searchTours = {};
}

/**
 * Модуль ночей
 */


mytour.searchTours.formNights = function() {
    this.start = $("div[data-d='7']");
    this.end = $("div[data-d='14']");
    this.dates = $("div[data-d]");
    this.startNum =  parseInt(this.start.attr('data-d'));
    this.endNum = parseInt(this.end.attr('data-d'));
    this.nightsRange = null;
    this.selecting = false;

    var self = this;

    this.setNights = function () {
        self.start.addClass('start');
        self.end.addClass('end');

        var temp;
        if(this.startNum > this.endNum){
            temp = this.startNum;
            this.startNum = this.endNum;
            this.endNum = temp;
        }

        for(var i = this.startNum + 1; i < this.endNum; i++)
            $('div[data-d='+i+']').addClass('selected');

        self.nightsRange = this.startNum + " - " + this.endNum;
        $('#nightsAmount').val(self.nightsRange);
        $('#nights-lbl').addClass('active');
        $('#nights-spn').text(self.nightsRange + " нч")
    };

    this.setNights();

    this.setValues = function (dateObj) {
        if(self.selecting === false){
            self.start = dateObj;
            self.startNum = parseInt(self.start.attr('data-d'));

            self.start.addClass('start');

            self.selecting = true;
        }else if(self.selecting === true){
            self.end = dateObj;
            self.endNum = parseInt(self.end.attr('data-d'));

            self.end.addClass('end');

            self.setNights();
            self.selecting = false;
        }
    };

    this.clean = function () {
        self.start.removeClass('start');
        self.end.removeClass('end');
        for(var i = parseInt(self.startNum + 1); i < parseInt(self.endNum); i++)
            $('div[data-d='+i+']').removeClass('selected');

    };

    this.dates.click(function () {
        self.clean();
        self.setValues($(this));
    })
};