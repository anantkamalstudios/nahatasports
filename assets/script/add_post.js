$(document).ready(function () 
{
  $(document).on('click','#add_post_save',function()
  {

    __user_add_post_info();
  });

  $("#add_post_form").validate(
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
    __user_add_post_info(form);
    }
  });

}); 

var __user_add_post_info_xhr = null;
var __user_add_post_info = function(form)
{

  $("#user_login #user_error").html("").hide();
  if( __user_add_post_info_xhr != null )
  { 
    __user_add_post_info_xhr.abort();
    __user_add_post_info_xhr = null;
  }

  var post_image        =$('#add_post_form  #post_image').val();
  var date              =$('#add_post_form  #date').val();
  var published_by      =$('#add_post_form  #published_by').val();
  var content           =$('#add_post_form  #content').val();

  if( post_image == '' )
  {
    $("#add_post_form #user_error").html('Choose Post Image.').show();
    return;
  }

  if( date == '' )
  {
    $("#add_post_form #user_error").html('Please Select Date.').show();
    return;
  }

  if( published_by == '' )
  {
    $("#add_post_form #user_error").html('Please Enter Published By.').show();
    return;
  }

  if( content == '' )
  {
    $("#add_post_form #user_error").html('Please Enter Content.').show();
    return;
  }


        var form_data= new FormData(document.getElementById('add_post_form'));
         form_data.append( 'post_image',$('#add_post_form #post_image')[0].files[0]);

        __user_add_post_info = $.ajax(
        {

              type: "POST"
            , url: baseUrl + "add_blog"
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
                        window.location.href = baseUrl +"post_category";
                        console.log('success');
                }
            }
        }); 
} 


