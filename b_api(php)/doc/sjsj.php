<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>随机诗句 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="随机诗句"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/sjsj/api.php<br>
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
        <td>act</td>
        <td>是</td>
        <td>string</td>
        <td>输出格式选择</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回数据</p>
<div class="mdui-typo">
  <pre>{"code":"_code","msg":"_msg"}</pre>
</div>
 <div class="mdui-table-fluid">
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>code</th>
        <th>msg</th>
        <th>类型</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>202</td>
        <td>参数不全</td>
        <td>string</td>
      </tr>
      <tr>
        <td>404</td>
        <td>error（内部数据错误）</td>
        <td>string</td>
      </tr>
      <tr>
        <td>200</td>
        <td>（直接输出诗句）</td>
        <td>string</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/sjsj/api.php?act=1<br>http://www.xcen.xyz/api/sjsj/api.php?act=2</pre>
    <pre>document.write("十年树木，百年树人。——《管子·权修》");//act=1<br>{"code":202,"msg":"十年树木，百年树人。——《管子·权修》"}//act=2</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>