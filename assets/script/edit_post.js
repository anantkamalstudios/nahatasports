
    var __post_edit_sports_info_xhr = null;

    var __post_edit_sports_info = function(form) {
        $("#edit_post_form #user_error").html("").hide();

        if (__post_edit_sports_info_xhr != null) {
            __post_edit_sports_info_xhr.abort();
            __post_edit_sports_info_xhr = null;
        }

        var user_id             = $('#edit_post_form #post_data_edit').val();
        var post_image          = $('#edit_post_form #post_image').val();
        var date                = $('#edit_post_form #date').val();
        var published_by        = $('#edit_post_form #published_by').val();
        var content             = $('#edit_post_form #content').val();

        // if (post_image === '') {
        //     $("#edit_post_form #user_error").html('Choose Sports Image.').show();
        //     return;
        // }

        if( date == '' )
          {
            $("#edit_post_form #user_error").html('Please Select Date.').show();
            return;
          }

          if( published_by == '' )
          {
            $("#edit_post_form #user_error").html('Please Enter Published By.').show();
            return;
          }

          if( content == '' )
          {
            $("#edit_post_form #user_error").html('Please Enter Content.').show();
            return;
          }

        var form_data = new FormData(document.getElementById('edit_post_form'));
        form_data.append('post_image', $('#edit_post_form #post_image')[0].files[0]);

        __post_edit_sports_info_xhr = $.ajax({
            type: "POST",
            url: baseUrl + "edit_post",
            data: form_data,
            processData: false,
            contentType: false,
            error: function () {
                console.log("Something went wrong during AJAX request.");
            },
            success: function(response) {
                if (typeof response.error !== 'undefined' && response.error !== '') {
                    console.log("Error:", response.error);
                    $("#edit_post_form #user_error").html(response.error).show();
                } else {
                    console.log("Success");
                    window.location.href = baseUrl + "post_category";
                }
            }
        });
    };

   $(document).ready(function () {
    $(document).on('click', '#edit_post_save', function () {
        __post_edit_sports_info();  
    });
});


