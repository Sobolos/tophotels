$(document).ready(function () {
    "use strict";
    $('#createLead').on('click', function () {
        $('#createLead').addClass('bth__loader--animate');

        var depValid = true, nightValid = true, guestValid = true;
        if(TourParams.formDate.departiarionDate === "" || $('#departDates').val() === ""){
            $('#dateInput').addClass('has-error');
            depValid = false;
        }

        if(TourParams.formNights.nightsRange === "" || $('#nightsAmount').val() === ""){
            $('#durationInput').addClass('has-error');
            nightValid = false;
        }
        if(TourParams.formGuests.adultsAmount === "" || TourParams.formGuests.childrenAmount === "" || $('#adultsAmount-inpt').val() === "" || $('#childrenAmount-inpt').val() === ""){
            $('#guestsInput').addClass('has-error');
            guestValid = false;
        }

        if(depValid && nightValid && guestValid)
            send();
        else return false;
    });

    function send() {
        var btnLoader = $('#createLead');
        var data = $('#TourForm').serialize();
        $.ajax({
            url: '/tophotels/inserttour',
            type: 'POST',
            data: data,
            success: function (res) {
                $('#step1Panel').hide();
                $('#step2Panel').show();
                $('#LeadID').val(res);

                location.hash = '#step2';
                if(location.hash){
                    $(location.hash).siblings().hide();
                    $(location.hash).show();
                }

                btnLoader.removeClass('bth__loader--animate');
            },
            error: function () {
                btnLoader.removeClass('bth__loader--animate');
            }
        });
    }
});