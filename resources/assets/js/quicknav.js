$(document).ready(function(){
    $("dropdown").hover(function(){
    	$(this).find("dropdown-content").css("background-color", "red");
    }, function(){
        $(this).css("visibility", "hidden");
    });
});