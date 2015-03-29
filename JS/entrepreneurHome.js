$(document).ready(function() {
    $('select').on('change', function() {
        var page = $(this).val();
        $.mobile.changePage(page);
    });
});

