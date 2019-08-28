function viewImageFunction(image_id){
  var img = document.getElementById(image_id);
// alert(img.style.backgroundImage);
    // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption

  var modalImg = document.getElementById("img01");

  modal.style.display = "block";
  modalImg.src =img.style.backgroundImage.substring(4,img.style.backgroundImage.length-2);

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
  }
}


