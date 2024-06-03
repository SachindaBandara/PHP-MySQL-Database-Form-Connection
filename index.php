<?php
include 'databaseConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insertion</title>
</head>

<body>
    <?php

    $sql = "INSERT INTO user(name, age) VALUES ('Jagath', 20);";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted successfully";
    }

    mysqli_close($conn);
    ?>
</body>

</html>