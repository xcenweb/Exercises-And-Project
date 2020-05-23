<?php
//自定义函数
function act_random_empty($mess){
    $data = file_get_contents("./libs/lib_404.dat");
    $data = explode(PHP_EOL, $data);
    $result = $data[array_rand($data)];
    $result = str_replace(array("\r","\n","\r\n"), '', $result);
    return $result;
}

function act_ip(){
if( !empty($_SERVER['HTTP_X_FORWARD_FOR'])){
            return $_SERVER['HTTP_X_FORWARD_FOR'];
        }
        return $_SERVER['REMOTE_ADDR'];
}

function comm_checkdata($receive){
    if(strpos($receive,'/') !== false){ 
         return true;
    }else{
         return false;
    }
}


function sj($input,$start,$end){
	$subster = substr($input,strlen($start)+strpos($input, $start),(strlen($input)-strpos($input,$end))*(-1));
	return $subster;
}

function if_comm($zhi,$nr){
    if($zhi == $nr){
        return true;
    } else {
        return false;
    }
}