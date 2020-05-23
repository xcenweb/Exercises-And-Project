<?php
include_once("function.php");
$s=$_POST[t];
if($_POST[t]){

switch($_POST[t]){

case "login":

die(login($_POST["user"],$_POST["pass"]));

break;

case "admin":

die(admin($_POST["user"],$_POST["jb"],$_POST["tdpass"],$_POST["pass"]));

break;

case "km":

die(km($_POST["km"],$_POST["jb"],$_POST["pass"]));

break;

case "qd":

die(qd($_POST["user"]));

break;

case "ukm":

die(ukm($_POST["user"],$_POST["km"]));

break;

case "register":

die(register($_POST["user"],$_POST["name"],$_POST["pass"],$_POST["qq"]));

break;

case "userinfo":

die(userinfo($_POST["user"]));

break;

case "revisepass";

die(revisepass($_POST["user"],$_POST["pass"],$_POST["pass1"]));

break;

case "upimg":

die(upimg($_FILES["file"],$_POST["user"],$_POST["pass"]));

break;

default:

echo "未调用接口<br>";
echo $s;
}
}else{
echo "缺少参数";
}

?>
