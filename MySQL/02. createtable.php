<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ia_2";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect) {
    die("Connection failed:" . mysqli_connect_error());
}

$sql = "CREATE TABLE tabel1 (username VARCHAR(30), password VARCHAR(30))";

if (mysqli_query($connect, $sql)) {
    echo"Table Dibuat";
} else {
    echo"Error";
}

mysqli_close(mysql: $connect);
?>