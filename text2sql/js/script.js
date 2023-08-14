$("#generate-sql-form").submit(function(e) {
    e.preventDefault(); 
    console.log('here');
    grecaptcha.ready(function() {
      grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
          // Add your logic to submit to your backend server here.
          var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data:  form.serialize(),
           dataType:'json',
           beforeSend : function()
           {
            $('#generate-sql').text('Generating...');
           },
           success: function(data)
           {
            if(data.success){
              $('#generated-sql').text(data.sql);  
              $('#generate-sql').text('Generate SQL!');
              $('#sql-query').text("");  
            }
            else{
              console.log(data);
              $('#generated-sql').text(data.error);  
              $('#generate-sql').text('Try again');
            }  
            }
 });
      });
    });

    
});
$('#sql-query').keypress(function(event) {
  if (event.keyCode == 13 || event.which == 13) {
    console.log('here');
    var form = $('#generate-sql-form');
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data:  form.serialize(),
           dataType:'json',
           beforeSend : function()
           {
            $('#generate-sql').text('Generating...');
           },
           success: function(data)
           {
            if(data.success){
              $('#generated-sql').text(data.sql);  
              $('#generate-sql').text('Generate SQL!');
              $('#sql-query').text("");  
            }
            else{
              console.log(data);
              $('#generated-sql').text(data.error);  
              $('#generate-sql').text('Try again');
            }  
            }

 });
  }
});
function copy() {
  // Get the text field
  var copyText = document.getElementById("generated-sql");
  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices
   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  $('#copy-success').css('display','block'); 
   setTimeout(function(){
    $('#copy-success').css('display','none'); 
  }, 3000);
}
