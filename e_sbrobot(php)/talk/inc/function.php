<?php
//函数组
function gl($input,$start,$end){
	$subster = substr($input,strlen($start)+strpos($input, $start),(strlen($input)-strpos($input,$end))*(-1));
	echo $subster;
}

function getLine($file, $line, $length = 4096){
    $returnTxt = null; // 初始化返回
    $i = 1; // 行数
    $handle = @fopen($file, "r");
    if ($handle) {
        while (!feof($handle)) {
            $buffer = fgets($handle, $length);
            if($line == $i) $returnTxt = $buffer;
            $i++;
        }
        fclose($handle);
    }
    return $returnTxt;
}