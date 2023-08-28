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
$("#upload-form").submit(function(e) {
    e.preventDefault(); 
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data:  new FormData(this),
           contentType: false,
           cache: false,
           processData:false,
           beforeSend : function()
           {
            $('#submit-img').val('Sending...');
           },
           success: function(data)
           {
               data=JSON.parse(data)
               if(data.success){
                height_input.value = data.size[1];
                width_input.value = data.size[0];
                height_range.value = data.size[1];
                width_range.value = data.size[0];
                $('#uploaded_img').css('display', 'block');
                $('#uploaded_img').attr('src',data.uploaded_file);
                $('#submit-img').val('upload');
                $('#resize-form').css('display', 'block');
                $('#file-upload-error').text("");
                $("#social-media-presets").css("display","block")
               }
               else{
                $('#file-upload-error').text(data.error)
                $('#submit-img').val('upload');
               }
            }
 });
});
$("#resize-form").submit(function(e) {
    e.preventDefault(); 
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: "php/resize.php",
           data:  form.serialize(),
           dataType:'json',
           beforeSend : function()
           {
            $('#resize-submit').val('Resizing...');
           },
           success: function(data)
           {
                $('#resized_img').attr('src',data.resized_img+'?rand=' + Math.random());
                $('#resized_img').css('display', 'block');
                $('#resize-submit').val('Resize');
                $('#download-form').css('display', 'block');
                $('#output-image-info').text(`You have resized your image to a height of ${data.height}px and a width of ${data.width}px`);
            
            }
 });
});

$(document).ready(function() {
    $('.image-presets').click(function() {
      var buttonText = $(this).val();
      var res = buttonText.split("x", 2);
      width_input.value = width_range.value=res[0];
      height_input.value = height_range.value=res[1]; 
    });
    $('.fractions').click(function() {
      var fraction = $(this).val();
      width_input.value =width_range.value= Math.round(width_range.value*fraction);
      height_input.value =height_range.value= Math.round(height_range.value*fraction); 
    });
  });

$("#download-form").submit(function(e) {
  $('#resize-form').css('display', 'none');
  $('#download-form').css('display', 'none');
  $('#uploaded_img').css('display', 'none');
  $('#resized_img').css('display', 'none');
  $('#output-image-info').text('');
  $("#social-media-presets").css("display","none")
});

