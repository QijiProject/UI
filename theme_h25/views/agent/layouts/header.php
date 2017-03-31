<div class="header">
    <div class="header-top">
        <div class="layout pr">
            <div class="web-nav fr">
                <a href="#" onclick="SetHome(this,window.location);">设为首页</a><span>｜</span><a onclick="AddFavorite(window.location,document.title);" href="#">收藏本站</a><span>｜</span><a href="/help/faqs">常见问题</a><span>｜</span><a href="/home/index" class="img-lang"></a>
            </div>
            <div class="clear"></div>
            <div class="login-wrap clearfix">
                <?php if(!$this->is_agent_login()): ?>
                <div class="login-menu clearfix">
                    <input type="text" id="uid" name="uid" placeholder="代理账号" class="username-btn" />
                    <input type="password" id="jpwd" name="jpwd" placeholder="密码" class="password-btn" />
                    <a href="/agent/home/register" class="reg-btn fr">注册</a>
                    <a href="/agent/home/fetchPassword" class="forgot-password" title="忘记密码？">忘记密码？</a>
                    <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                </div>
                <?php else: ?>
                <div class="logined-nav">
                    <p class="clearfix">
                        <span class="username">欢迎！<?=$this->agent['agentname']; ?></span>
                        <span><a href="/agent/info/index">主账户：<em class="cMain"><?=Helper::money($this->agent['balance']) ?></em></a></span>
                    </p>
                    <p class="clearfix">
                        <a href="/agent/info/message" class="message">未读消息（<em id="_amessage" class="cMain"><?=$this -> getAUnreadCount();?></em>）</a>
                        <a href="/agent/info/index" class="user-center">账户中心</a>
                        <a class="logged-out" href="/agent/home/logout">安全退出</a>
                    </p>
                </div>
                <?php endif; ?>
            </div>
            <div class="logo">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="335" height="123" onmousedown="location.href='/home/index'">
                    <param name="movie" value="/static/images/header_logo.swf" />
                    <param name="wmode" value="transparent" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="/static/images/header_logo.swf" width="335" height="123">
                        <param name="wmode" value="transparent" />
                        <!--<![endif]-->
                        <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a>
                        <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object>
                <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"></a>
            </div>
        </div>
    </div>
    <div class="nav-wrap">
        <?php if(strcasecmp($this->id,'home') == 0): ?>
        <ul class="nav ag-nav clearfix">
            <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">网站首页</a></li>
            <li class="<?=$this->setActive('/agent/home/index') ?>"><a href="/agent/home/index">合营首页</a></li>
            <li class="<?=$this->setActive('/agent/home/model') ?>"><a href="/agent/home/model">合营模式</a></li>
            <li class="<?=$this->setActive('/agent/home/policy') ?>"><a href="/agent/home/policy">佣金政策</a></li>
            <li class="<?=$this->setActive('/agent/home/agreement') ?>"><a href="/agent/home/agreement">合营协议</a></li>
            <li class="<?=$this->setActive('/home/contact') ?>"><a href="/help/contact" target="_blank">联系我们</a></li>
        </ul>
        <?php else: ?>
        <ul class="nav ag-ctr-nav clearfix">
            <li class="<?=$this->setActive('/agent/info/index') ?>"><a href="/agent/info/index">账户管理</a></li>
            <li style='display:none;' class="<?=$this->setActive('/agent/info/promote') ?>"><a href="/agent/info/promote">推广工具</a></li>
            <li class="<?=$this->setActive('/agent/report/index') ?>"><a href="/agent/report/index">报表中心</a></li>
            <li class="<?=$this->setActive('/agent/fund/index') ?>"><a href="/agent/fund/index">提款申请</a></li>
            <li class="<?=$this->setActive('/agent/info/message') ?>"><a href="/agent/info/message">消息中心</a></li>
        </ul>
        <?php endif; ?>
    </div>
    <!-- 公告 -->
    <?= $this->themeLayout('notice') ?>
    <!--end 公告 -->
</div>