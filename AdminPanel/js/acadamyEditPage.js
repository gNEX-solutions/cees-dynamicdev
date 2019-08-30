function removeImg(imgId){
    console.log(imgId);

    var imageSection = document.getElementById(imgId);
    $.ajax({
      type:'POST', 
      url: "./AdminModel/editPage.php",
      data: {img_remove: imgId, req:'imgRemove'},
      success: function(){
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
        // console.log("submit");
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
        console.log(formData);

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
        }

        })

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
            fileloc: fileLocation
        
        },
        success: function(){
            alert('page has been edited succesfully');
            // location.reload();
        //   $(imageSection).css("display","none");
        },
        error: function(){
          alert('page edition failed');
        }
      });
      console.log($);

        
  }