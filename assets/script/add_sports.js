$(document).ready(function () 
{
  $(document).on('click','#add_sports_save',function()
  {
    __user_add_sports_info();
  });

  $("#add_sports_form").validate(
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
    __user_add_sports_info(form);
    }
  });

}); 

var __user_add_sports_info_xhr = null;
var __user_add_sports_info = function(form)
{

  $("#user_login #user_error").html("").hide();
  if( __user_add_sports_info_xhr != null )
  { 
    __user_add_sports_info_xhr.abort();
    __user_add_sports_info_xhr = null;
  }

  var sports_image            =$('#add_sports_form  #sports_image').val();
  var sports_title            =$('#add_sports_form  #sports_title').val();

  if( sports_image == '' )
  {
    $("#add_sports_form #user_error").html('Choose Sports Image.').show();
    return;
  }

  if( sports_title == '' )
  {
    $("#add_sports_form #user_error").html('Enter Sports Title.').show();
    return;
  }


        var form_data= new FormData(document.getElementById('add_sports_form'));
         form_data.append( 'sports_image',$('#add_sports_form #sports_image')[0].files[0]);

        __user_add_sports_info = $.ajax(
        {

              type: "POST"
            , url: baseUrl + "add_sports"
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
                        window.location.href = baseUrl +"sports";
                        console.log('success');
                }
            }
        }); 
} 


