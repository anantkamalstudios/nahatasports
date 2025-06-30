        $(document).ready(function () {
        
        $(document).on('click','#batch_save',function(){
           __user_batch_info();
        });
        $("#add_batch_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_batch_info(form);
          }
         });
           
        }); 
    
       
        var __user_batch_info_xhr = null;
        var __user_batch_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_batch_info_xhr != null ){ 
            __user_batch_info_xhr.abort();
            __user_batch_info_xhr = null;
        }


        var batch_name          =$('#add_batch_form  #batch_name').val();
        var coaching            =$('#add_batch_form  #coaching').val();
        var age_group           =$('#add_batch_form  #age_group').val();
        var difficulty_level    =$('#add_batch_form  #difficulty_level').val();
        var batch_type          =$('#add_batch_form  #batch_type').val();
        var select_venues       =$('#add_batch_form  #select_venues').val();
        var fees                =$('#add_batch_form  #fees').val(); 
        var start_date          =$('#add_batch_form  #start_date').val();
        var end_date            =$('#add_batch_form  #end_date').val();
        var start_time          =$('#add_batch_form  #start_time').val();
        var end_time            =$('#add_batch_form  #end_time').val();
        
    if( batch_name == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter Batch Name.' ).show();
      return;
    }

    if( coaching == '' )
    {
      $("#add_batch_form #user_error").html( 'Please Select Coaching.' ).show();
      return;
    }

    if( age_group == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter Age Group.' ).show();
      return;
    }

    if( difficulty_level == '' )
    {
      $("#add_batch_form #user_error").html( 'Please Select Difficulyt Level.' ).show();
      return;
    }

    if( batch_type == '' )
    {
      $("#add_batch_form #user_error").html( 'Please Select Batch Type.' ).show();
      return;
    }

    if( select_venues == '' )
    {
      $("#add_batch_form #user_error").html( 'Please Select Venues.' ).show();
      return;
    }

    if( fees == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter Fees.' ).show();
      return;
    }

    if( start_date == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter Start Date.' ).show();
      return;
    }

    if( end_date == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter End Date.' ).show();
      return;
    }
    
    if( start_time == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter Start Time.' ).show();
      return;
    }

    if( end_time == '' )
    {
      $("#add_batch_form #user_error").html( 'Please enter End Time.' ).show();
      return;
    }

        __user_batch_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "batch_name"
            , data: {'batch_name' :batch_name,'coaching' :coaching, 'age_group' :age_group, 'difficulty_level' :difficulty_level, 'batch_type' :batch_type, 'select_venues' :select_venues, 'fees' :fees, 'start_date' :start_date, 'end_date' :end_date, 'start_time' :start_time, 'end_time' :start_time}
            , dataType: 'json'
            , error: function () {
                
            },
             
             success: function(response) {
            if (typeof response.error !== 'undefined' && response.error !== '') 
            {
              
                console.log("An error occurred: " + response.error);
            } else {
                
                console.log('amenities add successful.');
                window.location.href = baseUrl +"batch";
            }
            }
        }); 
    } 

    
     