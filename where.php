<?php
include 'databaseConnection.php';
    echo "<br>";
    echo "<br>";


    $sql = "SELECT id, name, age, grade FROM students WHERE name='Nimal';"; // add the condition

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<table border=1>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Grade</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["grade"] . "</td></tr>";
        }
    } else {
        echo "There are no values on the table...";
    }

    mysqli_close($conn);

    ?>