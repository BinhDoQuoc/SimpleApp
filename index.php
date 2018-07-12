<?php

if (isset($_COOKIE['name']))
    echo $_COOKIE['name'];
else {
    $k = setcookie('name', 'Admin1234', 
            time() + 60 * 60 * 24, "/");
    echo 'Cookie not found. Saving cookie again!';
}
?>
  
