
    var __user_edit_sports_info_xhr = null;

    // Function to handle the form submission
    var __user_edit_sports_info = function(form) {
        $("#edit_sports_form #user_error").html("").hide();

        if (__user_edit_sports_info_xhr != null) {
            __user_edit_sports_info_xhr.abort();
            __user_edit_sports_info_xhr = null;
        }

        var user_id      = $('#edit_sports_form #sport_data_edit').val();
        var sports_image = $('#edit_sports_form #sports_image').val();
        var sports_title = $('#edit_sports_form #sports_title').val();

        // if (sports_image === '') {
        //     $("#edit_sports_form #user_error").html('Choose Sports Image.').show();
        //     return;
        // }

        if (sports_title === '') {
            $("#edit_sports_form #user_error").html('Enter Sports Title.').show();
            return;
        }

        var form_data = new FormData(document.getElementById('edit_sports_form'));
        form_data.append('sports_image', $('#edit_sports_form #sports_image')[0].files[0]);

        __user_edit_sports_info_xhr = $.ajax({
            type: "POST",
            url: baseUrl + "edit_sports",
            data: form_data,
            processData: false,
            contentType: false,
            error: function () {
                console.log("Something went wrong during AJAX request.");
            },
            success: function(response) {
                if (typeof response.error !== 'undefined' && response.error !== '') {
                    console.log("Error:", response.error);
                    $("#edit_sports_form #user_error").html(response.error).show();
                } else {
                    console.log("Success");
                    window.location.href = baseUrl + "sports";
                }
            }
        });
    };

    // jQuery Document Ready
    $(document).ready(function () {
        // Click handler
        $(document).on('click', '#edit_sports_save', function () {
            __user_edit_sports_info(); // Call the correct function
        });

        // Form validation
       
    });

