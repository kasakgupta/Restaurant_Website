<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "Kasak@sql12";


$db_name = "restaurantdb";
$conn = ""; 

try {
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
} catch (mysqli_sql_exception) {
    echo "You are Not Connected <br>"; 
}

?>
