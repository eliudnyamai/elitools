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
           $('#verify').text('Please Wait...');
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
                $('#verify').text('Verify Emails');
                $("#zip-fail").css('display','none');
                $("#csv-display").css('display','block');
                get_csv();
               
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

function get_csv(){
  $.ajax({
    url: 'php/display_csv.php', // Url to which the request is send
    type: "GET",             // Type of request to be send, called as method
    contentType: false,       // The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded" 
    cache: false,             // To unable request pages to be cached 
    processData:false,   
    success: function(data){   // A function to be called if request succeeds 
      console.log(data);
      data=JSON.parse(data);
      const table = document.getElementById('csvTable');
      table.classList.add('table','table-striped', 'table-responsive');

for (let i = 0; i < data.length; i++) {
    const row = document.createElement('tr');
    const rowData = data[i];

    for (let j = 0; j < rowData.length; j++) {
        const cell = (i === 0) ? document.createElement('th') : document.createElement('td');
        cell.textContent = rowData[j];
        row.appendChild(cell);
    }

    table.appendChild(row);
}
    }        
  })
}


