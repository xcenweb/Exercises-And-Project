<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>蓝奏云直链获取 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="蓝奏云直链获取"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/lzy/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;json/js
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
        <td>url</td>
        <td>是</td>
        <td>必填</td>
        <td>蓝奏云文件下载链接</td>
      </tr>
      <tr>
        <td>type=down</td>
        <td>如果要直接下载</td>
        <td>string</td>
        <td>直接下载</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>直接返回txt文本链接或者下载文件，但是错误会返回<mark>{"code":"202","msg":"缺少参数"}</mark>；<mark>{"code":"300","msg":"链接错误"}</mark></pre>
</div>

 <p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/lzy/api.php?url=https://www.lanzous.com/i1fjmtg<br>http://www.xcen.xyz/api/lzy/api.php?url=https://www.lanzous.com/i1fjmtg&type=down</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>