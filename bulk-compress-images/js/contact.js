
$("#contact-form").submit(function(e) {
 
    e.preventDefault(); 
    var form = $(this);
    var url = form.attr('action');
  
    $.ajax({
      type: "POST",
      url: url,
      data:  form.serialize(),
      dataType:'json',
      beforeSend : function()
           {
            $('#send-email').val('Sending...');
            $('.status').text("Sending");
           },
           success: function(data)
           {
               if(data.success){
                $('#send-email').val('Sent');
                $('.status').text(" We have Received your email. We will get back to you ASAP");
               }
               else{
                $('#send-email').val('Not sent');
                $('.status').text(data.error);
               }
            }
  });
  });