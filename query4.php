<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query4</title>
</head>
<body>
<table border="2" cellspacing="7">
<tr>
    
    <th colspan="2" align="center"> passenger_name </th> 
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




$sql1 ="SELECT p_name
FROM passenger
WHERE p_id IN (SELECT p_id FROM booking)";
if ($res = mysqli_query($conn, $sql1)) { 
    //if (mysqli_num_rows($res) > 0) { 
       // echo "<table>"; 
       // echo "<tr>"; 
       // echo "<th>passenger_name</th>"; 
       // echo "<th>p_id</th>"; 
        //echo "<th></th>";
		//echo "<th>flight_source</th>";	
       // echo "<th>flight_destination</th>";			
		
       // echo "</tr>"; 
	    echo "(4.)passenger names for passengers who have bookings on at least one flight";

        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['p_name']."</td>"; 
          //  echo "<td>".$row['p_id']."</td>"; 		
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











