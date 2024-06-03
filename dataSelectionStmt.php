<?php
include 'databaseConnection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select data from DB using prepared statements</title>
</head>

<body>

    <form method="POST">
        <input type="text" name="keyword" placeholder="Enter User Name"><br>

        <input type="submit" name="btnFind" value="Find"><br>
    </form>

    <?php

    if (isset($_POST['btnFind'])) {
        $keyword = $_POST['keyword'];

        $sql = "SELECT * FROM user WHERE name=? ;";

        // Create a prepared statement
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL Statement Failed!";
        } else {
            // initialized the parameters
            mysqli_stmt_bind_param($stmt, "s", $keyword);

            //Run the statemnet
            mysqli_stmt_execute($stmt);

            // Get the data
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {

                echo $row['id'] . "  " . $row['name'] . "  " . $row['age'] . "<br/>";
            }
        }
    }

    ?>

</body>

</html>