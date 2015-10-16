<?php
$db = new mysqli('localhost', 'kibl', 'dighlanAwpyinWieco', 'kibl_ude');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>