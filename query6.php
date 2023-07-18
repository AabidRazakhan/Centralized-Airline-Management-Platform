<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query6</title>
</head>
<body>
<table border="2" cellspacing="7">
<tr>
    
    <th colspan="2" align="center"> Agency_name </th>
    <h2>(6.)Agency names for agencies located in the same city as the passenger with passenger id 123</h2>
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




$sql1 = "SELECT a_name
FROM agency
WHERE a_city = (SELECT p_city FROM passenger WHERE p_id = 123);";
if ($res = mysqli_query($conn, $sql1)) { 
    //if (mysqli_num_rows($res) > 0) { 
        //echo "<table>"; 
        //echo "<tr>"; 
        //echo "<th>Agency_name</th>"; 
        //echo "<th></th>"; 
       // echo "<th>flight_time</th>";
		//echo "<th>flight_source</th>";	
       // echo "<th>flight_destination</th>";		
		
        //echo "</tr>"; 
	    //echo "(6.)Agency names for agencies located in the same city as the passenger with passenger id 123";

        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['a_name']."</td>"; 
            //echo "<td>".$row['a_city']."</td>"; 
          // echo "<td>".$row['p_id']."</td>";
			//echo "<td>".$row['Source']."</td>";	
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











