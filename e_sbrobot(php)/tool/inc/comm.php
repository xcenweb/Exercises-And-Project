<?php
$comm_head = sj($receive,"/"," ");
//截取命令头
echo $comm_head;
$zz = "/".$comm_head." ";
/*
    命令判断区
*/

if(if_comm($comm_head,"help")){
    $helpcomm = substr($receive,6);
    if($helpcomm == "menu"){
        echo '帮助目录';
    }
    else if($help){
        echo '';
    }
    //帮助文档
}


else if(if_comm($comm_head,"ping")){
    act_ping($comm_code);
    //ping
}


else if(if_comm($comm_head,"fanyi")){
    act_fanyi($comm_code);
    //翻译
}


else if(if_comm($comm_head,"ip")){
    echo act_ip();
    //ip地址
}