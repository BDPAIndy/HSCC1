<html>
	
	<head>
		<title> July 9th </title>
	</head>
	


	<form action= "poole_savings.php" method="post">
		
		First Name:<input type="text" name="Fname"></br>
		Last Name:<input type="text" name="Lname"></br>
		Username:<input type="text" name="Username"></br>
		Password:<input type="text" name="Password"></br>
			<input type="submit" name="submit">

<?php
		require ('dbconnect.php');
	 
	 $Fname=$_POST ['Fname'];
	 $Lname=$_POST ['Lname'];
	 $Username=$_POST ['Username'];
	 $Password=$_POST ['Password'];
	 
		
	?>
					
</body>
</html>
