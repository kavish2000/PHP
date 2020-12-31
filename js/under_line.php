<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>

h2 span{
    text-decoration: underline;
    color : purple;
  }


</style>


<script>

$(document).ready(function(){

  $("button").click(function(){

    $('h2').each(function() {

var words = $(this).text().split(' ');

	$(this).empty().html(function() {

		for (i = 0; i < words.length; i++) 
    {
		
				$(this).append(' <span>' + words[i] + '</span>');
	
		}
	
	      });

      });
   
  });
});


</script>
</head>
<body>

 <?php  

echo "<h2>National  Science Day is celebrated in India every year on 28 February .
  The celebration also includes public speeches, radio, TV, science movies, science exhibitions based on themes and concepts,
 debates, quiz competitions, lectures, science model exhibitions and many more activities.</h2>";
 
?>

<button>Click Here</button>

</body>
</html>