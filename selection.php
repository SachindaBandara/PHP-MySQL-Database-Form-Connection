<?php
// selection querry
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        echo "<table border = 1>
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>AGE</td>
                        <td>GRADE</td>
                    </tr>
                    ";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["grade"] . "</td></tr>";
        }
    } else {
        echo "There are no values on the table...";
    }

    mysqli_close($conn);

    ?>
