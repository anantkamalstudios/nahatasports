$(document).ready(function () 
{
  $(document).on('click','#add_venue_submit',function()
  {
    __user_add_venues_info();
  });

  $("#venue_form").validate(
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
    __user_add_venues_info(form);
    }
  });

}); 

var __user_add_venues_info_xhr = null;
var __user_add_venues_info = function(form)
{

  $("#user_login #user_error").html("").hide();
  if( __user_add_venues_info_xhr != null )
  { 
    __user_add_venues_info_xhr.abort();
    __user_add_venues_info_xhr = null;
  }

  
  var add_venue_name              =$('#venue_form  #add_venue_name').val();
  var address                     =$('#venue_form  #address').val();
  var details                     =$('#venue_form  #details').val();
  var venue_photo                 =$('#venue_form  #venue_photo').val();
  var map                         =$('#venue_form  #map').val();
  var location                    =$('#venue_form  #location').val();
  var select_amenity_name         =$('#venue_form  #select_amenity_name').val();
  var select_sports_name          =$('#venue_form  #select_sports_name').val();
  var select_court_name           =$('#venue_form  #select_court_name').val();

  if( add_venue_name == '' )
  {
    $("#venue_form #user_error").html('Please Enter Venue Name.').show();
    return;
  }

  if( address == '' )
  {
    $("#venue_form #user_error").html('Please Enter Address.').show();
    return;
  }

  // if( details == '' )
  // {
  //   $("#venue_form #user_error").html('Please Enter Details.').show();
  //   return;
  // }

  if( venue_photo == '' )
  {
    $("#venue_form #user_error").html('Choose Venue Image.').show();
    return;
  }

  if( map == '' )
  {
    $("#venue_form #user_error").html('Please Enter Map.').show();
    return;
  }

  if( location == '' )
  {
    $("#venue_form #user_error").html('Please Enter location.').show();
    return;
  }

  if( select_amenity_name == '' )
  {
    $("#venue_form #user_error").html('Please Select Amenity Name.').show();
    return;
  }

  if( select_sports_name == '' )
  {
    $("#venue_form #user_error").html('Please Select Sports Name.').show();
    return;
  }

  if( select_court_name == '' )
  {
    $("#venue_form #user_error").html('Please Select Court Name.').show();
    return;
  }


        var form_data= new FormData(document.getElementById('venue_form'));
         form_data.append( 'venue_photo',$('#venue_form #venue_photo')[0].files[0]);

        __user_add_venues_info = $.ajax(
        {

              type: "POST"
            , url: baseUrl + "all_venues"
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
                        window.location.href = baseUrl +"venues";
                        console.log('success');
                }
            }
        }); 
} 


