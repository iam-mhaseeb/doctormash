<?php
require 'conn.php';
session_start();
$id = $_SESSION["uid"];
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
$sql = "delete from login where id = '$id' ";
mysql_query($sql) or die("Table Not Found".mysql_error());
 header('Location: index.php ');
        
