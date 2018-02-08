<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="exc3.php" method="post">
      
        <input type="text" name="number1">
    
        <input type="text" name="number2">
        
        <input type="submit" name="submit">
    </form>

	<?php  
	if (isset($_POST['submit'])) {
		devide(intval($_POST['number1']),intval($_POST['number2']));
	}
	 function devide($number1, $number2){
	 	$result = $number1 / $number2;
	 	echo "The result is $result";
	 }
	 
	?>
</body>
</html>