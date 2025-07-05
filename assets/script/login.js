$(document).ready(function () {

<<<<<<< HEAD
    $(document).on('click', '#login_save', function () {

=======
    // Login form
    $(document).on('click', '#login_save', function () {
>>>>>>> a00c1d0 (05/07/2025)
        __user_login_info();
    });
    $("#login_form").validate({
        ignore: "",
        onkeyup: false,
        onfocusout: false,
<<<<<<< HEAD
        rules: {

        },

        messages: {

        },

        submitHandler: function (form, event) {
            event.preventDefault();
            __user_login_info(form);
=======
        rules: {},
        messages: {},
        submitHandler: function (form, event) {
            event.preventDefault();
            __user_login_info();
        }
    });

    // User login form
    $(document).on('click', '#login_save_user', function () {
        __user_login_info_user();
    });
    $("#login_form_user").validate({
        ignore: "",
        onkeyup: false,
        onfocusout: false,
        rules: {},
        messages: {},
        submitHandler: function (form, event) {
            event.preventDefault();
            __user_login_info_user();
>>>>>>> a00c1d0 (05/07/2025)
        }
    });

});

<<<<<<< HEAD

var __user_login_info_xhr = null;
var __user_login_info = function (form) {

    $("#user_login #user_error").html("").hide();
=======
var __user_login_info_xhr = null;
var __user_login_info = function () {

    $("#login_form #user_error").html("").hide();

>>>>>>> a00c1d0 (05/07/2025)
    if (__user_login_info_xhr != null) {
        __user_login_info_xhr.abort();
        __user_login_info_xhr = null;
    }

<<<<<<< HEAD
    var email = $('#login_form  #email').val();
    var password = $('#login_form  #password').val();
=======
    var email = $('#login_form #email').val();
    var password = $('#login_form #password').val();
>>>>>>> a00c1d0 (05/07/2025)

    if (email == '') {
        $("#login_form #user_error").html('Please enter email.').show();
        return;
    }
    if (password == '') {
        $("#login_form #user_error").html('Please enter the password.').show();
        return;
    }

<<<<<<< HEAD
    __user_login_info_form_xhr = $.ajax(
        {
            type: "POST"
            , url: baseUrl + "login"
            , data: { 'email': email, 'password': password }
            , dataType: 'json'
            , error: function () {
                console.log('An error occurred during the AJAX request.')
            }
            , success: function (response) {
                if (typeof response.error != 'undefined' && response.error != '') {
                    $("#login_form #user_error").html(response.error).show();
                    $("#login_form .user_error").text('login').attr('disabled', false);
                    console.log("An error occurred: " + response.error);
                }
                else {
                    console.log('Login successful.');
                    window.location.href = baseUrl + "dashboard";
                }
            }
        });
}







// Login User
$(document).ready(function () {

    $(document).on('click', '#login_save_user', function () {

        __user_login_info();
    });
    $("#login_form_user").validate({
        ignore: "",
        onkeyup: false,
        onfocusout: false,
        rules: {

        },

        messages: {

        },

        submitHandler: function (form, event) {
            event.preventDefault();
            __user_login_info(form);
        }
    });

});


var __user_login_info_xhr = null;
var __user_login_info = function (form) {

    $("#user_login #user_error").html("").hide();
    if (__user_login_info_xhr != null) {
        __user_login_info_xhr.abort();
        __user_login_info_xhr = null;
    }

    var email = $('#login_form_user  #email').val();
    var password = $('#login_form_user  #password').val();
=======
    __user_login_info_xhr = $.ajax({
        type: "POST",
        url: baseUrl + "login",
        data: { 'email': email, 'password': password },
        dataType: 'json',
        error: function () {
            console.log('An error occurred during the AJAX request.');
        },
        success: function (response) {
            if (response.error) {
                $("#login_form #user_error").html(response.error).show();
                console.log("An error occurred: " + response.error);
            } else {
                console.log('Login successful.');
                window.location.href = baseUrl + "dashboard";
            }
        }
    });
};


var __user_login_info_user_xhr = null;
var __user_login_info_user = function () {

    $("#login_form_user #user_error").html("").hide();

    if (__user_login_info_user_xhr != null) {
        __user_login_info_user_xhr.abort();
        __user_login_info_user_xhr = null;
    }

    var email = $('#login_form_user #email').val();
    var password = $('#login_form_user #password').val();
>>>>>>> a00c1d0 (05/07/2025)

    if (email == '') {
        $("#login_form_user #user_error").html('Please enter email.').show();
        return;
    }
    if (password == '') {
        $("#login_form_user #user_error").html('Please enter the password.').show();
        return;
    }

<<<<<<< HEAD
    __user_login_info_form_xhr = $.ajax(
        {
            type: "POST"
            , url: baseUrl + "user_login"
            , data: { 'email': email, 'password': password }
            , dataType: 'json'
            , error: function () {
                console.log('An error occurred during the AJAX request.')
            }
            , success: function (response) {
                if (typeof response.error != 'undefined' && response.error != '') {
                    $("#login_form_user #user_error").html(response.error).show();
                    $("#login_form_user .user_error").text('login').attr('disabled', false);
                    console.log("An error occurred: " + response.error);
                }
                else {
                    console.log('Login successful.');
                    window.location.href = baseUrl + " ";
                }
            }
        });
}


=======
    __user_login_info_user_xhr = $.ajax({
        type: "POST",
        url: baseUrl + "user_login",
        data: { 'email': email, 'password': password },
        dataType: 'json',
        error: function () {
            console.log('An error occurred during the AJAX request.');
        },
        success: function (response) {
            if (response.error) {
                $("#login_form_user #user_error").html(response.error).show();
                console.log("An error occurred: " + response.error);
            } else {
                console.log('Login successful.');
                window.location.href = baseUrl + "some_redirect_path"; // update as needed
            }
        }
    });
};
>>>>>>> a00c1d0 (05/07/2025)
