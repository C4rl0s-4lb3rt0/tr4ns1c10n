$(document).ready(function(){
    
    /*
    $('#user-login .required').removeClass('required');

    $(':text').focus(function () {
        if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
            $(this).val('').removeClass('hasPlaceholder');
        }
    });

    $('input').blur(function () {
        if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))){
            $(this).val($(this).attr('placeholder'));
        }

    });

    $('input').trigger('blur');

    $('input, a').click(function() {
        this.blur();
    });

    $('input').click(function() {
        this.focus();
    });

    $('input').focus(function() {
        return false;
    });

    $('input').blur(function() {
        return true;
    });

    $(".numeric").live("keypress",function(event){
        var ew = event.which;
        if(ew >= 48 && ew <= 57) 
            return true;
        return false;
    });

    $('.numeric').numeric({negative:false,decimal:false});

    $(".alpha").keypress(function(event){
        var ew = event.which;
        if(ew == 32)
            return true;
        if(65 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        return false;
    });

    $('#date').DatePicker({
        format:'d-m-Y',
        date: $('#date').val(),
        current: $('#date').val(),
        starts: 1,
        position: 'r',
        onBeforeShow: function(){
            $('#date').DatePickerSetDate($('#date').val(), true);
        },
        onChange: function(formated, dates){
            $('#date').val(formated);
            $('#date').DatePickerHide();
        }
    });


    $('.action-form').submit(function(){
        //$('.action-form').live("submit",function(){
        //$('.action-form input[type=submit]').live("click",function(){
        if(validateRequired()){
            $('.enviar').attr('disabled',true);
            data = $('#main-submit-form').serialize();
            //alert("datos form:"+ data)

            $.post('/ajax/save_form_contact',data,function(response){
                $('#main-submit-form').html(response);
                console.log("===test save==");
            });

            $.post('/ajax/msggracias',function(response){
                $('#main-submit-form').html(response);
            });

        }
        return false;
    });

    $('#lada').change(function(){
        $('#telefonofijo').val('');
        if($('#lada').val().length==3){
            $('#telefonofijo').attr('maxlength','7');
        }else{
            $('#telefonofijo').attr('maxlength','8');
        }
    });

});


function validateRequired(){

    var flag = true;
    $('.notify-message').html("");
    $('.required').each(function(o,e){

        if($(e).val()=='' || $(e).val() == $(e).attr('placeholder')  || ($(e).attr('type')=='checkbox' && !$(e).attr('checked'))){

            $(e).addClass('empty');				

            if($(e).attr('placeholder')==""){
                $('.loader-img').hide();
                $(e).attr('placeholder','campo obligatorio');
            }

            if($(e).attr('type')=='checkbox' || typeof $(e).attr('placeholder')!="undefined"){
                var ladalgth = $('input#lada.required').val().length;
                if(ladalgth==2 && $(e).attr('id')=='telefonofijo'){
                    var p = $('<p/>').html($(e).attr('rel2'));
                }else{
                    var p = $('<p/>').html($(e).attr('rel'));
                }
                $('.notify-message').append(p);
            }

            //IF IS IE 
            // if (e).val() == ''|| e,val diferente de campo obligatorio
            //     e.val = 'campo obliga'
            //$(e).val('ooo');

            flag = false;
            return false;
        }else{

            if(typeof $(e).attr('minlength')!="undefined"){
                var ladalgth = $('input#lada.required').val().length;


                if( parseInt($(e).attr('minlength')) > $(e).val().length){

                    if(ladalgth==2 && $(e).attr('id')=='telefonofijo'){
                        var p = $('<p/>').html($(e).attr('rel2'));
                    }else{
                        var p = $('<p/>').html($(e).attr('rel'));
                    }

                    $('.notify-message').append(p);

                    if($(e).attr('placeholder')==""){
                        $(e).removeAttr('placeholder');
                    }

                    flag = false;
                    return false

                }else{
                    $(e).removeAttr('placeholder');
                    $(e).removeClass('empty');	
                }
            }else if($(e).hasClass('mail')){	
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if( !emailReg.test( $(e).val() ) ) {
                    var p = $('<p/>').html("El correo electrónico no tiene un formato válido");
                    $('.notify-message').append(p);
                    $(e).removeAttr('placeholder');
                    flag = false;
                    return false;
                }else{							
                    $(e).removeAttr('placeholder');
                    $(e).removeClass('empty');	
                }
            }else{
                //if($(e).attr('placeholder')=='valor requerido'){
                if($(e).attr('placeholder')=='campo obligatorio'){
                    $(e).removeAttr('placeholder');
                }
                $(e).removeClass('empty');
            }
        }
    });
    if(flag){
        $('.loader-img').show();
    }
    return flag;

    */
}

