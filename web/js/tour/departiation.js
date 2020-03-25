//возвращает началтный период дат вылетов
function makeRange() {

    //ставим ноль в начале если дата однозначное число
    function putZero(date) {
        if(date.toString().length === 1)
            return "0"+date;
        else return date;
    }

    var today = new Date();

    var year = today.getFullYear();
    var mounth = today.getMonth();
    var day = today.getDate();

    var from = new Date(year, mounth + 1, day + 14);
    var to = new Date(year, mounth + 1, day + 21);

    var fromYear = from.getFullYear();
    var fromMounth = putZero(from.getMonth());
    var fromDay = putZero(from.getDate());

    var toYear = to.getFullYear();
    var toMounth = putZero(to.getMonth());
    var toDay = putZero(to.getDate());

    return fromYear + '-' + fromMounth + '-' + fromDay + ' - ' + toYear + '-' + toMounth + '-' + toDay;
}

function getWeekDay(date) {
    var days = [
        'вс',
        'пн',
        'вт',
        'ср',
        'чт',
        'пт',
        'сб'
    ];
    var d = new Date(date);
    var n = d.getDay();
    return days[n];
}

function getText(n) {
    var lastFigure = n % 10;;
    if (n >= 11 && n <= 15)
    {
        return 'Дней';
    }
    else
    {
        if (lastFigure === 1) return 'день';
        if (lastFigure > 1 && lastFigure < 5) return 'дня';
        if (lastFigure === 0 || lastFigure >= 5) return 'дней';
    }
}

function getDifference(start, end) {
    var startDate = new Date(start);
    var endDate = new Date(end);

    var diff =  Math.ceil((endDate.getTime() - startDate.getTime()) / 1000 / 60 / 60 / 24);
    var text = getText(diff);

    return  diff + " " + text;
}

"use strict";

if (typeof mytour === "undefined") {
    var mytour = {};
}

if (typeof mytour.searchTours === "undefined") {
    mytour.searchTours = {};
}

/**
 * Модуль календаря
 * @param params
 * @param searchReq
 */
mytour.searchTours.formDate = function(params, searchReq) {
    //
    var self = this;

    //
    this.init = false;
    this.pickerBlockId = 'js-dpicker-filter';
    this.popupBlock = 'js-dpicker-filter';
    this.pickerType = 'date-range'; // 'date'

    //
    this.popupLabel = $('div[data-id="js-form-popup-date"]');
    this.popupBlockId = '';
    this.popupBlock = $('#js-form-popup-date');

    this.datepicker = $('#datePicker');
    this.pickerBlock = null;

    this.departiarionDate = null;

    // Загрузка параметров
    if (typeof params !== 'undefined') {
        for (var p in params) {
            if (params.hasOwnProperty(p)) {
                self[p] = params[p];
            }
        }
    }

    /**
     * Создание календаря
     */
    self.pickerObj = self.datepicker.datepicker({
        type: self.pickerType,
        format: 'yyyy-MM-dd',
        align: 'left',
        lang: 'ru-RU',
        weekStart: 1,
        defaultValue: makeRange(),
        startDate: new Date(),
        endDate: (new Date()).addMonths(12),
        pickerBlockId: self.pickerBlockId,

        onChange: function (newValue) {
            var dates = newValue.newDate.split(' - ');
            var weekDay = getWeekDay(dates[0]);

            var diff = getDifference(dates[0], dates[1]);
            var spanText = `${weekDay} ${dates[0].replace(/-/gi, '.')}`;

            $('#departDates').val(spanText + " + " + diff);
            $('#dates-lbl').addClass('active');
            $('#dates-spn').text(spanText).append(`<span class=\"fz13 normal\" id=\"dates-diff-spn\"> + ${diff}</span>`);

            self.departiarionDate = newValue.newDate;
            self.popupBlock.removeClass('d-ib');
            self.popupLabel.removeClass('focus');
        }
    });
    self.pickerObj.show();
    self.pickerBlock = $('#' + self.pickerBlockId);
    self.pickerBlock.appendTo(self.datepicker.parent()).find('.gmi-picker-panel').show();
    self.datepicker.appendTo(self.datepicker.parent());
    //
    $(document).mouseup(function (e) {
        var target = $(e.target || e.srcElement);

        if (target.closest('#' + self.popupBlockId).length || target.closest('.js-lsfw-ppdb-close').length) {
            return;
        }

        self.popupBlock.removeClass('d-ib');
    });
};