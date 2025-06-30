        $(document).ready(function () {
        
        $(document).on('click','#add_court_save',function(){
           __user_court_info();
        });
        $("#add_court_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_court_info(form);
          }
         });
           
        }); 
    
       
        var __user_court_info_xhr = null;
        var __user_court_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_court_info_xhr != null ){ 
            __user_court_info_xhr.abort();
            __user_court_info_xhr = null;
        }


        var court_name          =$('#add_court_form  #court_name').val(); 
        
    if( court_name == '' )
    {
      $("#add_court_form #user_error").html( 'Please enter Court Name.' ).show();
      return;
    }

    

        __user_court_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "court"
            , data: {'court_name' :court_name}
            , dataType: 'json'
            , error: function () {
                
            },
             
             success: function(response) {
            if (typeof response.error !== 'undefined' && response.error !== '') 
            {
              
                console.log("An error occurred: " + response.error);
            } else {
                
                console.log('amenities add successful.');
                window.location.href = baseUrl +"court";
            }
            }
        }); 
    } 

    
     