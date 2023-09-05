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
  let validExtensions = ["image/jpeg", "image/jpg", "image/png","image/webp","image/tiff", "image/avif"]; //adding some valid image extensions in array
  if(validExtensions.includes(fileType)){ //if user selected file is an image file
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = ()=>{
      let fileURL = fileReader.result; 
      let imgTag = `<img src="${fileURL}" alt="">`; 
      $('#uploaded_img').attr('src',fileURL);
      //  dropArea.innerHTML = imgTag; 
      var formdata= new FormData();
      formdata.append("file", file);
      const showDivButton = document.getElementById("showDiv");
        const overlay = document.getElementById("overlay");
        const centeredDiv = document.getElementById("centeredDiv")
      $.ajax({
        type: "POST",
        url: 'php/upload.php',
        data:  formdata,
        contentType: false,
        cache: false,
        processData:false,
        beforeSend : function()
        {
         // Show the overlay and centered div
         overlay.style.display = "block";
         centeredDiv.style.display = "block";
        },
        success: function(data)
        {
          console.log(data);
            data=JSON.parse(data)
            if(data.success){
              setTimeout(() => {
                container.style.display = "none";
            centeredDiv.style.display = "none";
              }, 3500);
             $('#uploaded_img').css('display', 'block');
             $('#compress-form').css('display', 'block');
             $('#file-upload-error').text("");
             dropArea.classList.remove("active");
             $('#download-link').html(data.message);
             $('#download-link').addClass('rounded border border-success');
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
    alert("Only jpg, png,webp, tiff, avif and jfif image formats allowed");
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
  }
}
  //document this code
