<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="referrer" content="same-origin">
    <meta name="referrer" content="no-referrer">
    <?php
    header("content-type:text/html;charset=utf-8");
    require '../function.php';
    require '../config.php';
    $package = $_GET['y'];
    $con = mysqli_connect($config['host'], $config['sqluser'], $config['sqlpass'], $config['dbname']);
    $result = mysqli_query($con, "SELECT * FROM xc_app_apps WHERE bao='$package'");
    $row = mysqli_fetch_array($result);
    if (!$row) {
        echo '<div style="color: #009688;font-size: 20px;margin-top: 45px;" align="center">(´°Δ°`)抱歉！<br>此应用不存在或已被删除!</div>';
        //die('<meta http-equiv="refresh" content="2;url=http://localhost/">');
    }
    $name = $row['name'];
    $version = $row['ver'];
    $downt = $row['down'];
    $size = apksize($row['size']);
    $interval = timecha($row['gxtime']);
    $jj = $row['acc'];
    $new = $row['gxacc'];
    $uid = $row['userid'];

    $up_user = mysqli_query($con, "SELECT * FROM xc_app_user WHERE id='$uid'");
    $row1 = mysqli_fetch_array($up_user);
    $author = $row1['name'];
    $zt = $row1['status'];
    
    if ($zt == '2') {
        echo '<div style="color: red;font-size: 19px;margin-top: 45px;" align="center">(´°Δ°`)抱歉！<br>上传此应用的用户账号已被封禁，如有疑问请联系开发者!</div>';
        //die('<meta http-equiv="refresh" content="2;url=http://fasv.xyz/jc/">');
    }
    ?>
    <title><?php echo $name; ?> - <?php echo $config['webname'] ?></title>
</head>
<body>
<div class="background">
    <div class="show top">
        <img referrerpolicy="no-referrer" src="../user/<?php echo $user; ?>/<?php echo $package; ?>/icon.png" style="" class="icon"/>
        <div class="bold" style="margin-top: 5px;font-size: 16px;color: #000000;"><?php echo $name; ?></div>
        <div class="bold" style="color: #757575;margin-top: 5px;font-size: 14px;"><?php echo $version; ?></div>

        <div style="color: #757575;margin-top: 8px;font-size: 13px;"><?php echo $size; ?> / <?php echo $downt; ?>下载 /
            简体中文
        </div>
        <button class="down" onclick="window.location.href ='down.php?y=<?php echo $package; ?>'">下载APK</button>
    </div>


    <div class="show middle">
        <div class="title">应用截图</div>
        <div style="overflow-x:scroll;white-space:nowrap;margin-top: 11px;margin-left: 15px;margin-right: 10px;">

            <a href="../users/<?php echo $author; ?>/<?php echo $package; ?>/png1.png">
            	<img referrerpolicy="no-referrer" src="../users/<?php echo $user; ?>/<?php echo $package; ?>/png1.png" width="49%"height="100%"/>
            </a>
            <a href="../users/<?php echo $author; ?>/<?php echo $package; ?>/png2.png">
                <img  referrerpolicy="no-referrer"  src="../users/<?php echo $user; ?>/<?php echo $package; ?>/png2.png" class="png"/>
            </a>
            <a href="../users/<?php echo $author; ?>/<?php echo $package; ?>/png3.png">
                <img referrerpolicy="no-referrer"   src="../users/<?php echo $user; ?>/<?php echo $package; ?>/png3.png" class="png"/>
            </a>
            <a href="../users/<?php echo $author; ?>/<?php echo $package; ?>/png4.png">
                <img referrerpolicy="no-referrer" src="../users/<?php echo $user; ?>/<?php echo $package; ?>/png4.png" class="png"/>
            </a>
        </div>
        <div class="title">新版特性</div>
        <div class="content"><p style="td"><?php echo nl2br(htmlentities($new, ENT_QUOTES, "UTF-8")); ?></p>
        </div>
        <div class="title">应用简介</div>
        <div class="content"><p style="td"><?php echo nl2br(htmlentities($jj, ENT_QUOTES, "UTF-8")); ?></p>
        </div>
        <div class="title">其他信息</div>
        <div class="content">
            应用包名：<?php echo $package; ?> <br>开发者：<?php echo $author; ?><br> 更新于：<?php echo $interval; ?><br>
        </div>

    </div>
    <div style="text-align:center;font-size:12px;color:#adadad;margin:20px;"><?php echo $config['webname'] ?>提供下载服务
    </div>
    <div style="width=100%;background: #333;padding: 5px" align="center">
    <div style="font-size: 10pt;;margin-left: 10px;margin-top: 20px;">
        <!-- <a class="url" href="http://fasv.xyz/jc/" style="color: #E0E0E0">关于 · </a>
        <a class="url" href="http://fasv.xyz/jc/" style="color: #E0E0E0">声明 · </a>
        <a class="url" href="http://fasv.xyz/jc/" style="color:#E0E0E0"></a> -->
    </div>
    <div style="text-align:center;font-size:12px;color:#BDBDBD;margin:25px;margin-bottom: 35px;">Copyight © 2016-
        <?php echo date("Y") ?>
        <a style="color: #BDBDBD" href="../"><?php echo $config['webname'] ?></a>, All Rights Reserved.
    </div>
</div>

</div>

</body>

</html>
