<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query3</title>
</head>
<body>
<button><a href="index.html#all_query">Back</button></a>  
</body>
</html>
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

$sql1 = "SELECT f_id
FROM booking
WHERE p_id = 123 AND f_date < '2020-06-11' AND f_id IN (SELECT f_id FROM flight WHERE Destination = 'Chennai')";
if ($res = mysqli_query($conn, $sql1)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>flight_id</th>"; 
        //secho "<th>p_id</th>"; 
       // echo "<th>f_date</th>"; 
        //echo "<th>flight_destination</th>";			
		
        echo "</tr>"; 
	    echo "flight numbers for the passenger with pid 123 for flights to Chennai before 06/11/2020";

        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['f_id']."</td>"; 			
			//echo "<td>".$row['epost']."</td>";
            echo "</tr>";
        } 
        echo "</table>"; 
       // mysqli_free_res($res); 
	  
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 




mysqli_close($conn); 
?> 
</body>
</html>











