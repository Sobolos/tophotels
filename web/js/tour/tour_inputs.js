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
    });

    $('.js-type1').on('click', function () {
        $('.js-types-search-tours-blocks').show();
        $('.js-types-search-hotel-blocks').hide();
    });

    /*контрол параметров*/
    $('.js-show-currencys').on('click', function () {
        $(this).closest('.formDirections').find('.js-hide-price-inputs').hide();
        $(this).closest('.formDirections').find('.js-act-currencys').show();
    });

    $('.js-act-currencys .formDirections__price-currency').on('click', function () {
        $(this).closest('.formDirections').find('.js-hide-price-inputs').show();
        $(this).closest('.formDirections__price-wrap').hide();

    });
    $('.formDirections__price-currency').on('click', function () {
        var valCurrency = $(this).find('.formDirections__price-currency-lb .formDirections__price-currency-sign').text();
        $(this).closest('.formDirections').find('.formDirections__price-input-bbl').text(valCurrency);

    });

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
    $('.js-add-field').on('click', function () {
        $('.js-show-added-field').show();
    });
    $('.js-del-field').on('click', function () {
        $('.js-show-added-field').hide();
    });

    $('.js-add-hotel ').on('click', function () {
        $('.js-show-add-hotel').show();
    });

    $('.js-del-hotel ').on('click', function () {
        $('.js-show-add-hotel').hide();
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
    $('.bth__ta-resizable').focus(function () {
        $('.bth__ta-resizable-hint').addClass('active');
        $(this).addClass('focus');
    });
    $('.bth__ta-resizable').blur(function () {
        if (!$(this).text()) {

            $('.bth__ta-resizable-hint').removeClass('active');
            $(this).removeClass('focus');
        }
    });$('.formDirections_plus-circle').on('click', function () {
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

    //Направление города
    var sumoDirectionCity= $('select[id="sumo-direction-city"]');
    sumoDirectionCity.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDirectionCity.parent().addClass('open');
    sumoDirectionCity.next().next().css('top', '0').css('position', 'relative');

    //Направление
    var sumoDirection= $('select[id="sumo-direction"]');
    sumoDirection.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDirection.parent().addClass('open');
    sumoDirection.next().next().css('top', '0').css('position', 'relative');

    //Список городов вылета
    var sumoListCity = $('select[id="sumo-list-city"]');
    sumoListCity.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoListCity.parent().addClass('open');
    sumoListCity.next().next().css('top', '0').css('position', 'relative');


    //Город вылета
    var sumoDepartment = $('select[id="sumo-department"]');
    sumoDepartment.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDepartment.parent().addClass('open');
    sumoDepartment.next().next().css('top', '0').css('position', 'relative');

    var formDateHelp1 = new mytour.searchTours.formDate({
        pickerBlockId: 'js-mt-filter-dtHelp1',
        popupBlockId: 'mtIdxFormDatePPHelp1',
        popupBlock: $('#mtIdxFormDatePPHelp1'),
        datepicker: $('#mtIdxDateHelp1')
    }, mytour.searchTours.main.request);

    var formNights = new mytour.searchTours.formNights();
    var formGuests = new mytour.searchTours.formGuests();
});
$(document).on('click', function (e) {
    var $target = $(e.target);
    if (!$target.is(".js-show-formDirections") && !$target.closest(".js-show-formDirections").length &&
        !$target.is(".formDirections") && !$target.closest(".formDirections").length) {
        $(".formDirections").hide();
    }
});

