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
$EMP_Password = $_POST['EMP_Pass'];

$result = mysqli_query($dbConnect, "SELECT EMP_Pass FROM EMP_Table where EMP_ID = '$EMP_ID'");
while($row = mysqli_fetch_array($result)){
	if($row['EMP_Pass'] == $EMP_Password)
	{
		$result2 = mysqli_query($dbConnect, "SELECT EMP_Permissions FROM EMP_Table where EMP_ID = '$EMP_ID'");
		
		while($row2 = mysqli_fetch_array($result2))
		{
			if($row2['EMP_Permissions'] == 1)
			{
				
				header('Location: EmployeeLoginScreen.html');
				
			}				
			elseif($row2['EMP_Permissions']== 2)
			{
				//Go To Manager page
			}
			elseif($row2['EMP_Permissions'] == 3)
			{
				header('Location: adminLoginScreen.html');
			}	
			
		}
	
	
	
	}
	else{ echo'Error Invalid Password';
			header('Location: home.html');
	}
	
}
$dbConnect->close();
?>

</body>


</html>