<?php
$server = "localhost:82";
$user = "root";
$password = "tjddn0929";
$dbname = "life_style";

$conn = new mysqli($server, $user, $password, $dbname);

if($conn->connect_error) echo "<h2>접속에 실패하였습니다.</h2>";
 ?>
