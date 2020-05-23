  
<?php
header('Content-type: text/html; charset=utf-8');
$filename = 'data.dat';    
$act = $_GET['act'];
if ($act == "") {
   die('{"code":202,"msg":"参数不全"}');
}    
if(!file_exists($filename)) {
    die('{"code":404,"msg":"error"}');
}
$data = file_get_contents($filename);
$data = explode(PHP_EOL, $data);
$result = $data[array_rand($data)];
$result = str_replace(array("\r","\n","\r\n"), '', $result);
if ($act == "1") {
    echo 'document.write("'.htmlspecialchars($result).'");';
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp);
}
if ($act == "2") {
    echo '{"code":200,"msg":'.$result.'}';
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp);
}
?>