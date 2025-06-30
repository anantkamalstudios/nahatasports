        $(document).ready(function () {
        
        $(document).on('click','#amenity_save',function(){
           __user_amenity_info();
        });
        $("#add_amenity_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_amenity_info(form);
          }
         });
           
        }); 
    
       
        var __user_amenity_info_xhr = null;
        var __user_amenity_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_amenity_info_xhr != null ){ 
            __user_amenity_info_xhr.abort();
            __user_amenity_info_xhr = null;
        }


        var amenity_name          =$('#add_amenity_form  #amenity_name').val(); 
        
    if( amenity_name == '' )
    {
      $("#add_amenity_form #user_error").html( 'Please enter amenity Name.' ).show();
      return;
    }

    

        __user_amenity_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "ameniti"
            , data: {'amenity_name' :amenity_name}
            , dataType: 'json'
            , error: function () {
                
            },
             
             success: function(response) {
            if (typeof response.error !== 'undefined' && response.error !== '') 
            {
              
                console.log("An error occurred: " + response.error);
            } else {
                
                console.log('amenities add successful.');
                window.location.href = baseUrl +"amenities";
            }
            }
        }); 
    } 

    
     