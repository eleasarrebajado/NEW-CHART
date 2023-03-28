<?php



$server = "localhost";
$user = "root";
$pass = "password";
$db = "category_db";

// this is the server connection ===================================
$conn = new mysqli($server, $user, $pass, $db);
if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);
} else {
    // echo "Connection Success";
}
// this is the server connection end ===============================

