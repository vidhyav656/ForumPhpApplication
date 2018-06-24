<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "forum";

$con = mysqli_connect($host,$user,$pwd,$db) or die("Could not connect");
mysqli_select_db($con,$db) or die("No database");

?>