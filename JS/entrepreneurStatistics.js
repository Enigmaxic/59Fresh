
function displayStatistics(data) {
    var profile;
    var feedback1="";
    var feedback2="";
    
    for (i = 0; i < Object.keys(data).length; i++) {
        profile = data["" + i];
        
        $("#set").append('<div data-role="collapsible" >'+
            '<h3>'+profile[0]+'</h3>'+
            
                '<p><span style="color:green; font-weight:bold;">Matches:   </span>'+ profile[1]+'</p>'+
                "<p><span style='color:red; font-weight:bold;'>No's:   </span>" + profile[2] + '</p><br><br>' +
                '</div>').collapsibleset('refresh');
    
    
    }
}
 function displayFeedback(data){
 var profile;
    
    
    for (i = 0; i < Object.keys(data).length; i++) {
        profile = data["" + i];
        $("#feedbackSet").append('<div data-role="collapsible" >'+
            '<h3>'+profile[0]+" Feedback"+'</h3>'+
            
                '<p><span style="color:white;">'+ profile[1]+'</p>'+
                '<p><span style="color:white;">' + profile[2] + '</p><br><br>' +
                '</div>').collapsibleset('refresh');
    
     }
 }

$(document).ready(function () {
    
    //Grab investor contact info
    $.ajax({
        type: "POST",
        dataType: "json",
        async: false,
        url: "fetchEntrepreneurStatistics.php",
        //Set cover content to the 5 fetched profiles
        success: function (data) {
            displayStatistics(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
        }
    });
    
    $('select').on('change', function() {
        var page = $(this).val();
        alert("about to change to " + page);
        $.mobile.changePage(page);
        alert("changed");
    });
    $('#viewFeedback').on('click',function(){
        $.mobile.changePage('#feedback');
        $.ajax({
        type: "POST",
        dataType: "json",
        async: false,
        url: "fetchEntrepreneurFeedback.php",
        //Set cover content to the 5 fetched profiles
        success: function (data) {
            displayFeedback(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
        }
    });
        
    });
});
