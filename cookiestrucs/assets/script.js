$(function(){

    $('#btnResetCookies').click(function(){
        var cookies = document.cookie.split(";");

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
    });
    $('.btnEdit').click(function(){
        let id = $(this).attr('data-id');
        if(id=='inputRecherche'){
            $('#'+id).attr('disabled',false);

        }else{
            console.log($('#'+id));
            $('#'+id).removeClass('form-control-plaintext').addClass('form-control').attr('readonly',false);
        }


    });
});