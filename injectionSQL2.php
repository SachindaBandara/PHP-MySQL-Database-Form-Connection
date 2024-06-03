<?php
include 'databaseConnection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protect from SQL Injection 2</title>
</head>

<body>

    <form method="POST">
        <input type="text" name="uname" placeholder="Username"><br>
        <input type="text" name="uage" placeholder="Age"><br>
        <input type="submit" name="btnSubmit" value="Submit"><br>
    </form>

    <?php

    if (isset($_POST['btnSubmit'])) {
  
        $uName = $_POST['uname'];
        $uAge = $_POST['uage'];

        $sql = "INSERT INTO user(name, age) VALUES(?, ?);";

        // Create a prepared statement
         $stmt = mysqli_stmt_init($conn);

         if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL Statement Failed!";
         }else{
             // initialized the parameters
             mysqli_stmt_bind_param($stmt, "ss", $uName, $uAge);

            // Run the Statement
             mysqli_stmt_execute($stmt);
             echo "Successfully Inserted";
         }
    
    }
    
    ?>

</body>

</html>