<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query8</title>
</head>
<body>
    <h2>(8.)flights that are scheduled on either of the dates 01/12/2020 or 02/12/2020 or both at 16:00 hours</h2>
<table border="2" cellspacing="7">
<tr>
    <th>flight_id</th>
    <th>flight_date</th>
    <th>flight_time</th>
    <th>flight_source</th>
    <th colspan="2" align="center"> flight_destination </th>
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




$sql1 = "SELECT *
FROM flight
WHERE (f_date = '2020-12-01' OR f_date = '2020-12-02') AND f_time = '16:00';";
if ($res = mysqli_query($conn, $sql1)) { 
   /* if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>flight_id</th>"; 
        echo "<th>flight_date</th>"; 
         echo "<th>flight_time</th>";
		echo "<th>flight_source</th>";	
        echo "<th>flight_destination</th>";		
		
        echo "</tr>"; 
	    echo "(8.)flights that are scheduled on either of the dates 01/12/2020 or 02/12/2020 or both at 16:00 hours";*/

        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['f_id']."</td>"; 
            echo "<td>".$row['f_date']."</td>"; 
            echo "<td>".$row['f_time']."</td>";
			echo "<td>".$row['Source']."</td>";	
             echo "<td>".$row['Destination']."</td>";			
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











