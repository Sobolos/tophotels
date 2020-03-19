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
mytour.searchTours.formDirections = function() {
    this.directionCountry = null;
    this.directionCity  = null;
    this.departiarionCity  = null;

    var self = this;

    this.getCities = function(id){
        $.ajax({
            url: '/tophotels/getcities',
            type: 'POST',
            data: {
                id: id,
                type: 'city'
            },
            success: function (res) {
                console.log(res);
            },
            error: function () {
            }
        });
    };

    $('.sumo-direction').on('change', function() {
        self.directionCountry = $(this).children('option:selected').val();
        var countryId = $(this).children('option:selected').data('id');
        var adddiv = "<div class=\"tour-selection__flag lsfw-flag lsfw-flag-"+countryId+"\"></div>";

        console.log('started request');
        self.getCities(countryId);
        $('.tour-selection__country').text($(this).val()).append(adddiv);
    });
};