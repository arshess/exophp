$(function(){
    $.ajax({
        url:'',
        type:"POST",
        success: function(result){
            
        }


    });

    $("#btn-reset").click(function(){
        $('input').val('');
        $('select').val('');
        $('textarea').val('');
    });


});