$(document).ready(function() {
    var siteUrl = 'https://www.hptax.gov.in/';
    $('#reload').on('click', function() {
        $.get(siteUrl + 'reload-captcha', function(data) {
            $('#reload').closest(".captcha").find("span").html(data.captcha);
        });
    });
    $('#reload2').on('click', function() {
        $.get(siteUrl + 'reload-captcha', function(data) {
            $('#reload2').closest(".captcha").find("span").html(data.captcha);
        });
    });
});

$(document).ready(function() {
    $("body").on("cut copy paste", function(e) {
        e.preventDefault();
    });
});