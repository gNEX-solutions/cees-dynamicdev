$('#pageType').on('change', function() {
var PageType=$('#pageType').val();

    $.ajax({
        type: "POST",
        async: false,
        url: "AdminModel/EditSectionHedder.php",
        data: {PageType:PageType,method:'searchTitle'},
        success: function(data){
            $('#proTitle')
            .find('option')
            .remove()
            .end()
           var res = $.parseJSON(data);
           var len = res.length;
           for(var i=0; i<len; i++){
          var option=  res[i].program_title
          var value=  res[i].idprogram
            $('#proTitle').append(`<option value="${value}"> 
            ${option} 
            </option>`); 
           }
          
        },
        error: function (request, status, error) {
            $("#error").append(request.responseText)
          
        }
      })
   
  });
