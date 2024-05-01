$( document ).ready(function() {



    $('#nbLimitPlayer').html($('#limit-range').val());

    $('#limit-range').on('input', function (){
        $('#nbLimitPlayer').html($(this).val());
    });









});