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
          console.log(response);
          $('#rescipient-success').css('display','block')
          setTimeout(function() {
            location.reload();
          }, 2000);
        }
      });
      return false;
    });
  });

  $('#send').click(function() {
    $.ajax({
      url: 'php/send.php',
      type: 'GET',
      cache: false,
        contentType: false,
        processData: false,
      success: function(response) {
        $('#sent-success').css('display','block')
        setTimeout(function() {
          location.reload();
        }, 3000);
      }
    });
  });
  

  $('.delete').click(function() {
    console.log("here");
    var table=this.dataset.table
    var deleteID=$(this).attr('value');
    console.log(deleteID);
    var formdata=new FormData();
    formdata.append('id',deleteID)
    formdata.append('table',table)
    $.ajax({
      url: 'php/delete.php',
      type: 'POST',
      cache: false,
      data:formdata,
        contentType: false,
        processData: false,
      success: function(response) {
        //loop through json object using for each
        alert(response);
        location.reload()
  
      }
    });
  });
  
  $('.savepdf-form').submit(function(e) {
    e.preventDefault();
    var formdata=new FormData(this);
    console.log("here");
    $.ajax({
      url: 'php/update_file.php',
      type: 'POST',
      cache: false,
      data:formdata,
        contentType: false,
        processData: false,
      success: function(response) {
        $('#upload-success').css('display','block')
        setTimeout(function() {
          location.reload();
        }, 2000);
  
      }
    });
  });
  
  $(document).on("click", ".update", function () {
    var name = $(this).data('name');
    $(".modal-body #name").val( name );
    console.log(name)
});