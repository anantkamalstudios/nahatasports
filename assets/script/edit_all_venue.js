
    var __all_venue_edit_sports_info_xhr = null;

    var __all_venue_edit_sports_info = function(form) {
        $("#all_venue_form #user_error").html("").hide();

        if (__all_venue_edit_sports_info_xhr != null) {
            __all_venue_edit_sports_info_xhr.abort();
            __all_venue_edit_sports_info_xhr = null;
        }

        var user_id                     = $('#all_venue_form #all_venues_data_edit').val();
        var venue_photo                 = $('#all_venue_form #venue_photo').val();
        var add_venue_name              = $('#all_venue_form #add_venue_name').val();
        var address                     = $('#all_venue_form  #address').val();
        var details                     = $('#all_venue_form  #details').val();
        var map                         = $('#all_venue_form  #map').val();
        var location                    = $('#all_venue_form  #location').val();
        var select_amenity_name         = $('#all_venue_form  #select_amenity_name').val();
        var select_sports_name          = $('#all_venue_form  #select_sports_name').val();
        var select_court_name           = $('#all_venue_form  #select_court_name').val();


        // if (venue_photo === '') {
        //     $("#all_venue_form #user_error").html('Choose Sports Image.').show();
        //     return;
        // }

        if (add_venue_name === '') {
            $("#all_venue_form #user_error").html('Enter Sports Title.').show();
            return;
        }

        if( address == '' )
          {
            $("#all_venue_form #user_error").html('Please Enter Address.').show();
            return;
          }

        if( map == '' )
          {
            $("#all_venue_form #user_error").html('Please Enter Map.').show();
            return;
          }

        if( location == '' )
          {
            $("#all_venue_form #user_error").html('Please Enter location.').show();
            return;
          }

        if( select_amenity_name == '' )
          {
            $("#all_venue_form #user_error").html('Please Select Amenity Name.').show();
            return;
          }

        if( select_sports_name == '' )
          {
            $("#all_venue_form #user_error").html('Please Select Sports Name.').show();
            return;
          }

        if( select_court_name == '' )
          {
            $("#all_venue_form #user_error").html('Please Select Court Name.').show();
            return;
          }

        var form_data = new FormData(document.getElementById('all_venue_form'));
        form_data.append('venue_photo', $('#all_venue_form #venue_photo')[0].files[0]);

        __all_venue_edit_sports_info_xhr = $.ajax({
            type: "POST",
            url: baseUrl + "edit_all_venue",
            data: form_data,
            processData: false,
            contentType: false,
            error: function () {
                console.log("Something went wrong during AJAX request.");
            },
            success: function(response) {
                if (typeof response.error !== 'undefined' && response.error !== '') {
                    console.log("Error:", response.error);
                    $("#all_venue_form #user_error").html(response.error).show();
                } else {
                    console.log("Success");
                    window.location.href = baseUrl + "venues";
                }
            }
        });
    };

    // jQuery Document Ready
    $(document).ready(function () {
        // Click handler
        $(document).on('click', '#edit_venue_submit', function () {
            __all_venue_edit_sports_info(); // Call the correct function
        });

        // Form validation
       
    });

