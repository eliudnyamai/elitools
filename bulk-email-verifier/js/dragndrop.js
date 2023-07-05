$(document).ready(function(){
  $('#uploadForm').on('submit', function(e){
      e.preventDefault(); //Prevent Default action. 

      var formData = new FormData(this); //Creates new FormData object
      var $fileUpload = $("input[type='file']");

      $.ajax({
          url: 'php/upload.php', // Url to which the request is send
          type: "POST",             // Type of request to be send, called as method
          data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
          contentType: false,       // The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded" 
          cache: false,             // To unable request pages to be cached 
          processData:false,   
          beforeSend : function()
          {
           $('#convert').text('Please Wait...');
           

           //set timeout of 50 seconds in js
          }
           ,
          success: function(data){   // A function to be called if request succeeds 
            console.log(data);
                data=JSON.parse(data)
              if(data.success){
                $("#uploadForm")[0].reset();
                $("#zip-success").css('display','block')
                $("#zip").html(data.message);
                $('#convert').text('Convert');
                $("#zip-fail").css('display','none');
              }
              else{
                console.log("here")
                var message=data.error;
                $("#zip-success").css('display','none')
                $("#zip-fail").css('display','block');
                $("#zip-fail").html(data.error);
                $('#convert').text('Convert');
              }
              //dynamic value in string js
          }        
      });
  });    
});  
$("#close").click(function(){
   location.reload();
});
$("#close1").click(function(){
  location.reload();
});