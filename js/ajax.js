    var isLoggedIn;
    var subscribe = function() {
        var subForm = $('.subscribe-form');
        subForm.submit(function(e) {
            url = subForm.attr('action');
            type = subForm.attr('method');
            data = {};
            //console.log("Oga Ade how far na");

            subForm.find('[name]').each(function() {
                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();
                data[name] = value;
            });

            //console.log(data);

            $.ajax({
                type: type,
                url: url,
                dataType: 'JSON',
                data: data,
                success: function(response) {
                    $('#subscribe-form').css('display', 'none');
                    $('#subscribe-result').html(response.content);
                    $('#subscribe-result').css('display', 'block');
                },
                error: function(response) {
                    $('#subscribe-result').html(response.email);
                }
            })
            return false;
        });
    }

    var contact_request = function() {
        var subForm = $('#contact-form');
        subForm.submit(function(e) {
            url = subForm.attr('action');
            type = subForm.attr('method');
            data = {};

            subForm.find('[name]').each(function() {
                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();
                data[name] = value;
            });


            $.ajax({
                type: type,
                url: url,
                dataType: 'JSON',
                data: data,
                success: function(response) {
                    console.log(response);
                    if (response.id == 'success') {
                        $('.contact-result').html(response.content);
                        $('.contact-result').css('display', 'block');
                        $('.contact-result').addClass('alert alert-success');
                        $('.contact-result').css("color", "green");
                        $('.contact-result').addClass('alert alert-success');
                        setTimeout(() => {
                            $('#name').val("");
                            $('#email').val("");
                            $('#text').val("");
                            $('#message').val("");
                            $('.contact-result').val("");
                            $('.contact-result').removeClass('alert alert-success');
                            $('.contact-result').css('display', 'none');
                        }, 3000);
                    } else {
                        $('.contact-result').html(response.content);
                    }
                },
                error: function(response) {
                    console.log(response);
                    $('.contact-result').html(response.content);
                    $('.contact-result').css('display', 'block');
                }
            })
            return false;
        });
    }

    var register = function() {
        //registration form
        var regForm = $(".registrationform");
        regForm.submit(function(e) {
            url = regForm.attr('action');
            type = regForm.attr('method');
            data = {};

            regForm.find('[name]').each(function() {
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
                success: function(response) {
                    if (response.id == "duplicateName") {
                        shakeModal();
                        $('#response').html(response.content); // show the response
                        $('.error').addClass('alert alert-danger');
                        setTimeout(() => {
                            $('#username').val("");
                            $('#regpassword').val("");
                            $('passwordconfirmation').val("");
                        }, 3000);
                    } else if (response.id == "duplicateEmail") {
                        shakeModal();
                        $('#response').html(response.content); // show the response
                        $('#response').css("color", "red");
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
                    } else if (response.id == "success") {
                        $('#response').html(response.content); // show the response
                        $('#response').css("color", "green");
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
                error: function() {
                    $('#response').text("Serious error"); // show the response
                    shakeModal();
                    $("input:submit").removeAttr("disabled");
                }
            });
            return false;
        });
    }

    var login = function() {
        //Login form
        var logForm = $(".logform");
        logForm.submit(function(e) {
            url = logForm.attr('action');
            type = logForm.attr('method');
            data = {};

            logForm.find('[name]').each(function() {
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
                success: function(response) {
                    if (response.id == "error") {
                        $('#reply').html(response.content); // show the response
                        $('#reply').css("color", "red");
                        $('.error').addClass('alert alert-danger');
                        shakeModal();
                        setTimeout(() => {
                            $('#loginemail').val("");
                            $('#loginpassword').val("");
                        }, 3000);
                    } else if (response.id == "emailerror") {
                        $('#reply').html(response.content); // show the response
                        $('#reply').css("color", "red");
                        $('.error').addClass('alert alert-danger');
                        shakeModal();
                        setTimeout(() => {
                            $('#loginemail').val("");
                            $('#loginpassword').val("");
                        }, 3000);
                    } else if (response) {
                        //console.log(response);
                        sessionStorage.setItem('id', response.id);
                        sessionStorage.setItem('username', response.username);
                        sessionStorage.setItem('email', response.email);
                        sessionStorage.setItem('firstname', response.firstname);
                        //console.log(sessionStorage.getItem('email'));
                        $('#reply').html("Login Successful"); // show the response
                        $('#reply').css("color", "green");
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
                error: function(response) {
                    //console.log(response);
                    $('#reply').text("Serious error"); // show the response
                    $('.error').addClass('alert alert-danger');
                    shakeModal();
                    //console.log("errors oo");
                    $("input:submit").removeAttr("disabled");
                }
            });
            return false;
        });
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            //console.log('User signed out.');
        });
    }

    function onLoad() {
        gapi.load('auth2', function() {
            gapi.auth2.init();
        });
    }

    function onSignIn(googleUser) {
        var url = document.getElementById('google').value;
        var profile = googleUser.getBasicProfile();
        sessionStorage.setItem('id', profile.getId());
        sessionStorage.setItem('username', profile.getName());
        sessionStorage.setItem('email', profile.getEmail());
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: {
                username: profile.getName(),
                email: profile.getEmail(),
                id: profile.getId()
            },
            success: function(response) {
                if (response.feedback == "success") {
                    //console.log('success');
                    //console.log(response.name);
                    //console.log(response.email);
                    $('#reply').html("Login Successful");
                    $('#reply').css("color", "green");
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
                } else {
                    //console.log('failure');
                }
            },
            error: function() {
                //console.log('errors upon errors');
            }
        });
        ////console.log(sessionStorage.getItem('email'));
        //console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        //console.log('Name: ' + profile.getName());
        //console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
    var setAsLoggedIn = function() {
        isLoggedIn = true;
    }
    var setAsLoggedOut = function() {
        isLoggedIn = false;
        sessionStorage.clear();
        //console.log("Cleared");
    }
    var toggleLoginLogout = function() {

        var login = document.getElementById('loginLink');
        var logout = document.getElementById('logoutLink');

        login.style.display = 'none';
        logout.style.display = 'block';
    }
    var logout = function() {
        if (sessionStorage.getItem('email') != null) {
            //console.log(sessionStorage.getItem('email'));
            toggleLoginLogout();
        } else if (sessionStorage.getItem('email') == null) {
            $('#loginLink').css('display', 'block');
            $('#logoutLink').css('display', 'none');
        }
    }

    var postComment = function() {
        //Comment form 
        var commentForm = $("#ajax-form");
        commentForm.submit(function(e) {
            url = commentForm.attr('action');
            type = commentForm.attr('method');
            data = {};

            commentForm.find('[name]').each(function() {
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
                success: function(response) {
                    if (response.feedback == "success") {
                        $('.response').text("Your comment has been sent"); // show the response
                        $('.response').css("color", "green");
                        $('.response').addClass('alert alert-success');
                        setTimeout(() => {
                            $('#name').val("");
                            $('#email').val("");
                            $('#message').val("");
                            $('.response').text("");
                            $('.response').removeClass('alert alert-success');
                            runn();
                        }, 3000);
                    }
                    $("input:submit").removeAttr("disabled");
                },
                error: function() {
                    $('.response').text("Big error"); // show the response
                    $('.response').addClass('alert alert-danger');
                    $("input:submit").removeAttr("disabled");
                }
            });
            return false;
        });
    }
    var runn = function() {
        //Comment form 
        url = '../php/load-comments.php';
        type = 'POST';
        var value = $('#post_id').val();
        //console.log("im in again");
        // Call ajax for pass data to other place
        $.ajax({
            type: type,
            url: url,
            dataType: 'JSON',
            data: { post_id: value },
            success: function(response) {
                if (response.id == "error") {
                    $('.commentnum').html("0");
                    $("#empty").html(response.content);
                } else {
                    //console.log(response);
                    $("#empty").html("");
                    var num = 0;
                    $.each(response, function() {
                        num++;
                        var newComment = $("body").find("#honey-comments > li").clone();
                        newComment.find(".honey-comment-name").append(this.name);
                        newComment.find(".honey-comment-body").append(this.body);
                        newComment.find(".honey-comment-time").append(this.created_at);
                        newComment.find(".honey-reply-icon").addClass(this.comment_id);
                        newComment.find(".honey-reply-icon").attr('id', this.comment_id);
                        $(newComment).appendTo("#honey-comments-list");
                    });
                    $('.commentnum').html(num);
                    $("input:submit").removeAttr("disabled");
                }
            },
            error: function(response) {
                $('.response').text("Big error"); // show the response
                $('.response').addClass('alert alert-danger');
                $("input:submit").removeAttr("disabled");
            }
        });
        return false;
    };
    var loadData = function() {
        //console.log("loading data");
        var value = $('#post_id').val();
        url = '../php/load-data.php';
        type = 'POST';
        // Call ajax for pass data to other place
        $.ajax({
            type: type,
            url: url,
            dataType: 'JSON',
            data: { post_id: value },
            success: function(response) {
                //console.log(response);
                $('#post_author').html(response.author);
                $('#post_date').html(response.created_at);
                //$("input:submit").removeAttr("disabled");
            },
            error: function(response) {
                $("input:submit").removeAttr("disabled");
            }
        });
        return false;
    }

    var runner = function() {
        url = '../php/load-reply.php';
        type = 'POST';
        var postid = document.getElementById('post_id').value;
        $.ajax({
            type: type,
            url: url,
            dataType: 'JSON',
            data: { post_id: postid },
            success: function(response) {
                if (response.id == "error") {
                    $(".honey-reply-body").html("");
                    //console.log('yam');
                } else {
                    //console.log(response);
                    $.each(response, function() {
                        var row = this;
                        //console.log(row);
                        var c_id = this.comment_id;
                        $('#honey-comments-list').find('.honey-reply-icon').each(function() {
                            var div_id = $(this).attr('id');
                            if (c_id === div_id) {
                                //console.log(this);
                                //console.log(div_id);
                                var newComment = $("body").find("#honey-comments .honey-reply-box").clone();
                                newComment.find(".honey-reply-name").append(row.name);
                                newComment.find(".honey-reply-body").append(row.body);
                                $('#' + div_id).closest('.honey-comment-box').find('#reply-div').css("display", "block");
                                $(newComment).appendTo($('#' + div_id).closest('.honey-comment-box').find('#reply-div'));
                            }
                        });
                    });
                }
            },
            error: function() {
                $('.response').text("Big error"); // show the response
                $('.response').addClass('alert alert-danger');
                $("input:submit").removeAttr("disabled");
                //console.log('more yams');
            }
        });

    }
    var postreply = function() {
        var id = document.getElementById('hidden-id').value;
        var postid = document.getElementById('post_id').value;
        $('#' + id).closest('.honey-comment-box').find('#reply-div').slideToggle();
        var text_value = $('#' + id).closest('.honey-comment-box').find('.reply-input').val();
        url = '../php/postreply.php';
        type = 'POST';
        //console.log("Entering ajax");
        // Call ajax for pass data to other place
        $.ajax({
            type: type,
            url: url,
            dataType: 'JSON',
            data: { post_id: postid, comment_id: id, text: text_value },
            success: function(response) {
                //console.log(response);
                $('#' + id).closest('.honey-comment-box').find('.reply-input').val("");
                if (response.id == "1") {
                    //console.log(response.content);
                    alert("Please LOG IN to Reply");
                    openLoginModal();
                } else if (response.feedback == "success") {
                    //console.log(response.feedback);
                    runner();
                }
                $("input:submit").removeAttr("disabled");
            },
            error: function(response) {
                //console.log("An error occurred");
                if (response.id == "1") {
                    //console.log(response.content);

                }
                alert("Please LOG IN to Reply");
                openLoginModal();
                //console.log(response.content);
                $("input:submit").removeAttr("disabled");
            }
        });
        return false;
    }
    var replyclicked = function(id) {
        document.getElementById('hidden-id').value = id;
        $('#' + id).closest('.honey-comment-box').find('#reply-input').slideToggle();
    }
    var showreply = function(me) {
        //console.log("show reply is clicked");
        //$(me).closest('.honey-comment-box').find('#reply-input').slideToggle();
        $(me).closest('.honey-comment-box').find('#reply-div').slideToggle();
    }
    var reaction = function(me) {
        var id = me.id;
        var postid = document.getElementById('post_id').value;
        url = '../php/reaction.php';
        type = 'POST';
        $.ajax({
            type: type,
            url: url,
            dataType: 'JSON',
            data: { post_id: postid, reaction: id },
            success: function(response) {
                //console.log(response);
                if (response.id == "success" && id == "like") {
                    $("#thumbup").html(response.likes);
                    $("#like").css("color", "blue");
                    $("#thumbdown").html(response.dislikes);
                } else if (response.id == "success" && id == "dislike") {
                    $("#thumbup").html(response.likes);
                    $("#dislike").css("color", "red");
                    $("#thumbdown").html(response.dislikes);
                }
                $("input:submit").removeAttr("disabled");
            },
            error: function(response) {
                //console.log(response);
                $("input:submit").removeAttr("disabled");
            }
        });
        if (me.id == "like") {
            //console.log("thumbs upp");
        } else if (me.id == "dislike") {
            //console.log("thumbs downnn");
        }
        //return false;
    }
    var loadreaction = function() {
        var postid = document.getElementById('post_id').value;
        url = '../php/load-reaction.php';
        type = 'POST';
        $.ajax({
            type: type,
            url: url,
            dataType: 'JSON',
            data: { post_id: postid },
            success: function(response) {
                //console.log(response);
                if (response.id == "success") {
                    $("#thumbup").html(response.likes);
                    $("#thumbdown").html(response.dislikes);
                }
                $("input:submit").removeAttr("disabled");
            },
            error: function(response) {
                //console.log(response);
                $("input:submit").removeAttr("disabled");
            }
        });
        //return false;
    }
    var share = function() {

        $('.honey-share-wrap').toggle();
    }