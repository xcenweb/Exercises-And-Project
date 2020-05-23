<?php
//此处为侧滑的html代码
print <<<EOT
    <!-- 侧滑 -->
    <div class="mdui-drawer mdui-color-white mdui-appbar-inset mdui-drawer-close" id="drawer">
	<div class="mdui-card">

    <div class="mdui-card-media">
        <img src="https://www.mdui.org/docs/assets/docs/img/card.jpg"/>
    <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">欢迎~</div>
                <div class="mdui-card-primary-subtitle">welcome~</div>
            </div>
        </div>
    </div>
        <div class="mdui-card-actions"><center>
            <!--<button class="mdui-btn mdui-ripple" title="登录">登录</button>
            <button class="mdui-btn mdui-ripple" title="注册">注册</button>
            <button class="mdui-btn mdui-ripple" title="用户中心">用户中心</button>-->
        </center></div>
    </div>
	
    <!-- 主页按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
        <a href="./" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;首页</a>
    </div>
	<!-- 搜索按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">search</i>
        <a href="#" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;搜索</a>
    </div>
	<div class="mdui-divider"></div>
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple disabled">
        <i class="mdui-list-item-icon mdui-icon material-icons">android</i>
        <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading disabled">&nbsp;&nbsp;&nbsp;客户端下载</a>
    </div>
	<!-- 设置按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">settings</i>
        <a href="#" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;设置</a>
    </div>
	<!-- 关于按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">message</i>
        <a href="#" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;关于</a>
    </div>
	<!--  -->
	<!-- 侧滑结束 -->
  </div>
EOT;
?>