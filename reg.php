<?php
require 'conn.php';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass =  md5(isset( $_POST['pass']) ?  $_POST['pass'] : '');
$isdoc = isset($_POST['group1']) ?  $_POST['group1'] : '';
if($isdoc=="doc"){
    $name = isset($_POST['name']) ?  $_POST['name'] : '';
    $degree = isset($_POST['degree']) ?  $_POST['degree'] : '';
    $special = isset($_POST['special']) ?  $_POST['special'] : '';
    $fee = isset($_POST['fee']) ?  $_POST['fee'] : '';
    $timefrom = isset($_POST['timefrom']) ?  $_POST['timefrom'] : '';
    $timeto = isset($_POST['timeto']) ?  $_POST['timeto'] : '';
    $phone = isset($_POST['phone']) ?  $_POST['phone'] : '';
    $adress = isset($_POST['adress']) ?  $_POST['adress'] : '';
    $city = isset($_POST['city']) ?  $_POST['city'] : '';
    $sql = "insert into login (email,password,account_check) values('$email','$pass',1)";
    mysql_query($sql) or die("Table Not Found".mysql_error());
    $last_id = mysql_insert_id();
    $sql = "insert into doctors values('$last_id','$name','$degree','$special','$fee','$timefrom','$timeto','$phone','$adress','$city')";
    mysql_query($sql) or die("Table Not Found".mysql_error());
    header('Location: login.php ');
}else if($isdoc=="pat"){
    $name = isset($_POST['pname']) ?  $_POST['pname'] : '';
    $age = isset($_POST['age']) ?  $_POST['age'] : '';
    $gender = isset($_POST['group2']) ?  $_POST['group2'] : '';
    $phone = isset($_POST['pphone']) ?  $_POST['pphone'] : '';
    $adress = isset($_POST['padress']) ?  $_POST['padress'] : '';
    $sql = "insert into login (email,password,account_check) values('$email','$pass',2)";
    mysql_query($sql) or die("Table Not Found".mysql_error());
    $last_id = mysql_insert_id();
    $sql = "insert into patients values('$last_id','$name','$age','$gender','$phone','$adress')";
    mysql_query($sql) or die("Table Not Found".mysql_error());
    header('Location: login.php ');
}
