<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
<?php    
$str=file_get_contents('https://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');    
if(preg_match("/<url>(.+?)<\/url>/is",$str,$matches)){       
  $imgurl='https://cn.bing.com'.$matches[1];  
}   
if($imgurl){        
  header('Content-Type: image/JPEG');      
  @ob_end_clean();       
  @readfile($imgurl);      
  @flush(); @ob_flush();     
  exit();   
}else{    
  echo '{"code":"404","msg":"Error"}';
}
?>