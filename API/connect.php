<?php
/**
 * Created by PhpStorm.
 * User: chirchir
 * Date: 3/21/18
 * Time: 12:25 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$Dbname='revenuesure';


$conn = new mysqli($servername, $username, $password,$Dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
