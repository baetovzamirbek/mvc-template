$(function () {
  $(document).on('click', '.but', function () {
    alert('clicked');
    var id = $(this).data('id');
    $.ajax({
      type: 'POST',
      url: 'Jquery/delete',
      data: {
        id: id,
      },
      dataType: 'json',
      success: function (response) { }
    });
  });
});