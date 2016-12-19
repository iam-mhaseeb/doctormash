<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "doctormash";
mysql_connect("$host","$username","$password") or die ("Connection Error".mysql_error());
mysql_select_db("$dbName") or die("Database Not Found".mysql_error());
?>