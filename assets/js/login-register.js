/*
 *
 * login-register modal
 * Autor: Creative ;
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
 let countErrors = false;
 let clickedStatus = false;
 let confirmStatus = false;
 let clickNumber = 0;
 let confirmNumber = 0;
 function aliababwa(){
    let passError = document.getElementById('passError');
    if (!countErrors) {
        passError.style.display = "none";
    }
    let regpassword = document.getElementById('regpassword');
    let clickShow = document.getElementById('passwordshow');
    if (clickNumber > 0){
        if (!clickedStatus){
            regpassword.setAttribute('type', 'text');
            clickShow.textContent = "Hide";
            clickedStatus = true;
        } 
    } else if (clickNumber < 1) {
        clickNumber++;
    }

    clickShow.style.display = "block";
    clickShow.onclick = function (event){
        event.preventDefault();
        switch (clickedStatus){
            case true: 
                regpassword.setAttribute('type', 'password');
                clickShow.textContent = "Show";
                clickedStatus = false;
                break;
        
            default:
                regpassword.setAttribute('type', 'text');
                clickShow.textContent = "Hide";
                clickedStatus = true;
                break;
        }
    }
 }

 function alibaba(){
     let confirmError = document.getElementById('confirmError');
    if (!countErrors) {
        confirmError.style.display = "none";
    }
    let confirmpassword = document.getElementById('passwordconfirmation');
    let confirmShow = document.getElementById('confirmpasswordshow');
    if (confirmNumber > 0){
        if (!confirmStatus){
            confirmShow.setAttribute('type', 'text');
            confirmShow.textContent = "Hide";
            confirmStatus = true;
        } 
    } else if (confirmNumber < 1) {
        confirmNumber++;
    }

    confirmShow.style.display = "block";
    confirmShow.onclick = function (event){
        event.preventDefault();
        switch (confirmStatus){
            case true: 
                confirmpassword.setAttribute('type', 'password');
                confirmShow.textContent = "Show";
                confirmStatus = false;
                break;
        
            default:
                confirmpassword.setAttribute('type', 'text');
                confirmShow.textContent = "Hide";
                confirmStatus = true;
                break;
        }
    }
 }

 window.onclick = function(event){
    let confirmpassword = document.getElementById('passwordconfirmation');
    let confirmShow = document.getElementById('confirmpasswordshow');
    let clickShow = document.getElementById('passwordshow');
    let create = document.getElementById('createacc');
    let googleIcon = document.getElementById('google_login');
    let facebookIcon = document.getElementById('facebook_login');
    let logginuser = document.getElementById('logginuser');
    let registerButton = document.getElementById('registerbtn');
    if (event.target != regpassword && event.target != clickShow && event.target != googleIcon && event.target != facebookIcon && event.target != logginuser && event.target != create && event.target != registerButton && clickedStatus ) {
        event.preventDefault();
        regpassword.setAttribute('type', 'password');
        clickShow.textContent = "Show";
        clickStatus = false;
        clickShow.style.display = "none";
    } else if (event.target != regpassword && event.target != clickShow && event.target != googleIcon && event.target != facebookIcon && event.target != logginuser && event.target != create && event.target != registerButton && !clickedStatus) {
        event.preventDefault();
        regpassword.setAttribute('type', 'password');
        clickShow.textContent = "Show";
        clickStatus = true;
        clickShow.style.display = "none";
    } else if (event.target != confirmpassword && event.target != confirmShow && event.target != googleIcon && event.target != facebookIcon && event.target != logginuser && event.target != create  && event.target != registerButton && confirmStatus) {
        event.preventDefault();
        confirmpassword.setAttribute('type', 'password');
        confirmShow.textContent = "Show";
        confirmStatus = false;
        confirmShow.style.display = "none";
    } else if (event.target != confirmpassword && event.target != confirmShow && event.target != googleIcon && event.target != facebookIcon && event.target != logginuser && event.target != create && event.target != registerButton && !confirmStatus) {
        event.preventDefault();
        confirmpassword.setAttribute('type', 'password');
        confirmShow.textContent = "Show";
        confirmStatus = true;
        confirmShow.style.display = "none";
    }

 }

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

function validateForm(){
    let firstName = document.forms['login']['firstname'].value;
    let surname = document.forms['login']['surname'].value;
    let passwordField = document.forms['login']['password'].value;
    let confirmPasswordField = document.forms['login']['password_confirmation'].value;
    let passError = document.getElementById('passError');
    let confirmError = document.getElementById('confirmError');
    var regularExpression = /^(?=.*[0-9])[a-zA-Z0-9]{6,16}$/;

    if (passwordField === firstName) {
        passError.textContent = "Do not use your first name as password";
        passError.style.display = "block";
        countErrors = true;
        return false;
    } else if (passwordField === "honeyhighlights" || passwordField === "HoneyHighlights" || passwordField === "Honeyhighlights") {
        passError.textContent = "Do not use Honeyhighlights as password";
        passError.style.display = "block";
        countErrors = true;
        return false;    
    } else if(passwordField.length < 6){
        passError.textContent = "Password too short. At least 6 characters."
        passError.style.display = "block";
        countErrors = true;
        return false;
    } else if(!regularExpression.test(passwordField)){
        passError.textContent = "Password must have at least one number.";
        passError.style.display = "block";
        countErrors = true;
        return false;
    } else if(passwordField === surname) {
        passError.textContent = "Do not use yur surname as password";
        passError.style.display = "block";
        countErrors = true;
        return false;
    } if (confirmPasswordField != passwordField) {
        confirmError.textContent = "Both passwords must match";
        confirmError.style.display = "block";
        countErrors = true;
        return false;
    }
    else {
        countErrors = false;
        passError.textContent = "";
        passError.style.display = "none";
        confirmError.textContent = "";
        confirmError.style.display = "none";
        return true;
    }
}