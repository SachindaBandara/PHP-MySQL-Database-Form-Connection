<?php
include 'databaseConnection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protect from SQL Injection 1</title>
</head>

<body>

    <form method="POST">
        <input type="text" name="uname" placeholder="Username"><br>
        <input type="text" name="uage" placeholder="Age"><br>
        <input type="submit" name="btnSubmit" value="Submit"><br>
    </form>

    <?php

    if (isset($_POST['btnSubmit'])) {
        // Escape all different characters
        // Convert all the elements to strings
        $uName = mysqli_real_escape_string($conn, $_POST['uname']); // Prevent SQL Injection
        $uAge = mysqli_real_escape_string($conn, $_POST['uage']);   // Prevent SQL Injection

        $sql = "INSERT INTO user(name, age) VALUES('$uName', '$uAge');";

        if (mysqli_query($conn, $sql)) {
            echo "Inserted Successfully";
        } else {
            echo "Error" .mysqli_connect_error();
        }
    }

    ?>

</body>

</html>