<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "322peridot";
$dbName = "m307praxis";

$tableName = "auftrag";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>