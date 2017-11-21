 $(document).ready(function () {
     $(".delete_class").click(function () {
         var del_id = $(this).attr('id');
         $.ajax({
             type: 'POST',
             url: 'delete.php',
             data: 'delete_id=' + del_id,
             success: function (data) {
                 location.reload(true);
             },
             error: function () {
                 alert('Error');
             }
         });
     });
 });
