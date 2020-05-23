<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>二维码生成 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="二维码生成"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
  <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/sjsj/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;图片/json
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
        <td>text</td>
        <td>是</td>
        <td>string</td>
        <td>二维码内容</td>
      </tr>
      <tr>
        <td>size</td>
        <td>是</td>
        <td>string</td>
        <td>输出的图片大小px</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>无其它参数，直接返回二维码图片！但是参数不全会返回<mark>{"code":"202","msg":"参数不全"}</mark></pre>
</div>

 <center><b>示例</b></center>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/ewm/api.php?text=云轩API&size=40px</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>