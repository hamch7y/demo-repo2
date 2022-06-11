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
	
	
$cEMP_ID = $_POST['EMP_ID'];

$data = mysqli_query($dbConnect , "SELECT * FROM EMP_Table where EMP_ID = '$cEMP_ID'"); 

echo("<p>Employee ID #$cEMP_ID</p><br>");
echo"<font size ='3'><table border = '1' cellpadding = '10'>";
echo"<tr>";
echo"<th>Employee ID</th>";
echo"<th>First Name</th>";
echo"<th>Last Name</th>";
echo"<th>Employee SSN</th>";
echo"<th>Employee Permissions</th></tr><tr>";


 while($info = mysqli_fetch_array($data )) 
 { 

 echo "<td>".$info['EMP_ID'] . "</td> "; 
 echo "<td>".$info['EMP_Firstname'] . " </td>";
 echo "<td>".$info['EMP_Lastname']. " </td>";
 echo "<td>" .$info['EMP_SSN']. " </td>";
 echo "<td>" .$info['EMP_Permissions']. " </td>";

 echo "</tr>";
 } 	
echo"Edit the boxes where fields need to be changed and anything that is staying the same don't touch<br>";
echo"<form action='makeChangeToEmployee.php' method='post'><input type ='hidden' name='varname' value= '$cEMP_ID'>";
echo"New Employee First Name: <input type='text' name='eEMP_FirstName'><br>";
echo"New Employee Last Name: <input type='text' name='eEMP_LastName'><br>";
echo"New Employee SSN: <input type='text' name='eEMP_SSN'><br>";
echo"New Employee Password: <input type='text' name='eEMP_Password'><br>";
echo"New Employee Permissions: <input type='text' name='eEMP_Permissions'><br>";
echo"<input type='submit' name='Submit Changes'></form>";









?>
</body>
</html>