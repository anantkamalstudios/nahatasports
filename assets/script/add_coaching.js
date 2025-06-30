        $(document).ready(function () {
        
        $(document).on('click','#coaching_save',function(){
           __user_coaching_info();
        });
        $("#add_coaching_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_coaching_info(form);
          }
         });
           
        }); 
    
       
        var __user_coaching_info_xhr = null;
        var __user_coaching_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_coaching_info_xhr != null ){ 
            __user_coaching_info_xhr.abort();
            __user_coaching_info_xhr = null;
        }


        var coaching_name          =$('#add_coaching_form  #coaching_name').val(); 
        
    if( coaching_name == '' )
    {
      $("#add_coaching_form #user_error").html( 'Please enter coaching Name.' ).show();
      return;
    }

    

        __user_coaching_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "add_coaching"
            , data: {'coaching_name' :coaching_name}
            , dataType: 'json'
            , error: function () {
                
            },
             
             success: function(response) {
            if (typeof response.error !== 'undefined' && response.error !== '') 
            {
              
                console.log("An error occurred: " + response.error);
            } else {
                
                console.log('amenities add successful.');
                window.location.href = baseUrl +"coaching";
            }
            }
        }); 
    } 

    
     