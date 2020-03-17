function makeRange() {
    var today = new Date();

    var year = today.getFullYear();
    var mounth = today.getMonth();
    var day = today.getDate();

    var from = new Date(year, mounth + 1, day + 14);
    var to = new Date(year, mounth + 1, day + 21);

    return from.getFullYear() + '-' + from.getMonth() + '-' + from.getDate() + ' - ' + to.getFullYear() + '-' + to.getMonth() + '-' + to.getDate();
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
            $('#departDates').val(newValue.newDate);
            $('#dates-lbl').addClass('active');
            $('#dates-spn').text(newValue.newDate);
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