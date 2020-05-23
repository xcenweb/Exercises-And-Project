<?php
include '../config.php';
$package=$_GET['y'];
$con = mysqli_connect($config['host'], $config['sqluser'], $config['sqlpass'], $config['dbname']);
$result = mysqli_query($con, "SELECT * FROM xc_app_apps WHERE bao='$package'");
$row = mysqli_fetch_array($result);
$userid = $row['userid'];

$result = mysqli_query($con, "SELECT * FROM xc_app_user WHERE id='$userid'");
$row = mysqli_fetch_array($result);
$name = $row['name'];
$url='../users/'.$name.'/'.$package.'/app.apk';
mysqli_query($con, "UPDATE xc_app_apps SET down=down+1 WHERE bao='$package'");
header("Location:$url"); //跳转