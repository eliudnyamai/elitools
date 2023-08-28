var width_range = document.getElementById("width-range");
var width_input = document.getElementById("width-input");
width_input.value = width_range.value; 
width_range.oninput = function() {
    width_input.value = this.value
}
width_input.oninput = function() {
    width_range.value = this.value
} 

var height_range = document.getElementById("height-range");
var height_input = document.getElementById("height-input");
height_input.value = height_range.value;
height_range.oninput = function() {
    height_input.value = this.value;
} 
height_input.oninput = function() {
    height_range.value = this.value;
} 

$(document).ready(function(){
  $('#upload-form').on('submit', function(e){
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
           $('#resize').val('Please Wait...');
         
          }
           ,
          success: function(data){   // A function to be called if request succeeds 
            
                data=JSON.parse(data)
              if(data.success){
                $("#upload-form")[0].reset();
                $("#zip-success").css('display','block')
                $("#zip").html(data.message);
                $('#resize').val('Resize');
                //change input value with jquery
                $("#zip-fail").css('display','none');
                  clearTimeout(timeout);
              }
              else{
                var message=data.error;
                $("#zip-success").css('display','none')
                $("#zip-fail").css('display','block');
                $("#zip-fail").html(data.error);
                $('#resize').text('Resize');
                while (id--) {
                  window.clearTimeout(id); // will do nothing if no timeout with id is present
              }
              }
              //dynamic value in string js
          }        
      });
  });    
});  
$(document).ready(function() {
  $('.image-presets').click(function(e) {
    e.preventDefault(); //Prevent Default action. 
    var buttonText = $(this).val();
    var res = buttonText.split("x", 2);
    width_input.value = width_range.value=res[0];
    height_input.value = height_range.value=res[1]; 
  });
});
$(document).ready(function() {
  $('.fractions').click(function(e) {
    e.preventDefault(); //Prevent Default action. 
 
    var formData = new FormData('upload-form'); //Creates new FormData object
    var buttonText = $(this).val();
    $.ajax({
        url: 'php/upload.php', // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded" 
        cache: false,             // To unable request pages to be cached 
        processData:false,   
        beforeSend : function()
        {
         $('#resize').val('Please Wait...');
       
        }
         ,
        success: function(data){   // A function to be called if request succeeds 
              data=JSON.parse(data)
            if(data.success){
              $("#upload-form")[0].reset();
              $("#zip-success").css('display','block')
              $("#zip").html(data.message);
              $('#resize').val('Resize');
              //change input value with jquery
              $("#zip-fail").css('display','none');
                clearTimeout(timeout);
            }
            else{
              var message=data.error;
              $("#zip-success").css('display','none')
              $("#zip-fail").css('display','block');
              $("#zip-fail").html(data.error);
              $('#resize').text('Resize');
              while (id--) {
                window.clearTimeout(id); // will do nothing if no timeout with id is present
            }
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