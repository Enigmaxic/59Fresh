$(document).ready(function() {
    $('select').on('change', function() {
        var page = $(this).val();
        alert("about to change to " + page);
        $.mobile.changePage(page);
        alert("changed");
    });
});
