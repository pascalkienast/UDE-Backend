<?php
//Daten zum Connecten zur MySql DB
$servername = "localhost";
$username = "kibl";
$password = "dighlanAwpyinWieco";
$dbname = "kibl_ude";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// create unique id like 4b3403665fea6 
$uid = uniqid();


// sql to create table
$sql = "CREATE TABLE ".$uid." (
box_id INT AUTO_INCREMENT PRIMARY KEY, 
	long VARCHAR(100), 
	lat VARCHAR(100)
)";
echo "<br>".$sql."<br>";


if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>