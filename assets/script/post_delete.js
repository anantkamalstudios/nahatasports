
$(document).ready(function () {
    $(document).on('click', '.post-delete', function () {
        var user_id = $(this).data("id");
        if (confirm('Are you sure you want to delete this post?')) {
            $.ajax({
                type: "POST",
                url: baseUrl + "post_delete", 
                data: { user_id: user_id },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        alert('Post deleted successfully!');
                        $('a[data-id="' + user_id + '"]').closest('tr').remove();
                    } else {
                        alert('Failed to delete the post. Please try again.');
                    }
                },
                error: function () {
                    alert('Error occurred while trying to delete the post.');
                }
            });
        }
    });
});
