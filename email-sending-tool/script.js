$(document).ready(function() {
    $('#insertForm').submit(function(e) {
      e.preventDefault();
      var formdata = new FormData(this);
      $.ajax({
        url: 'php/insert_record.php',
        type: 'POST',
        data: formdata,
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
  var message=$('#message').val();
  formdata.append('message', message)
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
        console.log(response);
        $('#sent-success').css('display','block')
        $('#send').text('SENT COMPLETE');
        setTimeout(function() {
          location.reload();
        }, 3000);
      }
    });
  });
  

  $('.delete').click(function() {
    var table=this.dataset.table
    var deleteID=$(this).attr('value');
    var formdata=new FormData();
    formdata.append('id',deleteID)
    formdata.append('table',table)
    if(confirm("Do you want to continue Deleteing!")){
    $.ajax({
      url: 'php/delete.php',
      type: 'POST',
      cache: false,
      data:formdata,
        contentType: false,
        processData: false,
      success: function(response) {
       var response=JSON.parse(response);
        alert(response.message);
        location.reload()
      }
    });
  }
  });
  
  $('.savepdf-form').submit(function(e) {
    e.preventDefault();
    var formdata=new FormData(this);
    $.ajax({
      url: 'php/update_files.php',
      type: 'POST',
      cache: false,
      data:formdata,
        contentType: false,
        processData: false,
      success: function(response) {
        var response=JSON.parse(response);
          if(response.success){
            $('#pdf-success').css('display','block')
            setTimeout(function() {
              location.reload();
            }, 2000);
          }
          else{
            $('#pdf-fail').css('display','block')
            $('#pdf-fail').html(response.message)
               setTimeout(function() {
              location.reload();
            }, 2000);
          }
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
        success: function() {
          $('#csv-success').css('display','block')
          setTimeout(function() {
            location.reload();
          }, 2000);
        }
      });
      return false;
    });
  });

  $('#clear').click(function() {
    console.log("here");
    if(confirm("Do you want to continue clearing!")){
    $.ajax({
      url: 'php/clear.php',
      type: 'GET',
      cache: false,
        contentType: false,
        processData: false,
      success: function(response) {
        alert(response);
        location.reload()
      }
    });
    }
  });

  $('#clear-all').click(function() {
    console.log("here");
    if(confirm("This will clear all your data. Click okay to continue!")){
    $.ajax({
      url: 'php/clear-all.php',
      type: 'GET',
      cache: false,
        contentType: false,
        processData: false,
      success: function(response) {
        alert(response);
        location.reload()
      }
    });
    }
  });
//
  $(document).on("click", ".update", function () {
    var name = $(this).data('name');
    $(".modal-content #name").val( name );
});
