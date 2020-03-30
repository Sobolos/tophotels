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

    this.setPriceText = function(str){
        str =  str.replace(/[^+\d]/g, '');
        return str.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    };

    this.setRangeVal = function(str){
        return str.replace(/\s/g, '');
    };

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
        console.log(self.price);
        $('.opt-price').val(self.price);
        $('input[type=range].opt-price').val(self.setRangeVal(self.price));
        $('.opt-price-text').val(self.setPriceText(self.price));
    });

    $('.max-price').on('change input', function () {
        self.maxprice = $(this).val();
        console.log(self.maxprice);
        $('input[type=range].max-price').val(self.setRangeVal(self.maxprice));
        $('.max-price-text').val(self.setPriceText(self.maxprice));
        $('.tourPrice-spn').text(self.setPriceText(self.maxprice) + "" + self.valCurrency)
    });

    $('.setPrice').on('click', function () {
        self.maxprice = $('.max-price-text').val();
        $('.tourPrice-spn').text(self.setPriceText(self.maxprice) + " " + self.valCurrency)
    });
};