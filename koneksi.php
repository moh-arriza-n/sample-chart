<?php
$server="localhost";
$user="root";
$password="";
$database="penilaian";
$konek=mysqli_connect($server,$user,$password);
mysqli_select_db($konek, $database);
?>