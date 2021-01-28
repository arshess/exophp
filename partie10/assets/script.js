$(function(){
    
    $('input').blur(function(){
        var input = $(this);
        var valeur = $(this).val();
        $.get({
            url:'./controller/euh.php',
            dataType:'text',
            data: input.attr('id') + '=' + valeur,
            success: function(result){
                var removed='';    
                if(result=='is-valid'){
                    removed = 'is-invalid';
                }
                if(result=='is-invalid')
                {
                    removed='is-valid';
                }
                console.log(result);
                input.removeClass(removed).addClass(result);
            }
        });
    });

    $("#btn-reset").click(function(){
        $('input').val('');
        $('select').val('');
        $('textarea').val('');
    });


});