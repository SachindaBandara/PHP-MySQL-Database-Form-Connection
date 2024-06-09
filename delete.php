<?php
include 'databaseConnection.php';

// Delete the reocrd
$sql = "DELETE FROM students WHERE id = 2;";

if (mysqli_query($conn, $sql)) {
    echo "<br>Record deleted successfully";
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
