/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
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

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

function submitValidation(){
    let firstName = document.forms['login']['firstname'].value;
    let surname = document.forms['login']['surname'].value;
    let passwordField = document.forms['login']['password'].value;
    let confirmPasswordField = document.forms['login']['password_confirmation'].value;
    let passError = document.getElementById('passError');
    let confirmError = document.getElementById('confirmError');

    if (passwordField == "") {
        passError.textContent = "Password must not be empty";
        return false;
    }
}

function validateForm(){
    let firstName = document.forms['login']['firstname'].value;
    let surname = document.forms['login']['surname'].value;
    let passwordField = document.forms['login']['password'].value;
    let confirmPasswordField = document.forms['login']['password_confirmation'].value;
    let passError = document.getElementById('passError');
    let confirmError = document.getElementById('confirmError');

    if (passwordField === firstName) {
        passError.textContent = "Do not use your first name as password";
        return false;
    } else if (passwordField === "honeyhighlights" || passwordField === "HoneyHighlights" || passwordField === "Honeyhighlights") {
        passError.textContent = "Do not use Honeyhighlights as password";
        return false;    
    } else if(passwordField.length < 6){
        passError.textContent = "Password too short. At least 6 characters."
    } else if(! /^[a-zA-Z0-9]+$/.test(passwordField)){
        passError.textContent = "Validation failed";
    }
    else {
        passError.textContent = "";
    }
}