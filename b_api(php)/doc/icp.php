
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ICP备案查询 - 云轩API</title>
  <link rel="stylesheet" href="../css/mdui.min.css"/>
  <link rel="stylesheet" href="../css/page.css"/>
</head>
<body class="mdui-appbar-with-toolbar">
<?php $name="ICP备案查询"; include("../inc/head.php"); ?>
<div class="mdui-container-fluid docpadding">
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求地址</span></div>&nbsp;http://www.xcen.xyz/api/icp/api.php<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">请求方式</span></div>&nbsp;GET<br>
    <div class="mdui-chip mdui-color-blue"><span class="mdui-chip-title mdui-text-color-white">返回格式</span></div>&nbsp;json
<p class="docintrotext">请求参数</p>
  <div class="mdui-table-fluid">
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>请求地址</th>
        <th>请求方式</th>
        <th>参数</th>
        <th>说明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>http://www.xcen.xyz/api/1/api.php</td>
        <td>GET</td>
        <td>dm</td>
        <td>要查询ICP备案的域名,必填</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">返回参数</p>
<div class="mdui-typo">
  <pre>{"code":"_code","name":"_name","nature":"_nature","icp":"_icp","sitename":"_sitename","index":"_index","time":"_time"}</pre>
</div>
<div class="mdui-table-fluid">
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>参数</th>
        <th>类型</th>
        <th>说明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>name</td>
        <td>string</td>
        <td>主办单位名称</td>
      </tr>
      <tr>
        <td>nature</td>
        <td>string</td>
        <td>主办单位性质</td>
      </tr>
      <tr>
        <td>icp</td>
        <td>string</td>
        <td>网站备案/许可证号</td>
      </tr>
      <tr>
        <td>sitename</td>
        <td>string</td>
        <td>网站名称</td>
      </tr>
      <tr>
        <td>index</td>
        <td>string</td>
        <td>网站首页网址</td>
      </tr>
      <tr>
        <td>time</td>
        <td>string</td>
        <td>审核时间-</td>
      </tr>
      <tr>
        <td>code</td>
        <td>string</td>
        <td>正常返回200</td>
      </tr>
    </tbody>
  </table>
</div>
<p class="docintrotext">示例</p>
  <div class="mdui-typo">
    <pre>http://www.xcen.xyz/api/icp/api.php?dm=qq.com</pre>
  </div>
</div>
<div class="mdui-divider copypadding">
<?php include("../inc/copying.html"); ?>
</div>
<script src="../js/mdui.min.js"></script>
<script><?php require("../js/back.js"); ?></script>
</body>
</html>