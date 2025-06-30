        $(document).ready(function () {
        
        $(document).on('click','#edit_amenity_save',function(){
           __user_edit_amenity_info();
        });
        $("#edit_amenity_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_edit_amenity_info(form);
          }
         });
           
        }); 
    
       
        var __user_edit_amenity_info_xhr = null;
        var __user_edit_amenity_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_edit_amenity_info_xhr != null ){ 
            __user_edit_amenity_info_xhr.abort();
            __user_edit_amenity_info_xhr = null;
        }

        var user_id                 =$('#edit_amenity_form  #amenity_data_edit').val();
        var amenity_name            =$('#edit_amenity_form  #amenity_name').val(); 
        
    if( amenity_name == '' )
    {
      $("#edit_amenity_form #user_error").html( 'Please enter amenity Name.' ).show();
      return;
    }

    

        __user_edit_amenity_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "edit_ameniti"
            , data: {'user_id' :user_id, 'amenity_name' :amenity_name}
            , dataType: 'json'
            , error: function () {}
            ,success: function(response) 
            {
            if(response.success != 1)
            {
              window.location.href = baseUrl +"amenities";
                console.log("error");
            } else {
                
                window.location.href = baseUrl +"amenities";
                console.log("success");
            }
            }
        }); 
    } 

    
     