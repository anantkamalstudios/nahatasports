        $(document).ready(function () {
        
        $(document).on('click','#sign_up_button',function(){
           __user_sign_up_info();
        });
        $("#registration_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_sign_up_info(form);
          }
         });
           
        }); 
    
       
        var __user_sign_up_info_xhr = null;
        var __user_sign_up_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_sign_up_info_xhr != null ){ 
            __user_sign_up_info_xhr.abort();
            __user_sign_up_info_xhr = null;
        }


        var full_name          =$('#registration_form  #full_name').val(); 
        var phone              =$('#registration_form  #phone').val();
        var username           =$('#registration_form  #username').val();
        var email              =$('#registration_form  #email').val();
        var password           =$('#registration_form  #password').val();  
        var newpassword        =$('#registration_form  #newpassword').val();

        
    if( full_name == '' )
    {
      $("#registration_form #user_error").html( 'Please enter Full Name.' ).show();
      return;
    }

    if( phone == '' )
    {
      $("#registration_form #user_error").html( 'Please enter phone no.' ).show();
      return;
    }

    if( username == '' )
    {
      $("#registration_form #user_error").html( 'Please enter Usename.' ).show();
      return;
    }

    if( email == '' )
    {
      $("#registration_form #user_error").html( 'Please enter Email.' ).show();
      return;
    }

    if( password == '' )
    {
      $("#registration_form #user_error").html( 'Please enter the password.' ).show();
      return;
    }
    if(newpassword == '' )
    {
      $("#registration_form #user_error").html( 'Please enter confirmpassword.' ).show();
      return;
    }

        __user_sign_up_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "sign_up"
            , data: {'full_name' :full_name,'phone' :phone,'email' :email,'username' :username,'password' :password,'newpassword' :newpassword}
            , dataType: 'json'
            , error: function () {
                
            },
             
             success: function(response) {
            if (typeof response.error !== 'undefined' && response.error !== '') 
            {
              
                console.log("An error occurred: " + response.error);
            } else {
                
                console.log('Login successful.');
                window.location.href = "http://localhost/sports_project/user_sports";
            }
            }
        }); 
    } 

    
     