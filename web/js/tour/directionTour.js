if (typeof mytour === "undefined") {
    var mytour = {};
}

if (typeof mytour.searchTours === "undefined") {
    mytour.searchTours = {};
}

/**
 * Модуль направления
 */
mytour.searchTours.formDirectionsTour = function(rootNode) {
    "use strict";
    this.rootNode = rootNode;

    //свойства обхекта: параметры направления
    this.directionCountry = null;
    this.directionCity  = null;
    this.directionFlyCity  = null;

    //свойства объекта: параметры отеля
    this.directionHotelStars = "";
    this.directionHotelRating = "";
    this.directionHotelEating = "";
    this.directionHotelAllocation = "";
    this.directionHotelChildren = "";
    this.directionHotelOther = "";
    this.hotelResortType = 0;

    //элементы страницы: селекты
    this.sumoDirectionCountryBlock = rootNode.find('.sumo-direction');
    this.sumoDirectionCityBlock = rootNode.find('.sumo-direction-city');
    this.sumoDirectionCityFlyBlock = rootNode.find('.sumo-department');

    //элементы страницы: подписи
    this.coutryLable = rootNode.find('.directionCountry-lbl');
    this.cityLable = rootNode.find('.cityDirection-lbl');
    this.cityFlyLable = rootNode.find('.cityFly-lbl');
    this.formDirectionsTabCountry = rootNode.find('.formDirectionsTabCountry');
    this.hotelParamLbl = rootNode.find('.hotel-param-lbl');
    this.hotelParamSpn = rootNode.find('.hotel-param-spn');

    //элементы страницы: чекбоксы параметров
    this.paramHotelType = rootNode.find('.hotel-param-type');
    this.paramHotelRating = rootNode.find('.hotel-param-rating');
    this.paramHotelEating = rootNode.find('.hotel-param-eating');
    this.paramHotelAllocation = rootNode.find('.hotel-param-allocation');
    this.paramHotelChildren = rootNode.find('.hotel-param-children');
    this.paramHotelOther = rootNode.find('.hotel-param-other');

    this.inputHotelType = rootNode.find('.hotelType');
    this.inputHotelRating = rootNode.find('.hotelRating');
    this.inputHotelEating = rootNode.find('.hotelEating');
    this.inputHotelAllocation = rootNode.find('.hotelAllocation');
    this.inputHotelChildren = rootNode.find('.hotelChildren');
    this.inputHotelOther = rootNode.find('.hotelOther');

    //кнопка применить параметры отеля
    this.applyParamHotel = rootNode.find('.hotel-params-apply');

    //выбрано параметров отеля
    this.selected = 0;

    var self = this;

    this.initSelect = function () {
        //Направление города

        //Извиняюсь за костыль, я знаю про метод sumo.reload но он срабоатывает некорректно, список отображается не сразу
        //а только по клику на первый элемент

        self.sumoDirectionCityBlock.SumoSelect({
            search: true,
            forceCustomRendering: true
        });
        self.sumoDirectionCityBlock.parent().addClass('open');
        self.sumoDirectionCityBlock.next().next().css('top', '0').css('position', 'relative');

    };

    this.getCities = function(id){
        $.ajax({
            url: '/tophotels/getcities',
            type: 'POST',
            dataType: 'json',
            data: {
                id: id,
                type: 'city'
            },
            success: function (res) {
                self.sumoDirectionCityBlock.empty();
                self.sumoDirectionCityBlock[0].sumo.unload();
                self.sumoDirectionCityBlock.append("<option selected>Не важно</option>");
                $.each(res, function (key, value) {
                    var option = "<option>"+value.name+"</option>";
                    self.sumoDirectionCityBlock.append(option);
                });
                //Направление города

                self.initSelect();
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

    $(this.sumoDirectionCountryBlock).on('change', function() {
        self.directionCountry = self.sumoDirectionCountryBlock.val();
        var countryId = $(this).children('option:selected').data('id');
        var adddiv = "<div class=\"tour-selection__flag lsfw-flag lsfw-flag-"+countryId+"\"></div>";

        self.getCities(countryId);

        self.formDirectionsTabCountry.text($(this).val());
        self.coutryLable.text($(this).val()).append(adddiv);

    });

    $(this.sumoDirectionCityBlock).on('change', function() {
        self.directionCity = self.sumoDirectionCityBlock.val();
        self.cityLable.text(self.directionCity);
    });

    $(this.sumoDirectionCityFlyBlock).on('change', function() {
        self.directionFlyCity = self.sumoDirectionCityFlyBlock.val();
        self.cityFlyLable.text(self.directionFlyCity);
    });

    $(this.paramHotelType).on('change', function () {
        if ($(this).is(':checked')){
            self.directionHotelStars += $(this).data('attr');
        } else {
            self.directionHotelStars = self.directionHotelStars.replace($(this).data('attr'),'');
        }
    });

    $(this.paramHotelRating).on('change', function () {
        console.log($(this).data('attr'));
        if ($(this).is(':checked')){
            self.directionHotelRating = $(this).data('attr');
        } else {
            self.directionHotelRating = self.directionHotelRating.replace($(this).data('attr'),'');
        }
    });

    $(this.paramHotelEating).on('change', function () {
        if ($(this).is(':checked')){
            self.directionHotelEating += $(this).data('attr');
        } else {
            self.directionHotelEating = self.directionHotelEating.replace($(this).data('attr'),'');
        }
    });

    $(this.paramHotelAllocation).on('change', function () {
        if ($(this).is(':checked')){
            if(self.hotelResortType === $(this).data('resort')) {
                self.directionHotelAllocation += $(this).data('attr');
            }else {
                self.hotelResortType = $(this).data('resort');
                rootNode.find('input[type="checkbox"][data-resort]').prop('checked', false);
                self.directionHotelAllocation = $(this).data('attr');
                $(this).prop('checked', true);
            }
        } else {
            self.directionHotelAllocation = self.directionHotelAllocation.replace($(this).data('attr'),'');
        }
    });

    $(this.paramHotelChildren).on('change', function () {
        if ($(this).is(':checked')){
            self.directionHotelChildren += $(this).data('attr');//self.inputHotelChildren.val(self.directionHotelChildren);
        } else {
            self.directionHotelChildren = self.directionHotelChildren.replace($(this).data('attr'),'');
        }
    });

    $(this.paramHotelOther).on('change', function () {
        if ($(this).is(':checked')){
            self.directionHotelOther += $(this).data('attr');
            //self.inputHotelOther.val(self.directionHotelOther);
        } else {
            self.directionHotelOther = self.directionHotelOther.replace($(this).data('attr'),'');
            //self.inputHotelOther.val(self.directionHotelOther);
        }
    });

    $(this.applyParamHotel).on('click', function () {
        self.inputHotelOther.val(self.directionHotelOther);
        self.inputHotelChildren.val(self.directionHotelChildren);
        self.inputHotelAllocation.val(self.directionHotelAllocation);
        self.inputHotelEating.val(self.directionHotelEating);
        self.inputHotelRating.val(self.directionHotelRating);
        self.inputHotelType.val(self.directionHotelStars);

        self.hotelParamLbl.addClass('active');
        self.hotelParamSpn.text("Выбрано: "+rootNode.find('input[type=checkbox]:checked.hotel-param').length);
    })
};