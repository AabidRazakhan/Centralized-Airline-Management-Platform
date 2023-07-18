<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query10</title>
</head>
<body>
    <h2>(10.)Details of all male passengers who are associated with the Jet agency</h2>
<table border="2" cellspacing="7">
<tr>
    <th>passenger_id</th>
    <th>passenger_gender</th>
    <th>passenger_name</th>
    <th colspan="2" align="center"> passenger_city </th>
<button><a href="index.html#all_query">Back</button></a>  
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$conn = new mysqli("localhost:3307", "root", "", "dbms");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql1 = "SELECT p.*
FROM passenger p
INNER JOIN booking b ON p.p_id = b.p_id
INNER JOIN agency a ON b.a_id = a.a_id
WHERE p.p_gender = 'Male' AND a.a_name = 'Jet';
;";
if ($res = mysqli_query($conn, $sql1)) { 
   /* if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>passenger_id</th>"; 
        echo "<th>passenger_gender</th>"; 
        echo "<th>passenger_name</th>";
		echo "<th>passenger_city</th>";	
        //echo "<th>flight_destination</th>";			
		
        echo "</tr>"; 
        echo "(10.)Details of all male passengers who are associated with the Jet agency";*/
	

        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
           echo "<td>".$row['p_id']."</td>"; 
            echo "<td>".$row['p_gender']."</td>"; 
           echo "<td>".$row['p_name']."</td>";
			echo "<td>".$row['p_city']."</td>";	
           // echo "<td>".$row['Destination']."</td>";		
			//echo "<td>".$row['epost']."</td>";
            echo "</tr>";
        } 
        echo "</table>"; 
       // mysqli_free_res($res); 
	  
    } 
    else { 
        echo "No matching records are found."; 
    } 





mysqli_close($conn); 
?> 
</body>
</html>











