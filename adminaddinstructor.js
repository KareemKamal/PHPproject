$(document).ready(function() {	
    $('[value="edit"]').on("click",function(){
        $('#new').removeClass("hidden");
        $('#old').addClass("hidden");
        store = $('select').val();
    });

    $('[value="done"]').on("click",function(){
        name = $('[name = "newname"]').val();
        $('#new').addClass("hidden");
        $('#old').removeClass("hidden");
    });

});