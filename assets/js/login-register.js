/*
 *
 * login-register modal
 * Autor: Creative ;
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */

 let clickedStatus = false;
 let clickNumber = 0;
 function aliababwa(){
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

 window.onclick = function(event){
    let regpassword = document.getElementById('regpassword');
    let clickShow = document.getElementById('passwordshow');
    let create = document.getElementById('createacc');
    let googleIcon = document.getElementById('google_login');
    let facebookIcon = document.getElementById('facebook_login');
    let logginuser = document.getElementById('logginuser');
    if (event.target != regpassword && event.target != clickShow && event.target != googleIcon && event.target != facebookIcon && event.target != logginuser && event.target != create  && clickedStatus) {
        event.preventDefault();
        regpassword.setAttribute('type', 'password');
        clickShow.textContent = "Show";
        clickedStatus = false;
        clickShow.style.display = "none";
    } else if (event.target != regpassword && event.target != clickShow && event.target != googleIcon && event.target != facebookIcon && event.target != logginuser && event.target != create && !clickedStatus) {
        event.preventDefault();
        regpassword.setAttribute('type', 'password');
        clickShow.textContent = "Show";
        clickedStatus = true;
        clickShow.style.display = "none";
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
    var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

    if (passwordField === firstName) {
        passError.textContent = "Do not use your first name as password";
        return false;
    } else if (passwordField === "honeyhighlights" || passwordField === "HoneyHighlights" || passwordField === "Honeyhighlights") {
        passError.textContent = "Do not use Honeyhighlights as password";
        return false;    
    } else if(passwordField.length < 6){
        passError.textContent = "Password too short. At least 6 characters."
    } else if(!regularExpression.test(passwordField)){
        passError.textContent = "Password must have at least one number and at least one special character.";
    } else if(passwordField === surname) {
        passError.textContent = "Do not use yur surname as password";
    } else if (confirmPasswordField !== passwordField) {
        confirmError.textContent = "Both passwords must match"        
    }
    else {
        passError.textContent = "";
    }
}