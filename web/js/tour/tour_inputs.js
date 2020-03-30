var TourParams = {};

$(document).ready(function () {
    $('.formDirections__bottom-close, .formDirections__close-red, .js-close-formDirections, .formDirections__close-abs').on('click', function () {
        $(this).closest('.formDirections').hide();
    });

    $('.formDirections__SumoSelect ').on('click', 'li.opt', function () {
        $(this).closest('.formDirections').hide();
    });

    $('.js-type2').on('click', function () {
        $('.js-types-search-tours-blocks').hide();
        $('.js-types-search-hotel-blocks').show();
        $('#InputTourType').val('0');
        TourParams.tourType = 0;
    });

    $('.js-type1').on('click', function () {
        $('.js-types-search-tours-blocks').show();
        $('.js-types-search-hotel-blocks').hide();
        $('#InputTourType').val('1');
        TourParams.tourType = 1;
    });

    /*контрол параметров*/

    $('.formDirections .js-act-country').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').show();
        $(this).closest('.formDirections').find('.js-search-city').hide();
        $(this).closest('.formDirections').find('.js-search-hotels').hide();
        $(this).closest('.formDirections').find('.js-search-stars').hide();
        $(this).closest('.formDirections').find('.js-search-rating').hide();
        $(this).closest('.formDirections').find('.js-search-kid').hide();
        $(this).closest('.formDirections').find('.js-search-other').hide();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections  .js-act-city').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').hide();
        $(this).closest('.formDirections').find('.js-search-city').show();
        $(this).closest('.formDirections').find('.js-search-hotels').hide();
        $(this).closest('.formDirections').find('.js-search-stars').hide();
        $(this).closest('.formDirections').find('.js-search-rating').hide();
        $(this).closest('.formDirections').find('.js-search-kid').hide();
        $(this).closest('.formDirections').find('.js-search-other').hide();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections  .js-act-hotels').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').hide();
        $(this).closest('.formDirections').find('.js-search-city').hide();
        $(this).closest('.formDirections').find('.js-search-hotels').show();
        $(this).closest('.formDirections').find('.js-search-stars').hide();
        $(this).closest('.formDirections').find('.js-search-rating').hide();
        $(this).closest('.formDirections').find('.js-search-kid').hide();
        $(this).closest('.formDirections').find('.js-search-other').hide();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections  .js-act-stars').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').hide();
        $(this).closest('.formDirections').find('.js-search-city').hide();
        $(this).closest('.formDirections').find('.js-search-hotels').hide();
        $(this).closest('.formDirections').find('.js-search-stars').show();
        $(this).closest('.formDirections').find('.js-search-rating').hide();
        $(this).closest('.formDirections').find('.js-search-kid').hide();
        $(this).closest('.formDirections').find('.js-search-other').hide();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections  .js-act-rating').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').hide();
        $(this).closest('.formDirections').find('.js-search-city').hide();
        $(this).closest('.formDirections').find('.js-search-hotels').hide();
        $(this).closest('.formDirections').find('.js-search-stars').hide();
        $(this).closest('.formDirections').find('.js-search-rating').show();
        $(this).closest('.formDirections').find('.js-search-kid').hide();
        $(this).closest('.formDirections').find('.js-search-other').hide();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections  .js-act-kid').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').hide();
        $(this).closest('.formDirections').find('.js-search-city').hide();
        $(this).closest('.formDirections').find('.js-search-hotels').hide();
        $(this).closest('.formDirections').find('.js-search-stars').hide();
        $(this).closest('.formDirections').find('.js-search-rating').hide();
        $(this).closest('.formDirections').find('.js-search-kid').show();
        $(this).closest('.formDirections').find('.js-search-other').hide();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections  .js-act-other').on('click', function () {
        $(this).closest('.formDirections').find('.js-search-country').hide();
        $(this).closest('.formDirections').find('.js-search-city').hide();
        $(this).closest('.formDirections').find('.js-search-hotels').hide();
        $(this).closest('.formDirections').find('.js-search-stars').hide();
        $(this).closest('.formDirections').find('.js-search-rating').hide();
        $(this).closest('.formDirections').find('.js-search-kid').hide();
        $(this).closest('.formDirections').find('.js-search-other').show();
        $(this).closest('.formDirections').find('.formDirections__top-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.formDirections .formDirections__arr').on('click', function () {
        $(this).closest('.formDirections__city').find('.formDirections__drop-city').toggle();
        $(this).toggleClass('active')
    });

    $('.js-show-formDirections').on('click', function () {
        $('.form-date + div').addClass('hidden');
        $(this).closest('html').find('.formDirections').hide();
        $(this).next('.formDirections').slideDown();
    });


    $('.bth__inp-block .form-date').on('click', function () {
        $('.formDirections').hide();
        $('.bth__sumo-currency .SumoSelect').removeClass('open');
    });

    //Добавляем и удаляем контролы
    ////добавить контролы тура
    $('.js-add-field').on('click', function () {
        var blok2 = $(this).parent().parent().next();
        var blok3 = $(this).parent().parent().next().next();
        if(blok2.is(':visible')){
            blok3.show();
            TourParams.selectTour3 = new mytour.searchTours.formDirectionsTour($('#selectTour3'));
            console.log(TourParams);
        }
        else{
            blok2.show();
            TourParams.selectTour2 = new mytour.searchTours.formDirectionsTour($('#selectTour2'));
        }
    });
    ////удалить контролы тура
    $('.js-del-field').on('click', function () {
        var parent = $(this).parent().parent();
        parent.hide();
        parent.find('input[type=hidden]').val("");
        if(parent.id === "selectTour2"){
            parent.find('input[type=hidden]').val("");
            parent.find('input[type=checkbox]').prop("checked", false);
            parent.find('input[type=radio]').prop("checked", false);
            parent.find('select').prop('selectedIndex', 0);
            TourParams.selectTour2 = null;
        }
        if(parent.id === "selectTour3")
            TourParams.selectTour3 = null;
    });

    ////добавить контролы отеля
    $('.js-add-hotel ').on('click', function () {
        var blok2 = $(this).parent().parent().next();
        var blok3 = $(this).parent().parent().next().next();
        if(blok2.is(':visible')){
            blok3.show();
            TourParams.selectHotel3 = new mytour.searchTours.formDirectionsHotel($('#selectHotel3'));
        }
        else{
            blok2.show();
            TourParams.selectHotel2 = new mytour.searchTours.formDirectionsHotel($('#selectHotel2'));
        }
    });

    $('.js-del-hotel ').on('click', function () {
        var parent = $(this).parent().parent();
        parent.hide();
        parent.find('input[type=hidden]').val("");
        parent.find('select').prop('selectedIndex', 0);
        if(parent.id === "selectTour2")
            TourParams.selectHotel2 = null;

        if(parent.id === "selectTour3")
            TourParams.selectHotel3 = null;
    });


    // Большие контролы
    var windowWidth = Math.max($(window).width(), window.innerWidth);
    if (windowWidth <= 509) {
        // При открытии закрыть табы
        $('.js-formDirections--big-mobile').on('click', function () {
            $('html, body').css('overflow', 'hidden')
        });
        $('.formDirections--big-mobile  .formDirections__top .formDirections__bottom-close, .js-close-formDirections').on('click', function () {
            $('html, body').css('overflow', 'auto')
        });
    }

    $('.formDirections_plus-circle').on('click', function () {
        $(this).toggleClass('active');
        $(this).closest('.formDirections__bottom-item').next().toggle()
    });

    $(document).on('click', '.js-lsfw-pp', function(){
        $(this).next().addClass('hidden');
    });

    $(document).on('click', '.js-lsfw-ppdb', function(){
        $(this).next().addClass('d-ib');
    });

    $(document).on('click', '.js-lsfw-pp-close', function(){
        $(this).closest('.formDirections').removeClass('d-ib');
    });

    $(document).on('click', '.js-lsfw-ppdb-close', function(){
        $(this).closest('.formDirections').removeClass('d-ib');
    });

    $('#countryDirection1').focus(function () {
        $('.bth__ta-resizable-hint').addClass('active');
        $(this).addClass('focus');
    });

    $('#countryDirection1').blur(function () {
        if (!$(this).text()) {
            $('.bth__ta-resizable-hint').removeClass('active');
            $(this).removeClass('focus');
        }
    });

    $('#countryDirection1').on('input', function () {
        TourParams.additionalWishes = $(this).val();
    });

    //Направление города
    var sumoDirectionCity= $('select[class="sumo-direction-city"]');
    sumoDirectionCity.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDirectionCity.parent().addClass('open');
    sumoDirectionCity.next().next().css('top', '0').css('position', 'relative');

    //Направление
    var sumoDirection= $('select[class="sumo-direction"]');
    sumoDirection.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDirection.parent().addClass('open');
    sumoDirection.next().next().css('top', '0').css('position', 'relative');
    sumoDirection.on('sumo:closed', function() {
        // Do stuff here
        console.log("Drop down opened")
    });

    //Список городов вылета
    var sumoListCity = $('select[class="sumo-list-city"]');
    sumoListCity.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoListCity.parent().addClass('open');
    sumoListCity.next().next().css('top', '0').css('position', 'relative');


    //Город вылета
    var sumoDepartment = $('select[class="sumo-department"]');
    sumoDepartment.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDepartment.parent().addClass('open');
    sumoDepartment.next().next().css('top', '0').css('position', 'relative');

    var sumoDepartmentHotel = $('select[class="sumo-hotel"]');
    sumoDepartment.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDepartmentHotel.parent().addClass('open');
    sumoDepartmentHotel.next().next().css('top', '0').css('position', 'relative');

    $('#tourParametrs').focus(function () {
        $('.bth__ta-resizable-hint').addClass('active');
        $(this).addClass('focus');
    });
    $('#tourParametrs').blur(function () {
        if (!$(this).text()) {

            $('.bth__ta-resizable-hint').removeClass('active');
            $(this).removeClass('focus');
        }
    });

    TourParams.formDate = new mytour.searchTours.formDate({
        pickerBlockId: 'js-mt-filter-dtHelp1',
        popupBlockId: 'mtIdxFormDatePPHelp1',
        popupBlock: $('#mtIdxFormDatePPHelp1'),
        datepicker: $('#mtIdxDateHelp1')
    }, mytour.searchTours.main.request);
    TourParams.formNights = new mytour.searchTours.formNights();
    TourParams.formGuests = new mytour.searchTours.formGuests();
    TourParams.formPrices = new mytour.searchTours.formPrices();
    TourParams.selectTour1 = new mytour.searchTours.formDirectionsTour($('#selectTour1'));
    TourParams.selectHotel1 = new mytour.searchTours.formDirectionsHotel($('#selectHotel1'));
});
$(document).on('click', function (e) {
    var $target = $(e.target);
    if (!$target.is(".js-show-formDirections") && !$target.closest(".js-show-formDirections").length &&
        !$target.is(".formDirections") && !$target.closest(".formDirections").length) {
        $(".formDirections").hide();
    }
});

