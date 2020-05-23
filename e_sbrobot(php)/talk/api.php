<?php
//载入自定义函数
include("./inc/function.php");

$y = $_GET['y'];
$act = $_GET['a'];

$yk = file_get_contents("yk.dat");
$z = $y."_";
$i = 0;
if($act == "玩"){
}

if($act == "说"){
	$file = fopen("yk.dat", "r");
    while(!feof($file))
     {
     	$i++;
     	$yy = fgets($file). "<br />";
     	if(strpos($yy,$z)!==FALSE){
     		$data = getLine('yk.dat', $i);
              gl($data,$z,";");
    	    break;
        } 
     }
    fclose($file);
   /*while(!feof($yk)){
    if(strpos($yk1,$z)!==FALSE){
    	break;
    } `	
   }
*/
    if($data == null){
        echo "我听不懂你说的话...要不你教我说？";
    }
}
if($act == "学"){
	$data = "\n".$y."_". $_GET['da'].";";
    file_put_contents("yk.dat", $data, FILE_APPEND);
    echo "奇怪的知识增加了...";  
}
?>