        $(document).ready(function () {
        
        $(document).on('click','#login_save',function(){

           __user_login_info();
        });
        $("#login_form").validate({
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
        var __user_login_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_login_info_xhr != null ){ 
            __user_login_info_xhr.abort();
            __user_login_info_xhr = null;
        }

        var email                   =$('#login_form  #email').val();
        var password                =$('#login_form  #password').val();
        
    if( email == '' )
    {
      $("#login_form #user_error").html( 'Please enter email.' ).show();
      return;
    }
    if( password == '' )
    {
      $("#login_form #user_error").html( 'Please enter the password.' ).show();
      return;
    }

        __user_login_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "login"
            , data: {'email' :email,'password' :password}
            , dataType: 'json'
            , error: function () {
            console.log('An error occurred during the AJAX request.')
        }
            , success: function( response )

            {  
                if ( typeof response.error != 'undefined' && response.error != '')
                {
                       $("#login_form #user_error").html( response.error).show();
                       $("#login_form .user_error").text('login').attr('disabled', false);
                    console.log("An error occurred: " + response.error);
                }
                else
                {    
                     console.log('Login successful.');
                     window.location.href = baseUrl +"booking_summary";
                }
            }
        }); 
    } 

    
     