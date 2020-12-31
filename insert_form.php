<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
 <style type="text/css">
            .error{
                    color:red;
                    margin-top:5px;
                    font-size:17px;
                    font-weight:bold;
                }
        </style>


</head>
<body>
<form action="insert.php" id= "viewform" method="POST">

  
    Name: <input type="text"  id="name" name="name"  >
    
    <br><br>
    E-mail: <input type="email"  id="email" name="email"  >
    
    <br><br>

    Password : <input type="password"  id="pass" name="pass"  >
    
    <br><br>

    Phone no: <input type="tel"  id="phone" name="phone" >
    


    <br><br>
   <input type="submit" name="submit" value="submit">
   


</form>


<script>
            $(document).ready(function(){
                
                
                $("#viewform").validate({
                    rules:{
                        name: "required",
                        email: "required",
                        pass: "required",
                        phone: {minlength:10, maxlength:10,required : true}

                    },
                    
                    messages:{
                        name: "*Please Enter a Username",
                        email: "*Please Enter a Email",
                        pass: "*Please Enter a Password",
                        
                    }
                });
            });
        </script>



</body>

</html> 