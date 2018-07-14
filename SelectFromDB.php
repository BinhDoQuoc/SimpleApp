<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //include this file in to the current file
        require_once 'mysql_login.php';

        $sql = "SELECT id, name FROM student";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {// if has more than 0 result
            // output data of each row by loop through result set
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </body>
</html>
