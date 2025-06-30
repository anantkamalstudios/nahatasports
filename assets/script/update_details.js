$(document).ready(function () 
{
  $(document).on('click','#update_details_save',function()
  {
    __user_profile_info();
  });

}); 

var __user_profile_info_xhr = null;
var __user_profile_info = function(form)
{

  $("#user_login #user_error").html("").hide();
  if( __user_profile_info_xhr != null )
  { 
    __user_profile_info_xhr.abort();
    __user_profile_info_xhr = null;
  }

  var user_id                 =$('#profile_details_form  #profile_details_edit').val();
  var full_name               =$('#profile_details_form  #full_name').val(); 
  var email                   =$('#profile_details_form  #email').val();
  var username                =$('#profile_details_form  #username').val();
  var phone                   =$('#profile_details_form  #phone').val();

  if( full_name == '' )
  {
    $("#profile_details_form #user_error").html( 'Please enter Full Name.' ).show();
    return;
  }

  if( email == '' )
  {
    $("#profile_details_form #user_error").html( 'Please enter email.' ).show();
    return;
  }
 
  if( username == '' )
  {
    $("#profile_details_form #user_error").html( 'Please enter Username.' ).show();
    return;
  }
  
  if( phone == '' )
  {
    $("#profile_details_form #user_error").html( 'Please enter Phone.' ).show();
    return;
  }

 

  __user_profile_info_form_xhr = $.ajax(
  {
    type: "POST"
    ,url: baseUrl + "profile_details"
    , data: {'user_id' :user_id,'full_name' :full_name,'email' :email,'username': username,'phone' :phone}
    , dataType: 'json'
    , error: function () {
    },

    success: function(response) 
    {           
      if (typeof response.error !== 'undefined' && response.error !== '') 
      {
        console.log("An error occurred: " + response.error);
      } 
      else 
      {
        console.log('Update successful.');
        window.location.href = baseUrl +"dashboard";
      }
    }
  }); 
} 


