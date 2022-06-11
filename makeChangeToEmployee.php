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
$EMP_ID = $_POST['varname'];

$nEMP_FirstName = $_POST['eEMP_FirstName'];
$nEMP_LastName = $_POST['eEMP_LastName'];
$nEMP_SSN =  $_POST['eEMP_SSN'];
$nEMP_Permissions = $_POST['eEMP_Permissions'];

$data = mysqli_query($dbConnect , "SELECT * FROM EMP_Table where EMP_ID = '$EMP_ID'");

 while($info = mysqli_fetch_array($data )) 
 { 
	$oldEMP_FirstName = $info['EMP_Firstname'];
	$oldEMP_LastName = $info['EMP_Lastname'];
	$oldEMP_SSN = $info['EMP_SSN'];
	$oldEMP_Permissions = $info['EMP_Permissions'];
 }

	if(!$nEMP_FirstName)
	{
		$nEMP_FirstName = $oldEMP_FirstName;
	}
	if(!$nEMP_LastName)
	{
		$nEMP_LastName = $oldEMP_LastName;
	}
	if(!$nEMP_SSN)
	{
		$nEMP_SSN = $oldEMP_SSN;
	}
	if(!$nEMP_Permissions)
	{
		$nEMP_Permissions = $oldEMP_Permissions;
	}
	

$SQLstring = "UPDATE EMP_Table SET EMP_Firstname = '$nEMP_FirstName' , EMP_Lastname = '$nEMP_LastName', EMP_SSN = '$nEMP_SSN', EMP_Permissions = '$nEMP_Permissions' WHERE EMP_ID = '$EMP_ID'";
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