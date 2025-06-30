
$(document).ready(function () {
    $(document).on('click', '.coach-delete-bannar', function () {
        var user_id = $(this).data("id");
        if (confirm('Are you sure you want to delete this bannar?')) {
            $.ajax({
                type: "POST",
                url: baseUrl + "coach-bannar_delete", 
                data: { user_id: user_id },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        alert('bannar deleted successfully!');
                        $('a[data-id="' + user_id + '"]').closest('tr').remove();
                    } else {
                        alert('Failed to delete the bannar. Please try again.');
                    }
                },
                error: function () {
                    alert('Error occurred while trying to delete the bannar.');
                }
            });
        }
    });
});
