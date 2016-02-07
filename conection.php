<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdatabase";

//mysql conection php

$dbc = mysqli_connect($hostname, $username, $password, $dbname) or die("could not connect database, ERROR: ".mysqli_connect_errno());

//set encodeing

mysqli_set_charset($dbc,"utf8");

echo "mysql conection success!!";
echo "<br />";

 ?>