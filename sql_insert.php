<?php 
//Insert data into table using php
$username="prashiksha";
$password="jainjain";
$hostname="localhost";
$database="dbname";

$sconn = mysqli_connect($hostname, $username, $password)
  or die("Connection Failed");

$dbconn = mysqli_select_db($sconn, $database)
  or die("DB not selected");

$sql = "INSERT INTO CUSTOMERS (ID, NAME, AGE)
        VALUES ('2', 'Xyz', '30')";

if ($sconn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>