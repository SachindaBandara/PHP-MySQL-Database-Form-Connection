<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "sachinda";

// Database connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check the database connetion
if (!$conn) {
    die("Connection Failed...!" . mysqli_connect_error());
} else {
    echo "Connection Successfully..!";
}
