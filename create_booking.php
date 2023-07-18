<!DOCTYPE html>
<html>
<head>
    <title>Create Table with PHP</title>
</head>
<body>
<?php 
$servername="localhost:3307";
$username="root";
$password="";
$dbname="dbms";


    // Create connection
	 $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the table exists
    $tableName = "booking";
    $checkTableExists = "SHOW TABLES LIKE '$tableName'";
    $result = $conn->query($checkTableExists);

    if ($result->num_rows == 0) {
        // Table does not exist, create it
        $createTableSql = "Create Table booking(p_id varchar(10) references passenger (p_id), 
        a_id varchar(10) references agency(a_id), 
        f_id varchar(10) references flight(f_id), 
        f_date date not null)";
    
         if ($conn->query($createTableSql) === TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    } else {
        echo "Table already exists";
    }

    // Close the database connection
    $conn->close();
    ?>

    <form method="POST">
        <button type="submit" name="start">Start</button>
        <button><a href="index.html#create">Back</button></a>  
        <button><a href="http://localhost/php%20code/booking_drop.php">Drop</button></a>
    </form>

    <?php
    if (isset($_POST['start'])) {
        // Perform start button action here
        echo "Start button clicked";
    }

    if (isset($_POST['reset'])) {
        // Perform reset button action here
        echo "Reset button clicked";
    }
    ?>
</body>
</html>



