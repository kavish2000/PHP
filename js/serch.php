<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Selector </title>

	  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
		<script type="text/javascript">
			
           $(document).ready(function(){
 
                 $("#country").select2();

          $('#b1').click(function(){
        var country = $('#country option:selected').text();
          var capital = $('#country').val();

         $('#result').html(" Capital : " + capital +  "  ------------->  " +   "    country  : " + country);

      });
    });
         


		</script>
	</head>
	<body >

		<div style="color : red;">
			
  <select id='country'>
  <option >Please select a Country</option> 
  <option value="kabul">Afghanistan</option> 
  <option value="Canberra">Australia</option> 
  <option value="Dhaka">Bangladesh</option> 
  <option value="Thimphu">Bhutan</option> 
  <option value="Brasilla">Brazil</option> 
  <option value="Ottawa">Canada</option>
  <option value="Beijing">China</option>
  <option value="Copenhagan">Denmark</option>
  <option value="Cairo">Egypt</option>
  <option value="Paris">France</option>
  <option value="Berlin">Germany</option>
  <option value="Athens">Greece</option>
  <option value="Delhi">India</option>
  <option value="Jakarta">Indonesia</option>
  <option value="Kuwait">Kuwait</option>
  <option value="Tripoli">Libya</option> 
</select>    

<br><br><br>

<button id= 'b1'  width = "200%"> Show  </button>

<br><br><br>


<?php
 echo "<div id='result'></div>";
?>

			
		</div>
	</body>
</html>