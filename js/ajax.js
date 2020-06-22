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
            //return false;
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
                        setTimeout(() => {
                            $('#loginemail').val("");
                            $('#loginpassword').val("");
                            $('#reply').text("");
                            $('.error').removeClass('alert alert-success');
                        }, 3000);                         
                    }
                    $("input:submit").removeAttr("disabled");
                },
                error : function(){
                $('#response').text("Serious error");// show the response
                $('.error').addClass('alert alert-danger');
                shakeModal();
                $("input:submit").removeAttr("disabled");
                }
            });
            //return false;
        });
    }