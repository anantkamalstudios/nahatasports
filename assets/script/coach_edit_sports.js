
    var __coach_edit_sports_info_xhr = null;

    var __coach_edit_sports_info = function(form) {
        $("#edit_bannar_form #user_error").html("").hide();

        if (__coach_edit_sports_info_xhr != null) {
            __coach_edit_sports_info_xhr.abort();
            __coach_edit_sports_info_xhr = null;
        }

        var user_id             = $('#edit_bannar_form #sport_bannar_data_edit').val();
        var sports_bannar_image = $('#edit_bannar_form #sports_bannar_image').val();
        var sport_name        = $('#edit_bannar_form #sport_name').val();

        // if (sports_bannar_image === '') {
        //     $("#edit_bannar_form #user_error").html('Choose Sports Image.').show();
        //     return;
        // }

        if (sport_name === '') {
            $("#edit_bannar_form #user_error").html('Enter Sports Title.').show();
            return;
        }

        var form_data = new FormData(document.getElementById('edit_bannar_form'));
        form_data.append('sports_bannar_image', $('#edit_bannar_form #sports_bannar_image')[0].files[0]);

        __coach_edit_sports_info_xhr = $.ajax({
            type: "POST",
            url: baseUrl + "edit_bannar",
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
                    window.location.href = baseUrl + "sport_banners";
                }
            }
        });
    };

    // jQuery Document Ready
    $(document).ready(function () {
        // Click handler
        $(document).on('click', '#edit_bannar_button', function () {
            __coach_edit_sports_info(); // Call the correct function
        });

        // Form validation
       
    });

