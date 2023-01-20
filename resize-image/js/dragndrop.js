//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file; //this is a global variable and we'll use it inside multiple functions

button.onclick = ()=>{
  input.click(); //if user click on the button then the input also clicked
}

input.addEventListener("change", function(){
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  dropArea.classList.add("active");
  showFile(); //calling function
});


//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragText.textContent = "Release to Upload File";
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", ()=>{
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  showFile(); //calling function
});

function showFile(){
  let fileType = file.type; //getting selected file type
  let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
  if(validExtensions.includes(fileType)){ //if user selected file is an image file
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = ()=>{
      let fileURL = fileReader.result; 
      let imgTag = `<img src="${fileURL}" alt="">`; 
      $('#uploaded_img').attr('src',fileURL);
      //  dropArea.innerHTML = imgTag; 
      var formdata= new FormData();
      formdata.append("file", file);
      $.ajax({
        type: "POST",
        url: 'php/upload.php',
        data:  formdata,
        contentType: false,
        cache: false,
        processData:false,
        beforeSend : function()
        {
         $('#submit-img').val('Sending...');
        },
        success: function(data)
        {
         console.log(data);
         console.log("here");
            data=JSON.parse(data)
            if(data.success){
             height_input.value = data.size[1];
             width_input.value = data.size[0];
             height_range.value = data.size[1];
             width_range.value = data.size[0];
             console.log(data.uploaded_file);
             $('#uploaded_img').css('display', 'block');
             //$('#uploaded_img').attr('src',data.uploaded_file);
             $('#submit-img').val('upload');
             $('#resize-form').css('display', 'block');
             $('#file-upload-error').text("");
             $("#social-media-presets").css("display","block");
             dropArea.classList.remove("active");
            }
            else{
             $('#file-upload-error').text(data.error)
             $('#submit-img').val('upload');
            }
         }
});
    }
    fileReader.readAsDataURL(file);
  }else{
    alert("This is not an Image File!");
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
  }
}
  //document this code
