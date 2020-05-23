<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>随机语录 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="随机语录"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
  <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/sjyl/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;json/js/text/gbk/utf-8
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
        <td>charset</td>
        <td>看情况</td>
        <td>string</td>
        <td>字符编码（gbk/utf-8）</td>
      </tr>
      <tr>
        <td>encode</td>
        <td>看情况</td>
        <td>string</td>
        <td>返回类型（text/js/json）</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>无其他返回参数，直接输出不同格式的数据。</pre>
</div>
<p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/sjyl/api.php?charset=utf-8<br>http://www.xcen.xyz/api/sjyl/api.php?encode=js</pre>
  </div>
  <div class="mdui-typo">
    <pre>js调用举例:&lt;script src="http://www.xcen.xyz/sjyl/api.php?encode=js">&lt;/script><br>js输出举例:&lt;div>&lt;script>binduyan()&lt;/script>&lt;/div></pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>
