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

$data = mysqli_query($dbConnect , "SELECT * FROM EMP_Table"); 
echo("<p>Active Employee Table</p><br>");
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

$dbConnect->close();

?>













</body>
</html>