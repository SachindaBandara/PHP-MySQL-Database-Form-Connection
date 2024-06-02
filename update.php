<?php
include 'databaseConnection.php';


$sql = "UPDATE students SET name='Sunil' WHERE id = 3; ";

if(mysqli_query($conn, $sql)){
    echo "<br>Record successfully updated";
}else{
    echo "Error" .mysqli_error($conn);
}

mysqli_close($conn);

?>