<?php
$host="localhost";
$username="root";
$password="Vinayak@305";
$databasename="travel";

$conn = new mysqli('localhost', 'root','Vinayak@305', 'travel') or die("connection failed:".mysqli_connect_error());
mysqli_set_charset($conn, "utf8");
