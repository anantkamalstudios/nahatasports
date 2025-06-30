$(document).ready(function () 
{
  $(document).on('click','#add_coach_sport_submit',function()
  {
    __user_add_coach_sport_info();
  });

  $("#coach_sport_form").validate(
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
    __user_add_coach_sport_info(form);
    }
  });

}); 

var __user_add_coach_sport_info_xhr = null;
var __user_add_coach_sport_info = function(form)
{

  $("#user_login #user_error").html("").hide();
  if( __user_add_coach_sport_info_xhr != null )
  { 
    __user_add_coach_sport_info_xhr.abort();
    __user_add_coach_sport_info_xhr = null;
  }

 
  var sport_title                   =$('#coach_sport_form  #sport_title').val();
  var sport_bannar_image            =$('#coach_sport_form  #sport_bannar_image').val();
  var about_sport                   =$('#coach_sport_form  #about_sport').val();
  var benefits_sports               =$('#coach_sport_form  #benefits_sports').val();
  var future_prospects              =$('#coach_sport_form  #future_prospects').val();

 
  if( sport_title == '' )
  {
    $("#coach_sport_form #user_error").html('Please Enter Sport Title.').show();
    return;
  }

   if( sport_bannar_image == '' )
  {
    $("#coach_sport_form #user_error").html('Choose Bannar Image.').show();
    return;
  }


  if( about_sport == '' )
  {
    $("#coach_sport_form #user_error").html('Please Enter About Sport.').show();
    return;
  }

  if( benefits_sports == '' )
  {
    $("#coach_sport_form #user_error").html('Please Enter Benefits Sport.').show();
    return;
  }

  if( future_prospects == '' )
  {
    $("#coach_sport_form #user_error").html('Please Enter Future Prospects.').show();
    return;
  }


        var form_data= new FormData(document.getElementById('coach_sport_form'));
         form_data.append( 'sport_bannar_image',$('#coach_sport_form #sport_bannar_image')[0].files[0]);

        __user_add_coach_sport_info = $.ajax(
        {

              type: "POST"
            , url: baseUrl + "add_coach_sports"
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
                        window.location.href = baseUrl +"coach_sport";
                        console.log('success');
                }
            }
        }); 
} 


