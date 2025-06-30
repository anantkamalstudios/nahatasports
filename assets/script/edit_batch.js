        $(document).ready(function () {
        
        $(document).on('click','#edit_batch_save',function(){
           __user_edit_batch_info();
        });
        $("#edit_batch_form").validate({
            ignore: "",
            onkeyup: false,
            onfocusout: false,
            rules: {
                          
            },

            messages: { 

            },

        submitHandler: function (form, event) {
        event.preventDefault();
        __user_edit_batch_info(form);
          }
         });
           
        }); 
    
       
        var __user_edit_batch_info_xhr = null;
        var __user_edit_batch_info = function(form){
        
        $("#user_login #user_error").html("").hide();
        if( __user_edit_batch_info_xhr != null ){ 
            __user_edit_batch_info_xhr.abort();
            __user_edit_batch_info_xhr = null;
        }

        var user_id             =$('#edit_batch_form  #batch_data_edit').val();
        var batch_name          =$('#edit_batch_form  #batch_name').val();
        var coaching            =$('#edit_batch_form  #coaching').val();
        var age_group           =$('#edit_batch_form  #age_group').val();
        var difficulty_level    =$('#edit_batch_form  #difficulty_level').val();
        var batch_type          =$('#edit_batch_form  #batch_type').val();
        var select_venues       =$('#edit_batch_form  #select_venues').val();
        var fees                =$('#edit_batch_form  #fees').val(); 
        var start_date          =$('#edit_batch_form  #start_date').val();
        var end_date            =$('#edit_batch_form  #end_date').val();
        var start_time          =$('#edit_batch_form  #start_time').val();
        var end_time            =$('#edit_batch_form  #end_time').val();
        
    if( batch_name == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter Batch Name.' ).show();
      return;
    }

    if( coaching == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please Select Coaching.' ).show();
      return;
    }

    if( age_group == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter Age Group.' ).show();
      return;
    }

    if( difficulty_level == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please Select Difficulyt Level.' ).show();
      return;
    }

    if( batch_type == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please Select Batch Type.' ).show();
      return;
    }

    if( select_venues == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please Select Venues.' ).show();
      return;
    }

    if( fees == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter Fees.' ).show();
      return;
    }

    if( start_date == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter Start Date.' ).show();
      return;
    }

    if( end_date == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter End Date.' ).show();
      return;
    }
    
    if( start_time == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter Start Time.' ).show();
      return;
    }

    if( end_time == '' )
    {
      $("#edit_batch_form #user_error").html( 'Please enter End Time.' ).show();
      return;
    }

        __user_edit_batch_info_form_xhr = $.ajax(
        {
            type: "POST"
            ,url: baseUrl + "edit_batch_name"
            , data: {'user_id' :user_id,'batch_name' :batch_name,'coaching' :coaching, 'age_group' :age_group, 'difficulty_level' :difficulty_level, 'batch_type' :batch_type, 'select_venues' :select_venues, 'fees' :fees, 'start_date' :start_date, 'end_date' :end_date, 'start_time' :start_time, 'end_time' :start_time}
            , dataType: 'json'
            , error: function () {}
            ,success: function(response) 
            {
            if(response.success != 1)
            {
              window.location.href = baseUrl +"batch";
                console.log("error");
            } else {
                
                window.location.href = baseUrl +"batch";
                console.log("success");
            }
            }
        }); 
    } 

    
     