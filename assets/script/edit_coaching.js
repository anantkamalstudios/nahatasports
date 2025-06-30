        $(document).ready(function () {
        
        $(document).on('click','#edit_coaching_save',function(){
           __user_edit_coach_info();
        });
        $("#edit_coaching_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_edit_coach_info(form);
          }
         });
           
        }); 
    
       
        var __user_edit_coach_info_xhr = null;
        var __user_edit_coach_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_edit_coach_info_xhr != null ){ 
            __user_edit_coach_info_xhr.abort();
            __user_edit_coach_info_xhr = null;
        }

        var user_id                 =$('#edit_coaching_form  #coach_data_edit').val();
        var coaching_name            =$('#edit_coaching_form  #coaching_name').val(); 
        
    if( coaching_name == '' )
    {
      $("#edit_coaching_form #user_error").html( 'Please enter amenity Name.' ).show();
      return;
    }

    

        __user_edit_coach_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "edit_coache"
            , data: {'user_id' :user_id, 'coaching_name' :coaching_name}
            , dataType: 'json'
            , error: function () {}
            ,success: function(response) 
            {
            if(response.success != 1)
            {
              window.location.href = baseUrl +"coaching";
                console.log("error");
            } else {
                
                window.location.href = baseUrl +"coaching";
                console.log("success");
            }
            }
        }); 
    } 

    
     