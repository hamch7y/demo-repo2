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
$result = mysqli_query($dbConnect, "SELECT * FROM ptoRequest");


echo("<p>PTO Requests</p><br>");
echo"<font size ='3'><table border = '1' cellpadding = '10'>";
echo"<tr>";
echo"<th>RequestID</th>";
echo"<th>Requested Date</th>";
echo"<th>Employee ID</th>";
echo"<th>Approved</th></tr><tr>";

while($row = mysqli_fetch_array($result)){
 echo "<td>".$info['RequestID'] . "</td> "; 
 echo "<td>".$info['DateRequested'] . " </td>";
 echo "<td>".$info['EMP_ID']. " </td>";
 echo "<td>" .$info['RequestApproval']. " </td>";
 







}

?>
</body>
</html>

