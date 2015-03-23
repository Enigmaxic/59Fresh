/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function displayIdeas(data) {
    var profile;
    var pic;
    for (i = 0; i < Object.keys(data).length; i++) {
        profile = data["" + i];
      
        if(profile["profilepicture"]===null){
            pic="IMG/default.png";
        }
        else{
            pic = "PROFILE_PICTURES/"+profile["profilepicture"];
        }
        if (profile["contact_type"]==="Phone") {
            /*<div data-role="collapsible">
  <h3>I'm a header</h3>
  <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
</div>*/
             
            $("#set").append('<div data-role="collapsible" >'+
            '<h3>'+profile["firstname"]+' '+profile["lastname"]+'</h3>'+
            
            '<p>'+profile["class"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>Alma Mater:'+profile["almamater"]+'</p>'+
                '<p>'+profile["phone"]+'</p>'+
                '<p>Contact Preferences:'+profile["contact_preferences"]+'</p>'+
                    +'</div>').collapsibleset('refresh');
            
            /*$("body").append('<div class="flip-container">'+
        '<div class="flipper">'+
            '<div class="front">'+
                '<img src="'+pic+'" />'+
                '<p>'+profile["firstname"]+' '+profile["lastname"]+'/p>'+
                '<div class="sub">'+
                    '<p>'+profile["class"]+'</p>'+
                '</div>'+
            '</div>'+
            '<div class="back">'+
                '<p id="titulo">'+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<p>'+profile["class"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>Alma Mater:'+profile["almamter"]+'</p>'+
                '<p>'+profile["phone"]+'</p>'+
                '<p>Contact Preferences:'+profile["contact_preferences"]+'</p>'+
            '</div>'+
        '</div>'+
    '</div>');*/
            
            
        } else if(profile["contact_type"]==="Email"){
            
            $("#set").append('<div data-role="collapsible" >'+
            '<h3>'+profile["firstname"]+' '+profile["lastname"]+'</h3>'+
            
            '<p>'+profile["class"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>Alma Mater:'+profile["almamater"]+'</p>'+
                '<p>'+profile["email"]+'</p>'+
                '<p>Contact Preferences:'+profile["contact_preferences"]+'</p>'+
                    +'</div>').collapsibleset('refresh');
            /*$("body").append('<div class="flip-container">'+
        '<div class="flipper">'+
            '<div class="front">'+
                '<img src="'+pic+'" />'+
                '<p>'+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<div class="sub">'+
                    '<p>'+profile["class"]+'</p>'+
                '</div>'+
            '</div>'+
            '<div class="back">'+
                '<p id="titulo">'+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<p>'+profile["class"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>'+profile["email"]+'</p>'+
                
                '<p>Contact Preferences:'+profile["contact_preferences"]+'</p>'+
            '</div>'+
        '</div>'+
            
    '</div>');*/
        }
        else  {
        
            $("#set").append('<div data-role="collapsible" >'+
            '<h3>'+profile["firstname"]+' '+profile["lastname"]+'</h3>'+
            
            '<p>'+profile["class"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>Alma Mater:'+profile["almamater"]+'</p>'+
                '<p>'+profile["email"]+'</p>'+
                '<p>'+profile["phone"]+'</p>'+
                '<p>Contact Preferences:'+profile["contact_preferences"]+'</p>'+
                    +'</div>').collapsibleset('refresh');
            /*$("body").append('<div class="flip-container">'+
        '<div class="flipper">'+
            '<div class="front">'+
                '<img src="'+pic+'"/>'+
                '<p>'+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<div class="sub">'+
                    '<p>'+profile["class"]+'</p>'+
                '</div>'+
            '</div>'+
            '<div class="back">'+
                '<p id="titulo">'+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<p>'+profile["class"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>'+profile["email"]+'</p>'+
                '<p>'+profile["phone"]+'</p>'+
                '<p>Contact Preferences:'+profile["contact_preferences"]+'</p>'+
            '</div>'+
        '</div>'+
    '</div>');*/
        }
        
    }
}

$(document).on("pageinit",function () {
    //initialize sidebar
    //$("ul#sidebar").sidebar({});
    
    alert("here");
    //Grab investor contact info
    $.ajax({
        type: "POST",
        dataType: "json",
        async: false,
        url: "fetchInvestorContactInfo.php",
       
        //Set cover content to the 5 fetched profiles
        success: function (data) {
            
            displayIdeas(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
            alert("fdnsjdgkgsmgkd");
        }
    });
});


