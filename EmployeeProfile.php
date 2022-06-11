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
	
	










?>
</body>
</html>