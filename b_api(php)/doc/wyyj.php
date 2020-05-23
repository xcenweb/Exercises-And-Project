<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>网易云音乐解析 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="网易云音乐解析"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/wyyj/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;音乐
   <p class="docintrotext">请求参数</p>
  <div class="mdui-table-fluid">
   
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>参数</th>
        <th>必填</th>
        <th>类型</th>
        <th>说明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>id</td>
        <td>是</td>
        <td>string</td>
        <td>网易云音乐ID</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>无其它数据，直接输出音乐！但是参数为空会输出<mark>{"code":202,"msg":"参数不全"}</mark></pre>
</div>
 <p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/wyyj/api.php?id=277382</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>