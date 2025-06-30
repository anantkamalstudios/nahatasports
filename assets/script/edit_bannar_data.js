
    var __coach_edit_sports_info_xhr = null;

    var __coach_edit_sports_info = function(form) {
        $("#edit_bannar_form #user_error").html("").hide();

        if (__coach_edit_sports_info_xhr != null) {
            __coach_edit_sports_info_xhr.abort();
            __coach_edit_sports_info_xhr = null;
        }

        var user_id             = $('#edit_bannar_form #bannar_edit_details').val();
        var banner_image        = $('#edit_bannar_form #banner_image').val();
        var venue_name          = $('#edit_bannar_form #venue_name').val();

        // if (banner_image === '') {
        //     $("#edit_bannar_form #user_error").html('Choose Sports Image.').show();
        //     return;
        // }

        if (venue_name === '') {
            $("#edit_bannar_form #user_error").html('Enter Sports Title.').show();
            return;
        }

        var form_data = new FormData(document.getElementById('edit_bannar_form'));
        form_data.append('banner_image', $('#edit_bannar_form #banner_image')[0].files[0]);

        __coach_edit_sports_info_xhr = $.ajax({
            type: "POST",
            url: baseUrl + "edit_data",
            data: form_data,
            processData: false,
            contentType: false,
            error: function () {
                console.log("Something went wrong during AJAX request.");
            },
            success: function(response) {
                if (typeof response.error !== 'undefined' && response.error !== '') {
                    console.log("Error:", response.error);
                    $("#edit_bannar_form #user_error").html(response.error).show();
                } else {
                    console.log("Success");
                    window.location.href = baseUrl + "banners";
                }
            }
        });
    };

    // jQuery Document Ready
    $(document).ready(function () {
        // Click handler
        $(document).on('click', '#edit_bannar_save', function () {
            __coach_edit_sports_info(); // Call the correct function
        });

        // Form validation
       
    });

