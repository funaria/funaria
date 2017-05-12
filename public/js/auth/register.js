jQuery().ready(function ($) {
    var $form = $("#post_register");
    $form.on("submit", function (e) {
        e.preventDefault()
        $.ajax({
            url: $form.attr('action'),
            method: 'post',
            data: $form.serialize(),
            success: function (data, ts, jqxhr) {
            }
        })
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 85 // Creates a dropdown of 15 years to control year
    });
})