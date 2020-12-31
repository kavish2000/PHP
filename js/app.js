$(document).ready(function() {
    


    $("#link-add").validate({
        rules:{
            username: "required",
            email: "required",
            password: "required",
            phoneno: {minlength:10, maxlength:10,required : true},

        },
        
        messages:{
           username: "*Please Enter a Username",
            email: "*Please Enter a Email",
            password: "*Please Enter a Password",
            
            
        }
    });

    $.get("view.php", function(data) {
    $("#table_content").html(data);
    });

    $('#link-add').hide();
    $('#show-add').click(function() {
        $('#table_content').hide();   
    $('#link-add').slideDown(500);
    $('#show-add').hide();
    });
    
        $('#link-add').on('submit', function (e) {

        
    

     
    var dataString = $(this).serialize();
     
    // alert(dataString); return false;
 
    $.ajax({
      type: "POST",
      url: "add.php",
      data: dataString,

      success: function () {
            console.log(dataString);
    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var phoneno = $('#phoneno').val();
    if(username!="" && email!="" && password!="" && phoneno!="")
      {
        $.get("view.php", function(data) {
            $("#table_content").html(data);

            $("#table_content").show();
            
            });
      }
      }

    });
 
    e.preventDefault();
  






         });
    });