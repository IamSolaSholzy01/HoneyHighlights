/*
 *
 * login-register modal
 * Autor: Creative ;
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 * 
*/

let countErrors = false;
let clickedStatus = false;
let confirmStatus = false;
let clickNumber = 0;
let confirmNumber = 0;


var aliababwa = function () {
    if (!countErrors) {
        $('#passError').css('display', 'none');
    }

    if (clickNumber > 0){
        if (!clickedStatus){
            $('#regpassword').attr('type', 'text');
            $('#passwordshow').text('Hide');
            clickedStatus = true;
            setTimeout(() => {
                $('#regpassword').attr('type', 'password');
                $('#passwordshow').text('Show');
                clickedStatus = false;
            }, 5000);
        } 
    } else if (clickNumber < 1) {
        clickNumber++;
    }

    $('#passwordshow').css('display', 'block');
    $('#passwordshow').click(function (event){
        event.preventDefault();
        switch (clickedStatus){
            case true: 
                $('#regpassword').attr('type', 'password');
                $('#passwordshow').text('Show');
                clickedStatus = false;
                break;
        
            default:
                $('#regpassword').attr('type', 'text');
                $('#passwordshow').text('Hide');
                clickedStatus = true;
                setTimeout(() => {
                    $('#regpassword').attr('type', 'password');
                    $('#passwordshow').text('Show');
                    clickedStatus = false;
                }, 5000);
                break;
        }
    });
}

var alibaba = function () {
    if (!countErrors) {
        $('#confirmError').css('display', 'none');
    }
    if (confirmNumber > 0){
        if (!confirmStatus){
            $('#passwordconfirmation').attr('type', 'text');
            $('#confirmpasswordshow').text('Hide');
            confirmStatus = true;
            setTimeout(() => {
                $('#passwordconfirmation').attr('type', 'password');
                $('#confirmpasswordshow').text('Show');
                confirmStatus = false;
            }, 5000);
        } 
    } else if (confirmNumber < 1) {
        confirmNumber++;
    }

    $('#confirmpasswordshow').css('display', 'block');
    $('#confirmpasswordshow').click(function (event){
        event.preventDefault();
        switch (confirmStatus){
            case true: 
            $('#passwordconfirmation').attr('type', 'password');
            $('#confirmpasswordshow').text('Show');
            confirmStatus = false;
            break;
        
            default:
                $('#passwordconfirmation').attr('type', 'text');
                $('#confirmpasswordshow').text('Hide');
                confirmStatus = true;
                setTimeout(() => {
                    $('#passwordconfirmation').attr('type', 'password');
                    $('#confirmpasswordshow').text('Show');
                    confirmStatus = false;
                }, 5000);
                break;
        }
    });
}

var showRegisterForm = function () {
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}

var showLoginForm = function () {
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

var openLoginModal = function () {
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
var closeModal = function () {
    $('#loginModal').modal('hide');
}

var openRegisterModal =  function () {
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

var loginAjax = function () {

    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

var shakeModal = function () {
    $('#loginModal .modal-dialog').addClass('shake');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

var validateForm = function (){
    var firstName = $('#registerform input[name = firstname]').val();
    var surname = $('#registerform input[name = surname]').val();
    var passwordField = $('#registerform input[name = password]').val();
    var confirmPasswordField = $('#registerform input[name = password_confirmation]').val();
    var passError = $('#passError');
    var confirmError = $('#confirmError');

    if ($('#registerform input[name = password]').val() === $('#registerform input[name = firstname]').val()) {
        $('#passError').text("Do not use your first name as password");
        $('#passError').css('display', 'block');
        countErrors = true;
        return false;
    } else if ($('#registerform input[name = password]').val() === "honeyhighlights" || $('#registerform input[name = password]').val() === "HoneyHighlights" || $('#registerform input[name = password]').val() === "Honeyhighlights") {
        $('#passError').text("Do not use Honeyhighlights as password");
        $('#passError').css('display', 'block');
        countErrors = true;
        return false;    
    } else if($('#registerform input[name = password]').val().length < 6){
        $('#passError').text("Password too short. At least 6 characters.");
        $('#passError').css('display', 'block');
        countErrors = true;
        return false;
    } else if($('#registerform input[name = password]').val() === $('#registerform input[name = surname]').val()) {
        $('#passError').text("Do not use your surname as password.");
        $('#passError').css('display', 'block');
        countErrors = true;
        return false;
    } if ($('#registerform input[name = password_confirmation]').val() != $('#registerform input[name = password]').val()) {
        $('#confirmError').text("Both passwords must match.");
        $('#confirmError').css('display', 'block');
        countErrors = true;
        return false;
    }
    else {
        countErrors = false;
        $('#passError').text("");
        $('#passError').css('display', 'none')
        $('#confirmError').text("");
        $('#confirmError').css('display', 'none');
        return true;
    }
}