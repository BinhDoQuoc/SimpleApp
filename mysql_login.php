<?php

    $servername = "sql12.freemysqlhosting.net:3306";
    $username = "sql12247586";
    $password = "GihWMC9xnE";
    $dbname = "sql12247586";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        //display a message to explain why failed to connect
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully!";
?>

