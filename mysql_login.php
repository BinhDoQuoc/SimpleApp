<?php

    $servername = "db4free.net:3306";
    $username = "myadminbinh";
    $password = "abc@123#";
    $dbname = "mytestdb1233";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        //display a message to explain why failed to connect
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully!";
?>

