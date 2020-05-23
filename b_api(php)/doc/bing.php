<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Bing每日一图 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="Bing每日一图"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/bing/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>  
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;图片
<p class="docintrotext">请求参数</p>
此接口无需参数
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>无其他数据，直接返回图片！但是错误会返回<mark>{"code":"404","msg":"Error"}</mark></pre>
</div>
 <p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/bing/api.php</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>