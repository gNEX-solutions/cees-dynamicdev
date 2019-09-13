//KDW:12:09:2019 

// fill Program Title select box 
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

  //get add append requested data to inputs
  $( "#searcTitle" ).click(function() {

    var ProgramID=$('#proTitle').val();
    $.ajax({
        type: "POST",
        async: false,
        url: "AdminModel/EditSectionHedder.php",
        data: {PageId:ProgramID,method:'searchProgram'},
        success: function(data){
           var res = $.parseJSON(data);
           var len = res.length;
           for(var i=0; i<len; i++){
           $('#Summary').val(res[i].summary);
           $('#Title').val(res[i].program_title);
           $('#ID').val(res[i].idprogram);
           $('#Image').attr('src','../'+res[i].image_url )
           
           if(res[i].status=="1"){
            $('#status-show')[0].checked = true;
           }else{
            $('#status-hide')[0].checked = true;
           }
          
         }
          
        },
        error: function (request, status, error) {
            $("#error").append(request.responseText)
          
        }
      })
   
  });



// Update Program Data
$("#Program_form").on('submit', function(e){
    
    e.preventDefault();

    output =  $('input[name=status]:checked', 
                '#Program_form').val(); 
               
   var formdata = new FormData(this);
   formdata.append('status', output);
   $.confirm({
    title: 'Update Data?',
    content: 'This dialog will automatically trigger \'cancel\' in 6 seconds if you don\'t respond.',
    autoClose: 'cancelAction|8000',
    icon: 'fa fa-warning',
    type: 'red',
    buttons: {
        deleteUser: {
            text: 'Update Data',
            action: function () {
              
                $.ajax({
                  type: "POST",
                  data:formdata ,
                  contentType: false,
                  cache: false,
                  processData:false,
                  url: "AdminModel/EditSectionHedder.php",
                  beforeSend: function(){
                      $('.submitBtn').attr("disabled","disabled");
                      $('#Program_form').css("opacity",".5");
                    },
                    success: function(msg) {
                     $('.statusMsg').html('');
                     // document.getElementById("error").innerHTML=msg;
                      if(msg.trim() == '"ok"'){
                          $('#Program_form')[0].reset();
                          $('.statusMsg').html('<span style="font-size:15px;color:#34A853">successfully Updated.</span>');
                          $.alert('successfully Updated');
                      }else{
                          $('.statusMsg').html('<span style="font-size:15px;color:#EA4335">Some problem occurred, please try again.</span>');
                          $.alert('Some problem occurred, please try again.!');
                      }
                      $('#Program_form').css("opacity","");
                      $(".submitBtn").removeAttr("disabled");
                }
                })
            }
        },
        cancelAction: function () {
            $.alert('action is canceled');
        }
    }
});

   
  });
// add Choosed image to image View
  $("#file").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
        alert('Please select a valid image file (JPEG/JPG/PNG).');
        $("#file").val('');
        return false;
    } if((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#Image')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };
    
            reader.readAsDataURL(this.files[0]);
        }

    }
  })


  //togle oder and program
  $('input[name="options"]').change( function() {

    if($(this).val()=="Order"){
      $("#Program_form").hide();
      $("#proTitlediv").hide();
      $("#searcTitle").hide();
      $("#searchOder").show();
      $("#oder").show();
      
      
    }else{
      $("#Program_form").show();
      $("#proTitlediv").show();
      $("#searcTitle").show();
      $("#searchOder").hide();
      $("#oder").hide();
    }
  
  })

 //Show Oder 
  $( "#searchOder" ).click(function() {

    var PageType=$('#pageType').val();
    $.ajax({
        type: "POST",
        async: false,
        url: "AdminModel/EditSectionHedder.php",
        data: {PageType:PageType,method:'searchTitle'},
        success: function(data){
           var res = $.parseJSON(data);
           var len = res.length;
           for(var i=0; i<len; i++){
           $('#Title').val(res[i].program_title);
           
          
         }
          
        },
        error: function (request, status, error) {
            $("#error").append(request.responseText)
          
        }
      })
   
  });

  window.onload = $(function () {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    $("#Program_form").show();
    $("#proTitlediv").show();
    $("#searcTitle").show();
    $("#searchOder").hide();
    $("#oder").hide();
  } );