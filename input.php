<?php
// Connect to uberspace Database
$db = new mysqli('localhost', 'kibl', 'dighlanAwpyinWieco', 'kibl_ude');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// create unique id like 4b3403665fea6 
$uid = uniqid();

//table
$sql = "CREATE TABLE ".$uid."
(
ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
long FLOAT(32),
lat FLOAT(32)
)";

$db->query($sql);

?>