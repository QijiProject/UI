<div class="header">
	<div class="layout1440">
    	<div class="header-logo fl pr">
        	<!--<a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?> 首页"><img src="/static/images/header_logo.png"/></a>-->
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="75" onmousedown="location.href='/home/index'">
                <param name="movie" value="/static/images/header/header_logo.swf" />
                <param name="wmode" value="transparent" />
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="/static/images/header/header_logo.swf" width="300" height="75">
                    <param name="wmode" value="transparent" />
                    <!--<![endif]-->
                    <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                    </a>
                    <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
            <a href="/home/index" title="" class="home-link"></a>
        </div>	
        <div class="header-top fr">
        	<div class="login-wrap clearfix">
                <?php if(!$this->is_agent_login()): ?>
                <div class="login-menu fr">
                    <input type="text" id="uid" name="uid" placeholder="代理账号" />
                    <input type="password" id="jpwd" name="jpwd" placeholder="密码" />
                    <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                    <a href="/agent/home/register" class="reg-btn">注册</a>
                    <a href="/agent/home/fetchPassword" class="forgot-password" title="忘记密码">忘记密码</a>
                </div>
                <?php else: ?>
                <div class="logined-nav fr">
                    <span class="username">欢迎！<?=$this->agent['agentname']; ?></span>
                    <span class="user-balance">主账户：<em class="cMain"><?=Helper::money($this->agent['balance']) ?></em></span>
                    <a href="/agent/info/message" class="message">消息（<em id="_amessage" class="cMain"><?=$this -> getAUnreadCount();?></em>）</a>
                    <a href="/agent/info/index" class="user-center">账户中心</a>
                    <a class="logged-out" href="/agent/home/logout">安全退出</a>
                </div>
                <?php endif; ?>
            </div>
            <?php if(strcasecmp($this->id,'home') == 0): ?>
            <ul class="nav fr clearfix">
            	<li><a href="/home/index">网站首页</a></li>
                <li class="<?=$this->setActive('/agent/home/index') ?>"><a href="/agent/home/index">合营首页</a></li>
                <li class="<?=$this->setActive('/agent/home/model') ?>"><a href="/agent/home/model">合营模式</a></li>
                <li class="<?=$this->setActive('/agent/home/policy') ?>"><a href="/agent/home/policy">佣金政策</a></li>
                <li class="<?=$this->setActive('/agent/home/agreement') ?>"><a href="/agent/home/agreement">合营协议</a></li>
                <li class="<?=$this->setActive('/home/contact') ?>"><a href="/help/contact" target="_blank">联系我们</a></li>
            </ul>
            <?php else: ?>
            <ul class="nav fr">
                <li class="<?=$this->setActive('/agent/info/index') ?>"><a href="/agent/info/index">账户管理</a></li>
                <li class="<?=$this->setActive('/agent/report/index') ?>"><a href="/agent/report/index">报表中心</a></li>
                <li class="<?=$this->setActive('/agent/fund/index') ?>"><a href="/agent/fund/index">提款申请</a></li>
                <li class="<?=$this->setActive('/agent/info/message') ?>"><a href="/agent/info/message">消息中心</a></li>
            </ul>
            <?php endif; ?>
        </div>
   	</div>
</div>