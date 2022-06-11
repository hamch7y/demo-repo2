<!DOCTYPE html>
<html>
<body>
<?php

@$dbConnect = mysqli_connect('localhost', 'root', '','test');

if(mysqli_Connect_errno()) {
	echo('"<p>Error: Uable to connect to database</p>". 
	     "<p>Error code $dbConnect->connect_errono:"  $dbConnect->connnect_error</p>');
	exit;
	}
	$EMP_ID = $_POST['EMP_ID'];
	
	$SQLstring = "Delete from EMP_table where EMP_ID = '$EMP_ID'";
	$result = $dbConnect->query($SQLstring);
if (!$result){//THis may be an error no result variable	
	echo ("<p>Error: Login information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}	
header("Location: adminLoginScreen.html");
	
	
	
	
	
	
	
	
	
	
	?>
	</body>
	</html>
	