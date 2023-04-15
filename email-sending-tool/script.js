$(document).ready(function() {
    $('#insertForm').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url: 'php/savetodb.php',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
          location.reload();
        }
      });
      return false;
    });
  });

  $('#send').click(function() {
    $.ajax({
      url: 'php/send.php',
      type: 'GET',
      success: function(response) {
        alert(response);
      }
    });
  });
  