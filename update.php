<?php
require 'conn.php';
    $name = isset($_POST['name']) ?  $_POST['name'] : '';
    $degree = isset($_POST['degree']) ?  $_POST['degree'] : '';
    $special = isset($_POST['special']) ?  $_POST['special'] : '';
    $fee = isset($_POST['fee']) ?  $_POST['fee'] : '';
    $timefrom = isset($_POST['timefrom']) ?  $_POST['timefrom'] : '';
    $timeto = isset($_POST['timeto']) ?  $_POST['timeto'] : '';
    $phone = isset($_POST['phone']) ?  $_POST['phone'] : '';
    $adress = isset($_POST['adress']) ?  $_POST['adress'] : '';
    $city = isset($_POST['city']) ?  $_POST['city'] : '';
    $sql = "update doctors set name='$name',qualification='$degree',specialization='$special',fee='$fee',timefrom='$timefrom',timeto='$timeto',phone='$phone',location='$adress',city = '$city' ";
    mysql_query($sql) or die("Table Not Found".mysql_error());
    header('Location: home.php ');
