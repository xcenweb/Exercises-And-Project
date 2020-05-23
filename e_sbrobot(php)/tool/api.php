<?php
//游戏机器人
include("./config.php");
include("./inc/function.php");

$receive = $_GET['rec'];
//$somedata = $_GET['data'];

if($receive == null){
    echo act_random_empty("接收数据");
} else {

    if(comm_checkdata($receive)){
        include("./inc/comm.php");
       //一些功能
        exit;
    } else {
        include("./inc/chat.php");
       //聊天功能
        exit;
    }
}
?>