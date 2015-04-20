/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function displayNewProfile(data) {
    var profile;
    //alert(JSON.stringify(data));
    profile = data[0];
    $("#profileInfo").html(
            '<h2><font color="white">' + profile["firstname"] + " " + profile["lastname"] + '</font></h2>' +
            '<p><strong><font color="red">Alma mater: </font></strong><font color="white">' + profile['almamater'] + '</font></p>' +
            '<p><strong><font color="red">City: </font></strong><font color="white">' + profile['city'] + '</font></p>');
    
    $("#profilePicture").html('<figure><img id="profilepicture" src="PROFILE_PICTURES/' + profile['profilepicture'] + '" alt="Profile Picture missing" class="profilepicture"></figure>');
    
    $("#profileVideo").html('<iframe src="' + profile['business_video'] + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
    
    $("#1").attr("name", profile['business_id']);
}

function swipeleftHandler(event){
    $.ajax({
        type: "POST",
        dataType: "json",
        async: false,
        url: "fetchProfile.php",
        //Set cover content to the 5 fetched profiles
        success: function(data) {
            displayNewProfile(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
        }
    });
}
function swiperightHandler(event){
    $.ajax({
        type: "POST",
        dataType: "json",
        async: false,
        url: "fetchProfile.php",
        //Set cover content to the 5 fetched profiles
        success: function(data) {
            displayNewProfile(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
        }
    });
}
function ShowDialog(modal)
{
    $("#dialog").fadeIn(300);
}

function HideDialog()
{
    $("#dialog").fadeOut(300);
}

$(document).ready(function() {
    $(".cover").on("swipeleft",swipeleftHandler);
    $(".cover").on("swiperight",swiperightHandler);
    //Grab 5 profiles to start
    $.ajax({
        type: "POST",
        dataType: "json",
        async: false,
        url: "fetchProfile.php",
        //Set cover content to the 5 fetched profiles
        success: function(data) {
            displayNewProfile(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
        }
    });

    $("#btnClose").click(function() {
        HideDialog();
    });
    $("#btnSubmit").click(function() {
        var id = $('.coverflow').coverflow("cover").attr('name');
        var radio;
        if ($('#feed1').is(':checked')) {
            radio = "Not interested in product.";
        }
        if ($('#feed2').is(':checked')) {
            radio = "Unrealistic";
        }
        if ($('#feed3').is(':checked')) {
            radio = "Needs Refinement";
        }

        if ($("#feed4").val() !== "") {
            $.post('feedback.php', {
                businessid: id,
                radio: radio,
                other: $("#feed4").val()},
            function(data) {
            }).fail(function() {
                alert("Posting failed.");
            });
        }
        else {
            $.post('feedback.php', {
                businessid: id,
                radio: radio},
            function(data) {
            }).fail(function() {
                alert("Posting failed.");
            });
        }
        HideDialog();
    });

    $(document).on('click', '.viewProfile', function() {
        var id = $('.coverflow').coverflow("cover").attr('id');
        $('#profiles').hide();
        $('#fullProfile').css("display", "block");
        $('#f' + id).css("display", "block");


    });
    $(document).on('click', '.return', function(event) {
        var id = $('.coverflow').coverflow("cover").attr('id');
        $('#f' + id).css("display", "none");
        $('#fullProfile').css("display", "none");
        $('#profiles').show();
    });
    $(document).on('click', '.match', function() {
        var id = $('.coverflow').coverflow("cover").attr('name');
        //var arr = {"businessid":};
        $.post('browseMatching.php', {businessid: id, match: 1}, function(data) {

            $("#" + $('.coverflow').coverflow("cover").attr('id')).html("<img src = '" + "IMG/check.png' />");


        }).fail(function() {


            alert("Posting failed.");

        });

    });


    $(document).on('click', '.nothanks', function() {
        var id = $('.coverflow').coverflow("cover").attr('name');
        //var arr = {"businessid":};

        $.post('browseMatching.php', {businessid: id, match: 0}, function(data) {

            $("#" + $('.coverflow').coverflow("cover").attr('id')).html("<img src = '" + "IMG/x.jpeg' />");
            ShowDialog();

        }).fail(function() {


            alert("Posting failed.");

        });
    });
    $(document).on('click', '.maybe', function() {
        var id = $('.coverflow').coverflow("cover").attr('name');
        //var arr = {"businessid":};
        $.post('browseTracking.php', {businessid: id}, function(data) {


            alert("You have begun tracking this profile!");

        }).fail(function() {


            alert("Posting failed.");

        });
    });

});



