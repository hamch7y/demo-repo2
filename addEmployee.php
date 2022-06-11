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



$nEMP_ID = $_POST['newEmpId'];
$nEMP_FirstName = $_POST['newEmpFirstName'];
$nEMP_LastName = $_POST['newEmpLastName'];
$nEMP_SSN = $_POST['newEmpSSN'];
$nEMP_Permissions = $_POST['newEmpPermissions'];
$nEMP_Pass =  $_POST['newEmpPass'];

if(!$nEMP_ID || !$nEMP_FirstName || !$nEMP_LastName ||!$nEMP_SSN || !$nEMP_Permissions || !$nEMP_Pass)
{echo"Error: Not all information was added";exit;}


$SQLstring = "INSERT INTO EMP_Table VALUES('$nEMP_ID','$nEMP_FirstName','$nEMP_LastName','$nEMP_SSN','$nEMP_Pass','$newEmpPermissions')";
$result = $dbConnect->query($SQLstring);
if (!$result){//THis may be an error no result variable	
	echo ("<p>Error: Login information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}
	
header('Location: adminLoginScreen.html');
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';



?>



</body>
</html>