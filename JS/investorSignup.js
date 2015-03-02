$(document).ready(function () {
    $("#contacttype").change(function () {
        contactType = $("#contacttype").val();
        if (contactType == "Phone" || contactType == "Either") {
            $("#phoneNumber").css("visibility", "visible");
        } else {
            $("#phoneNumber").css("visibility", "hidden");
        }
    });
});
