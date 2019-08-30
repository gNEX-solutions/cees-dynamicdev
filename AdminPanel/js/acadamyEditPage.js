function removeImg(imgId){
    console.log(imgId);

    var imageSection = document.getElementById(imgId);
    $.ajax({
      type:'POST', 
      url: "./AdminModel/editPage.php",
      data: {img_remove: imgId, req:'imgRemove'},
      success: function(){
        alert('image has been deleted succesfully');
        $(imageSection).css("display","none");
      },
      error: function(){
        alert('image deletion failed');
      }
    });

  }


  function deletePage(pageId){
      var select = document.getElementById("inputGroupSelect04");
    //   console.log(select.value);
    $.ajax({
        type:'POST', 
        url: "./AdminModel/editPage.php",
        data: {page: select.value, req:'delete_page'},
        success: function(){
            alert('page has been deleted succesfully');
            location.reload();
        //   $(imageSection).css("display","none");
        },
        error: function(){
          alert('page deletion failed');
        }
      });
  }


    function submitChanges(){
        console.log("submit");
        var fileUpload = 1;
        var submitDb = 1;
        var pageId = document.getElementById("pageId").value;
        var title = document.getElementById("inputTitle").value;
        var summary = document.getElementById("inputSummary").value;

        var paragraphIds = [];
        document.getElementsByName('desId')
            .forEach(desId => paragraphIds.push(desId.value));

        var paragraphs =[] ;
       document.getElementsByName("inputDescription")
            .forEach(textArea => paragraphs.push(textArea.value));

        var imagesIds = [];
        document.getElementsByName("img_container")
            .forEach(divItem => imagesIds.push(divItem.id) );
    
        var imagePositions = [];
        document.getElementsByName("img_pos")
        .forEach(selectItem => imagePositions.push(selectItem.value));

        var fileLocation = document.getElementById('uploadImage').value.substring(12);  
        // var file =  document.getElementById('uploadImage').files[0];
        var formData = new FormData();
        formData.append('file', $('#uploadImage')[0].files[0]);
        // console.log(fi);
        // console.log(fileLocation);
        // console.log(paragraphIds);
        console.log(fileLocation);
        if(fileLocation == null || fileLocation == ""){
          fileUpload = 0;
        }
        else{
          var allowedImageExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.bmp)$/i;
          if(!allowedImageExtensions.test(document.getElementById('uploadImage').value)) {
  
              fileUpload = 0;
              alert('The type or extension of the file uploaded is not allowed. ' +
                  'Please upload an image file which have one of the extensions: .jpg or .jpeg or .png or .gif or .bmp.');
  
                
          }
          if(document.getElementById('uploadImage').files[0].size > 5000000){
            fileUpload = 0;
            alert('file is too large to upload, please upload a file with smaller size');
          }
  
        }
       

        if(fileUpload){
          $.ajax({
            type:'POST',
            url: "./AdminModel/imageUpload.php",
            data: formData,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache:false,
            success: function(){
              alert('image has been uploaded succesfully');
              // location.reload();
          //   $(imageSection).css("display","none");
          },
          error: function(){
            alert('image upload has failed');
            submitDb= 0 ;
          }
        });
        }
      

        
        if(submitDb){
          $.ajax({
            type:'POST', 
            url: "./AdminModel/editPage.php",
            // ProceData: false,
            data: {
                page: pageId,
                title: title,
                summary:summary,
                req:'update_table',
                paragraphIds:paragraphIds,
                paragraphs: paragraphs,
                imageIds: imagesIds,
                imagePositions: imagePositions,
                fileloc: fileLocation,
                fileupload:fileUpload
            
            },
            success: function(){
                alert('page has been edited succesfully');
                location.reload();
            //   $(imageSection).css("display","none");
            },
            error: function(){
              alert('page edition failed');
            }
          });
        }
      
      // console.log($);

        
  }