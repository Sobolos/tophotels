if (typeof mytour === "undefined") {
    var mytour = {};
}

if (typeof mytour.searchTours === "undefined") {
    mytour.searchTours = {};
}

/**
 * Модуль направления
 */
mytour.searchTours.formDirectionsHotel = function(rootNode) {
    "use strict";

    this.rootNode = rootNode;

    //выбор отеля: свойства
    this.directionFlyCity = null;
    this.eating = "";
    this.hotel = "";
    this.hotelCountry = "";
    this.hotelCity = "";
    this.hotelRating = "";

    //выбор отеля: блоки
    this.paramHotelEating = $('.hotel-param-eating');
    this.searchBlockResult = rootNode.find('.searchBlockResult');
    this.searchHotelBlock = rootNode.find('.formDirections');
    this.eatingSpan = $('.eating-spn');
    this.sumoDirectionCityFlyBlock = $('#hotelFlyCity');

    //выбор отеля: инпуты
    this.hiddenInputEating = $('.hiddenInputEating');
    this.hiddenInputHotel = rootNode.find('.hiddenInputHotel');
    this.textInputHotelName = rootNode.find('.textInputHotelName');

    var self = this;

    this.getHotels = function(name){
        console.log(name);
        $.ajax({
            url: '/tophotels/gethotels',
            type: 'POST',
            dataType: 'json',
            data: {
                name: name,
            },
            success: function (res) {
                self.searchBlockResult.empty();
                var div;
                $.each(res, function (key, value) {
                    div = `<div data-category="${value.cat_name}" data-country="${value.country_name}" data-city="${value.resort_name}" class="search-result-item formDirections__bottom-item">
                                <div class="formDirections__city">
                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-${value.country_id}"></div>
                                    <span class="formDirections__cut">${value.hotel_name} ${value.cat_name}</span>
                                </div>
                                <span class="formDirections__count">Расположение: ${value.country_name}, ${value.resort_name}</span>
                            </div>`;

                    self.searchBlockResult.append(div);
                });
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status === 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status === 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                console.log(msg);
            }
        });
    };

    $(this.textInputHotelName).on('input', function() {
        console.log($(this).val());
        if ($(this).val().length >= 3)
            self.getHotels($(this).val());
    });

    this.rootNode.on('click', '.search-result-item', function () {
        self.hotel = $(this).find('.formDirections__cut').text();
        self.hotelCountry = $(this).data('country');
        self.hotelCity = $(this).data('city');
        self.hotelRating = $(this).data('category');
        var addr = $(this).find('.formDirections__count').text();
        rootNode.find('.bth__inp-spn').text(self.hotel + ", " + addr);
        rootNode.find('.inp-spn-addr').text(addr);
        rootNode.find('.bth__inp-lbl').addClass('active');
        rootNode.find('.hiddenInputHotelCountry').val( self.hotelCountry);
        rootNode.find('.hiddenInputHotelCity').val(self.hotelCity);
        rootNode.find('.hiddenInputHotelRating').val(self.hotelRating);
        self.hiddenInputHotel.val(self.hotel);
        self.searchHotelBlock.slideUp();
    });

    $(this.paramHotelEating).on('change', function () {
        if ($(this).is(':checked')){
            self.eating += $(this).data('attr');
            self.hiddenInputEating.val(self.eating);
            self.eatingSpan.text(self.eating.replace(';',' '));
        } else {
            self.eating = self.eating.replace($(this).data('attr'),'');
            self.hiddenInputEating.val(self.eating);
            self.eatingSpan.text(self.eating.replace(';',' '));
        }
    });

    $(this.sumoDirectionCityFlyBlock).on('change', function() {
        self.directionFlyCity = self.sumoDirectionCityFlyBlock.val();
        $('#cityFlyHotel1-spn').addClass('active');
        $('#cityFlyHotel1-lbl').text(self.directionFlyCity);
    });
};