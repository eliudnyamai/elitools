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
          var response=JSON.parse(response);
          if(response.success){
            $('#rescipient-success').css('display','block')
            setTimeout(function() {
              location.reload();
            }, 2000);
          }
          else{
            $('#rescipient-fail').css('display','block')
            $('#rescipient-fail').html(response.message)
               setTimeout(function() {
              location.reload();
            }, 2000);
          }
          
        }
      });
      return false;
    });
  });

  $('#send-form').submit(function(e) {
    e.preventDefault()
  formdata=new FormData(this)
    $.ajax({
      url: 'php/send.php',
      type: 'POST',
      cache: false,
        contentType: false,
        processData: false,
        data:formdata,
        beforeSend : function()
        {
         $('#send').text('SENDING PLEASE WAIT...');
        }
         ,
      success: function(response) {
        $('#sent-success').css('display','block')
        $('#send').text('SENT COMPLETE');
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
        $('#pdf-success').css('display','block')
        console.log(response)
        setTimeout(function() {
          location.reload();
        }, 2000);
      }
    });
  });

  $(document).ready(function() {
    $('#uploadcsv-form').submit(function(e) {
      e.preventDefault();
      var formdata = new FormData(this);
      $.ajax({
        url: 'php/uploadCSV.php',
        type: 'POST',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
          $('#csv-success').css('display','block')
          setTimeout(function() {
            location.reload();
          }, 2000);
        }
      });
      return false;
    });
  });
  
  $(document).on("click", ".update", function () {
    var name = $(this).data('name');
    $(".modal-content #name").val( name );
});