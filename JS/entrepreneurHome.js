$(document).ready(function() {
    $("body").pagecontainer({
        defaults: true
    });
    $('select').on('change', function() {
        var page = $(this).val();
        //alert("about to change to " + page);
        $("body").pagecontainer("load", page);
        //alert("changed");
    });
});

