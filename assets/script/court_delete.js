$(document).ready(function () {
    $(document).on('click', '.delete-court-data', function () {
        var user_id = $(this).data("id");
        if (confirm('Are you sure you want to delete this Court?')) {
            $.ajax({
                type: "POST",
                url: baseUrl + "court_delete", 
                data: { user_id: user_id },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        alert('Sports deleted successfully!');
                        $('a[data-id="' + user_id + '"]').closest('tr').remove();
                    } else {
                        alert('Failed to delete the Court. Please try again.');
                    }
                },
                error: function () {
                    alert('Error occurred while trying to delete the Court.');
                }
            });
        }
    });
});
