$(document).ready(function () {
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

    /*
    var formDateHelp1 = new mytour.searchTours.formDate({
        pickerBlockId: 'js-mt-filter-dtHelp1',
        popupBlockId: 'mtIdxFormDatePPHelp1',
        popupBlock: $('#mtIdxFormDatePPHelp1'),
        datepicker: $('#mtIdxDateHelp1')
    }, mytour.searchTours.main.request);*/
});