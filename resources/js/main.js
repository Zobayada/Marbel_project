$(document).ready(function(){
    
    //sticky menu
    $(".js_about").waypoint(function(direction){
        if(direction == "down"){
                $("nav").addClass("sticky");
            } else{
                $("nav").removeClass("sticky");
            }
    });  
    
    
    //mixitup
  //  var mixer = mixitup('.container');
});

function openNav(){
    document.getElementById("mynav").style.width = "100%";
}
function closeNav(){
    document.getElementById("mynav").style.width = "0%";
}