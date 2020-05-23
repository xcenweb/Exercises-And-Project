<?php 
//header('Location:bf.php');
$c0 = intval(file_get_contents("bing/counter.dat"));
$c1 = intval(file_get_contents("icp/counter.dat"));
$c2 = intval(file_get_contents("lzy/counter.dat"));
$c3 = intval(file_get_contents("sjyl/counter.dat"));
$c4 = intval(file_get_contents("qqnt/counter.dat")); 
$c5 = intval(file_get_contents("ewm/counter.dat")); 
$c6 = intval(file_get_contents("wyyj/counter.dat")); 
$c7 = intval(file_get_contents("sjsj/counter.dat")); 
$c8 = intval(file_get_contents("bzft/counter.dat")); 
$zong = $c0+$c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>云轩API - 轻松调用API</title>
  <link rel="stylesheet" href="./css/mdui.min.css">
  <meta name="description" content="云轩api,接口,api,随机一句话,随机图片,免费接口">
  <meta name="keywords" content="云轩api,随机壁纸api,动漫壁纸api,美女壁纸api,api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" id="css-main" href="./css/oneui.css">
  <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/page.css"/>
</head>
<body id="body" class="mdui-appbar-with-toolbar mdui-theme-primary-blue mdui-theme-accent-blue mdui-loaded">
	<div class="mdui-theme-primary-blue">
		<div class="mdui-theme-accent-blue">
			<div class="mdui-container-fluid">
				<div class="mdui-row">
					<header class="mdui-appbar mdui-appbar-scroll-toolbar-hide mdui-appbar-fixed">
						<div class="mdui-toolbar mdui-color-theme-accent">
							<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons" mdui-drawer="{target: '#drawer'}">menu</i></a>
							<div class="mdui-hidden-xs-down">
								<a href="javascript:;" class="mdui-typo-headline tdn mdui-text-color-white">云轩API</a>
							</div>
							<div class="mdui-hidden-sm-up">
								<a href="javascript:;" class="mdui-typo-title tdn mdui-text-color-white">云轩API</a>
							</div>
							<div class="mdui-toolbar-spacer"></div>
							<a href="/logreg/" class="mdui-btn mdui-ripple mdui-btn-icon" title="登录/注册"><i class="mdui-icon material-icons">&#xe853;</i></a>
							<a href="/search/" class="mdui-btn mdui-ripple mdui-btn-icon" mdui-menu="{target: '#example-attr'}" title="搜索"><i class="mdui-icon material-icons">search</i></a>
						</div>
						<div class="mdui-tab mdui-color-theme-accent mdui-tab-centered" style="text-align: center" mdui-tab>
							<a href="#example1-tab01" class="mdui-ripple">API</a>
		   		    <a href="#example1-tab02" class="mdui-ripple">公告</a>
            </div>
					</header>
	<?php require("./inc/cehua.php"); ?>
	<div id="example1-tab01" class="mdui-p-a-2"> <?php include("./inc/01.php"); ?> </div>
	<div id="example1-tab02" class="mdui-p-a-2"> <?php include("./inc/02.php"); ?> </div>
	</div>
	</div>
	</div>
</div>
<?php include("./inc/copying.html"); ?>
	<?php
	//引入页脚
	require("./inc/footer.php");
	?>
  <!-- 载入js -->
  <script src="./js/snackbar.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery.mousewheel.min.js"></script>
</body>
</html>