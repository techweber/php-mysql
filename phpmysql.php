<?php

$server = "localhost";
$username = "neo";
$password = "myneopassword";
$database = "catalog";

$con = mysqli_connect( $server, $username, $password, $database );

if(!$con){
    echo "Connection Failed : " . mysqli_connect_error(); exit;
}

$sql = "SELECT * FROM products";

$result = $con->query($sql);

echo "<table border=1>";
foreach($result as $row){
    echo "<tr><td>" . $row['id'] . '</td><td>' . $row['title'] . '</td></tr>';
}
echo "</table>";