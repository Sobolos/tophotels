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
mytour.searchTours.formPrices = function() {
    this.valCurrency = "₽";
    this.price = 0;
    this.maxprice = 0;

    let self = this;

    $('.js-show-currencys').on('click', function () {
        $(this).closest('.formDirections').find('.js-hide-price-inputs').hide();
        $(this).closest('.formDirections').find('.js-act-currencys').show();
    });

    $('.js-act-currencys .formDirections__price-currency').on('click', function () {
        $(this).closest('.formDirections').find('.js-hide-price-inputs').show();
        $(this).closest('.formDirections__price-wrap').hide();

    });
    $('.formDirections__price-currency').on('click', function () {
        self.valCurrency = $(this).find('.formDirections__price-currency-lb .formDirections__price-currency-sign').text();
        $(this).closest('.formDirections').find('.formDirections__price-input-bbl').text(self.valCurrency);
        $('#priceCurrency').val(self.valCurrency);
    });

    $('.opt-price').on('change input', function () {
        self.price = $(this).val();
        $('.opt-price').val(self.price);
        $('.tourPrice-spn').text(self.price + "" + self.valCurrency)
    });

    $('.max-price').on('change input', function () {
        self.maxprice = $(this).val();
        $('.max-price').val($(this).val())
    });

    $('.setPrice').on('click', function () {
        $('.tourPrice-spn').text(self.price + "" + self.valCurrency)
    });
};