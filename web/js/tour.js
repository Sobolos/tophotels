function getRange() {
    "use strict";
    var dateToday = new Date();
    var range_from =  new Date(dateToday.getFullYear(), dateToday.getMonth(), dateToday.getDate()+14);
    var range_to = new Date(dateToday.getFullYear(), dateToday.getMonth(), dateToday.getDate()+21);

    var from = range_from.getFullYear() + '-' + (range_from.getMonth()+1) + '-' + range_from.getDate();
    var to = range_to.getFullYear() + '-' + (range_to.getMonth()+1) + '-' + range_to.getDate();

    return from + ' - ' + to;
}

jQuery(document).ready(function () {
    "use strict";

});