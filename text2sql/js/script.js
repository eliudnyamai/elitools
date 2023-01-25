$("#generate-sql-form").submit(function(e) {
    e.preventDefault(); 
    console.log('here');
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