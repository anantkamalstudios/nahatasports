$(document).ready(function () 
{
  $(document).on('click','#add_bannar_button',function()
  {
    __user_add_bannars_info();
  });

  $("#add_bannar_form").validate(
  {
    ignore: "",
    onkeyup: false,
    onfocusout: false,
    rules: {
        
    },

    messages: { 

    },

    submitHandler: function (form, event) {
    event.preventDefault();
    __user_add_bannars_info(form);
    }
  });

}); 

var __user_add_bannars_info_xhr = null;
var __user_add_bannars_info = function(form)
{

  $("#user_login #user_error").html("").hide();
  if( __user_add_bannars_info_xhr != null )
  { 
    __user_add_bannars_info_xhr.abort();
    __user_add_bannars_info_xhr = null;
  }

  var sports_bannar_image            =$('#add_bannar_form  #sports_bannar_image').val();
  var sport_name              =$('#add_bannar_form  #sport_name').val();

  if( sports_bannar_image == '' )
  {
    $("#add_bannar_form #user_error").html('Choose Bannar Image.').show();
    return;
  }

  if( sport_name == '' )
  {
    $("#add_bannar_form #user_error").html('Select Venue Name.').show();
    return;
  }


        var form_data= new FormData(document.getElementById('add_bannar_form'));
         form_data.append( 'sports_bannar_image',$('#add_bannar_form #sports_bannar_image')[0].files[0]);

        __user_add_bannars_info = $.ajax(
        {

              type: "POST"
            , url: baseUrl + "sport_add_bannar"
            , data:form_data 
            , processData: false 
            , contentType: false 
            , error: function () {}
            , success: function( response )

            {  
             if ( typeof response.error != 'undefined' && response.error != '')

                {
                    console.log("error");
                }
                else{ 
                        window.location.href = baseUrl +"sport_banners";
                        console.log('success');
                }
            }
        }); 
} 


