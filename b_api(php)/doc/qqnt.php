<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>获取QQ昵称和头像 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="获取QQ昵称和头像"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
   <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/qqnt/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;json
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
        <td>qq</td>
        <td>是</td>
        <td>string</td>
        <td>qq号码</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回数据</p>
  <div class="mdui-typo">
    <pre>{"code":1,"imgurl":"_imgurl","name":"_name"}</pre>
  </div>
  <div class="mdui-table-fluid">
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>名称</th>
        <th>说明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>imgurl</td>
        <td>头像链接</td>
      </tr>
      <tr>
        <td>name</td>
        <td>qq名称</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
  <div class="mdui-typo">
    <pre>{"code":"_code","msg":"_msg"}<br>{"code":"_code","imgurl":"_imgurl","name":"_name"}</pre>
  </div>
   <div class="mdui-table-fluid">
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>code</th>
        <th>msg</th>
        <th>imgurl</th>
        <th>name</th>
        <th>类型</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>202</td>
        <td>参数不全</td>
        <td>/</td>
        <td>/</td>
        <td>string</td>
      </tr>
      <tr>
        <td>404</td>
        <td>Error（系统内部错误）</td>
        <td>/</td>
        <td>/</td>
        <td>string</td>
      </tr>
      <tr>
        <td>200</td>
        <td>成功</td>
        <td>(头像图片链接)</td>
        <td>(昵称)</td>
        <td>string</td>
      </tr>
    </tbody>
  </table>
</div>
 <p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/qqnt/api.php?qq=1610943675</pre>
  </div>
</div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>