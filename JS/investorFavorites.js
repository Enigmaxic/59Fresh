/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function displayIdeas(data) {
    var profile;
    for (i = 0; i < Object.keys(data).length+1; i++) {
        profile = data["" + i];
        
            
        /*$("body").append('<div class="flip-container">'+
        '<div class="flipper">'+
            '<div class="front" style"padding-top:0px;">'+
            
                '<p id="titulo">'+profile["business_name"]+'</p>'+
                '<p>'+profile["business_type"]+'</p>'+
                '<p>Creator: '+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>Alma Mater:'+profile["almamater"]+'</p>'+
                
            '</div>'+
            '<div class="back" style="background:#000000;">'+
                
                '<div class="centered text-center">' + 
                        '<iframe width="200" height="250" src="' + profile['business_video'] + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>'+
                '<div class="sub">'+
                    
                '</div>'+
                
                
            '</div>'+
        '</div>'+
    '</div>');*/
        $("#set").append('<div data-role="collapsible" >'+
            '<h3>'+profile["business_name"]+'</h3>'+
            '<p>'+profile["business_type"]+'</p>'+
                '<p>Creator: '+profile["firstname"]+' '+profile["lastname"]+'</p>'+
                '<p>Location: '+profile["city"]+'</p>'+
                '<p>Age:'+profile["age"]+'</p>'+
                '<p>Alma Mater:'+profile["almamater"]+'</p>'+
                
                
                '<p><div class="centered text-center">' + 
                        '<iframe width="200" height="250" src="' + profile['business_video'] + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>'+
               
                 
            
            
            
                    +'</div>').collapsibleset('refresh');
    
        
    }
}
$(document).ready(function() {
    
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "fetchInvestorFavorites.php",
        //Set cover content to the 5 fetched profiles
        success: function(data) {
            
            displayIdeas(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error: " + jqXHR.responseText);
        }
    });
});