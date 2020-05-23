<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>bilibili封面图 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="bilibili封面图"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
  <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/bzft/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;link
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
        <td>number</td>
        <td>是</td>
        <td>string</td>
        <td>AV号</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>无其它参数，直接返回链接！但是错误会返回<mark>没有找到相应的封面图，请换个 av 号试一下。</mark></pre>
</div>

 <center><b>示例</b></center>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/btft/api.php?number=</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>