<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Now you can execute SQL queries using the '$conn' object

// Don't forget to close the connection when you're done

?>
