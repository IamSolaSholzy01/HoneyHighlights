    var isLoggedIn;
    var subscribe = function(){
        var subForm = $('.subscribe-form');
        subForm.submit(function(e) { 
            url = subForm.attr('action');
            type = subForm.attr('method');
            data = {};
            console.log("Oga Ade how far na");

            subForm.find('[name]').each(function() { 
                var that = $(this),
                name = that.attr('name'),
                value = that.val();
                data[name] = value;
            });

            console.log(data);

            $.ajax({
                type: type,
                url: url,
                dataType: 'JSON',
                data: data,
                success: function(response) { 
                    $('#subscribe-form').css('display','none');
                    $('#subscribe-result').html(response.content);
                    $('#subscribe-result').css('display','block');
                 },
                error: function(response) {
                    $('#subscribe-result').html(response.email);
                }
            })
            return false;
         });
    }

    var register = function () {
        //registration form
        var regForm  = $(".registrationform");
        regForm.submit(function(e){
            url = regForm.attr('action');
            type = regForm.attr('method');
            data = {};

            regForm.find('[name]').each(function(){
                var that = $(this),
                name = that.attr('name'),
                value = that.val();
                data[name] = value;
            });

            // Call ajax for pass data to other place
            $.ajax({
                type: type,
                url: url,
                dataType: 'JSON',
                data: data,
                success: function(response){ 
                    if(response.id == "duplicateName"){
                        shakeModal(); 
                        $('#response').html(response.content);// show the response
                        $('.error').addClass('alert alert-danger');
                        setTimeout(() => {
                            $('#username').val("");
                            $('#regpassword').val("");
                            $('passwordconfirmation').val("");
                        }, 3000); 
                    }else if(response.id == "duplicateEmail"){
                        shakeModal();
                        $('#response').html(response.content);// show the response
                        $('#response').css("color","red");
                        $('.error').addClass('alert alert-danger');
                        setTimeout(() => {
                            $('#username').val("");
                            $('#regemail').val("");
                            $('#regpassword').val("");
                            $('#firstname').val("");
                            $('#surname').val("");
                            $('#passwordconfirmation').val("");
                            $('#response').val("");
                        }, 3000); 
                    }else if(response.id == "success"){
                        $('#response').html(response.content);// show the response
                        $('#response').css("color","green");
                        $('.error').addClass('alert alert-success');
                        setTimeout(() => {
                            $('#regemail').val("");
                            $('#regpassword').val("");
                            $('#firstname').val("");
                            $('#surname').val("");
                            $('#passwordconfirmation').val("");
                            $('#response').val("");
                            $('.error').removeClass('alert alert-success')
                            showLoginForm();
                        }, 3000); 
                    }
                    $("input:submit").removeAttr("disabled");
                },
                error : function(){
                $('#response').text("Serious error");// show the response
                shakeModal();
                $("input:submit").removeAttr("disabled");
                }
            });
            return false;
        });
    }

    var login = function () {
        //Login form
        var logForm  = $(".logform");
        logForm.submit(function(e){
            url = logForm.attr('action');
            type = logForm.attr('method');
            data = {};

            logForm.find('[name]').each(function(){
                var that = $(this),
                name = that.attr('name'),
                value = that.val();
                data[name] = value;
            });

            // Call ajax for pass data to other place
            $.ajax({
                type: type,
                url: url,
                dataType: 'JSON',
                data: data,
                success: function(response){
                    if(response.id == "error"){
                        $('#reply').html(response.content);// show the response
                        $('#reply').css("color","red");
                        $('.error').addClass('alert alert-danger');
                        shakeModal();
                        setTimeout(() => {
                            $('#loginemail').val("");
                            $('#loginpassword').val("");
                        }, 3000); 
                    }else if(response.id == "emailerror"){
                        $('#reply').html(response.content);// show the response
                        $('#reply').css("color","red");
                        $('.error').addClass('alert alert-danger');
                        shakeModal();
                        setTimeout(() => {
                            $('#loginemail').val("");
                            $('#loginpassword').val("");
                        }, 3000); 
                    } else if(response){
                        console.log(response);
                        sessionStorage.setItem('id', response.id);
                        sessionStorage.setItem('username',  response.username);
                        sessionStorage.setItem('email', response.email);
                        sessionStorage.setItem('firstname', response.firstname);
                        console.log(sessionStorage.getItem('email'));
                        $('#reply').html("Login Successful");// show the response
                        $('#reply').css("color","green");
                        $('.error').removeClass('alert alert-danger');
                        $('.error').addClass('alert alert-success');
                        $('#loginLink').css('display', 'none');
                        $('#logoutLink').css('display', 'block');
                        setTimeout(() => {
                            $('#loginemail').val("");
                            $('#loginpassword').val("");
                            $('#reply').text("");
                            $('.error').removeClass('alert alert-success'); 
                            $('#loginLink').css('display', 'none');
                            $('#logoutLink').css('display', 'block'); 
                            closeModal();
                        }, 3000);                    
                    }
                    $("input:submit").removeAttr("disabled");
                },
                error : function(response){
                console.log(response);
                $('#reply').text("Serious error");// show the response
                $('.error').addClass('alert alert-danger');
                shakeModal();
                console.log("errors oo");
                $("input:submit").removeAttr("disabled");
                }
            });
            return false;
        });
    }
    function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
        });
      }
      function onLoad() {
        gapi.load('auth2', function() {
          gapi.auth2.init();
        });
      }
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        sessionStorage.setItem('id', profile.getId());
        sessionStorage.setItem('username',  profile.getName());
        sessionStorage.setItem('email', profile.getEmail());
        $.ajax({
            type: 'POST',
            url: 'php/google.php',
            dataType: 'JSON',
            data: {
                username: sessionStorage.getItem('username'), 
                email: sessionStorage.getItem('email'),
                id: sessionStorage.getItem('id')
            },
            success: function(response){
                if (response.feedback == "success") {
                    console.log('success');
                    console.log(response.name);
                    console.log(response.email);
                } else {
                    console.log('failure');
                }
            },
            error: function(){
                console.log('errors upon errors');
            }
        });
        console.log(sessionStorage.getItem('email'));
        $('#reply').html("Login Successful");// show the response
        $('#reply').css("color","green");
        $('.error').removeClass('alert alert-danger');
        $('.error').addClass('alert alert-success');
        $('#loginLink').css('display', 'none');
        $('#logoutLink').css('display', 'block');
        setTimeout(() => {
        $('#loginemail').val("");
        $('#loginpassword').val("");
        $('#reply').text("");
        $('.error').removeClass('alert alert-success'); 
        $('#loginLink').css('display', 'none');
        $('#logoutLink').css('display', 'block'); 
        closeModal();
        }, 3000);         
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
    var setAsLoggedIn = function () {
        isLoggedIn = true;
    }
    var setAsLoggedOut = function () {
        isLoggedIn = false;
        sessionStorage.clear();
        console.log("Cleared");
    }
    var toggleLoginLogout = function () {

        var login = document.getElementById('loginLink');
        var logout = document.getElementById('logoutLink');

        login.style.display= 'none';
        logout.style.display = 'block';
    }
    var logout = function () {
        if (sessionStorage.getItem('email')!=null){
            console.log(sessionStorage.getItem('email'));
            toggleLoginLogout();
            } else if (sessionStorage.getItem('email')==null) {
            $('#loginLink').css('display', 'block');
            $('#logoutLink').css('display', 'none');    
        }
    }