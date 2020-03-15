"use strict";

if (typeof mytour === "undefined") {
    var mytour = {};
}

if (typeof mytour.searchTours === "undefined") {
    mytour.searchTours = {};
}

/**
 * РњРѕРґСѓР»СЊ РєР°Р»РµРЅРґР°СЂСЏ
 * @param params
 * @param searchReq
 */
mytour.searchTours.formDate = function(params, searchReq) {
    //
    var self = this;
    var req = searchReq;

    //
    this.init = false;
    this.pickerBlockId = 'js-dpicker-filter';
    this.popupBlock = 'js-dpicker-filter';
    this.dateFormat = 'weekDayShort d.m.y';
    this.pickerType = 'date-range'; // 'date'

    //
    this.popupLabel = $('div[data-id="js-form-popup-date"]');
    this.popupBlockId = '';
    this.popupBlock = $('#js-form-popup-date');

    this.textDateTitle = $('.date-title');
    this.textLabel = $('.date-text');
    this.textCounter = $('.dc_val');
    this.datepicker = $('#datePicker');
    this.monthBtn = '.js-calendar-month';
    this.diffSelect = $('select[name="calendarDiff"]');
    this.calendarPagePrev = '.gmi-date-range-picker__btn--prev-month';
    this.calendarPageNext = '.gmi-date-range-picker__btn--next-month';
    this.monthBtnList = null;

    //
    this.dateToday = new Date();
    this.pickerBlock = null;
    this.pickerObj = null;

    // С„Р»Р°Рі С‚РѕРіРѕ С‡С‚Рѕ РјС‹ С‰Р°СЃ РІС‹Р±РёСЂР°РµРј РїСЂРѕРјРµР¶СѓС‚РѕРє РґР°С‚
    this.inSelectionState = false;
    this.simpleFilterDateLabelDate = '.f-dfdt';
    this.simpleFilterDateLabelDiff = '.filter-adday';

    // Р—Р°РіСЂСѓР·РєР° РїР°СЂР°РјРµС‚СЂРѕРІ
    if (typeof params !== 'undefined') {
        for (var p in params) {
            if (params.hasOwnProperty(p)) {
                self[p] = params[p];
            }
        }
    }

    this.makeRange = function(){
        var range_to = new Date(this.dateToday.getFullYear(), this.dateToday.getMonth(), this.dateToday.getDate()+21);

        return range_to.getFullYear() + '-' + (range_to.getMonth()+1) + '-' + range_to.getDate();
    };

    req.dt = this.makeRange();

    /**
     * РЎРѕР·РґР°РЅРёРµ РєР°Р»РµРЅРґР°СЂСЏ
     */
    self.pickerObj = self.datepicker.datepicker({
        type: self.pickerType,
        format: 'yyyy-MM-dd',
        align: 'left',
        lang: 'ru-RU',
        weekStart: 1,
        defaultValue: req.df + ' - ' + req.dt,
        startDate: new Date(),
        endDate: (new Date()).addMonths(12),
        pickerBlockId: self.pickerBlockId,

        onChange: function (newValue) {
            var d = newValue.newDate.split(' - ');
            req.df = d[0];
            req.dt = d[1];

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