$(document).ready(function(){
  $('#uploadForm').on('submit', function(e){
      e.preventDefault(); //Prevent Default action. 

      var formData = new FormData(this); //Creates new FormData object
      $.ajax({
          url: 'php/upload.php', // Url to which the request is send
          type: "POST",             // Type of request to be send, called as method
          data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
          contentType: false,       // The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded" 
          cache: false,             // To unable request pages to be cached 
          processData:false,        // To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string) 
          success: function(data){   // A function to be called if request succeeds 
                data=JSON.parse(data)
              if(data.success){
                $("#uploadForm")[0].reset();
                $("#zip-success").css('display','block')
                $("#zip").html(data.message);
              }
              else{
                console.log("here")
                var message=data.error;
                $("#zip-success").css('display','none')
                $("#zip-fail").css('display','block');
                $("#zip-fail").html(data.error);
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