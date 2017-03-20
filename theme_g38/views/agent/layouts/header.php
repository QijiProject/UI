<div class="header agent-header">
	<div class="header-top">
        <div class="layout">
            <div class="web-nav">
                <a href="/help/about">牌照认证</a><span>|</span><a href="/help/faqs">新手教程</a><span>｜</span><a href="/promotions/index">资讯站</a><span>｜</span><a href="/home/register">【快速充值中心】</a><span>｜</span><a href="/game/index#pt"> PT老虎机</a><span>｜</span><a href="/agent/home/register">电子代理</a><span>｜</span><a href="/home/c">备用网址</a>
            </div>
            <div class="fl"><a href="/home/index" class="img-lang"></a><span class="hd-time">美东时间：<span class="time"></span></span></div>
        </div>
    </div>
    <div class="header-content">
        <div class="layout pr">
            <div class="login-wrap fr">
                <?php if(!$this->is_agent_login()): ?>
                    <div class="login-menu">
                    	<ul>
                            <li>
                                <p><a href="/agent/home/register" class="reg-btn">注册</a></p>
                            </li>
                            <li>
                            	<p class="username-btn"><input type="text" id="uid" name="uid" placeholder="代理账号" /></p>
                                <p class="password-btn"><input type="password" id="jpwd" name="jpwd" placeholder="密码" /></p>
                                <p><a href="/agent/home/fetchPassword" class="forgot-password" title="忘记密码？">忘记密码？</a></p>
                            </li>
                            <li><a href="javascript:void(0);" id="gologin" class="log-btn">登录</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="logined-nav clearfix">
                        <p class="agent-logined-user">
                            <span class="username">欢迎！<em><?=$this->agent['agentname']; ?></em></span>
                            <span><a href="/agent/info/index">主账户：<em><?=Helper::money($this->agent['balance']) ?></em></a></span>
                        </p>
                        <p class="clear"></p>
                        <p>
                            <span class="money-operate"><a href="/agent/info/index" class="user-center">账户中心</a><a href="/agent/info/message" class="message">未读消息（<em id="_amessage"><?=$this -> getAUnreadCount();?></em>）</a></span>
                            <a class="logged-out" href="/agent/home/logout">登出</a>
                        </p>              
                    </div>
                <?php endif; ?>
            </div>
            <div class="logo">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="360" height="101" onmousedown="location.href='/home/index'">
                    <param name="movie" value="/static/images/header/header_logo.swf" />
                    <param name="wmode" value="transparent" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="/static/images/header/header_logo.swf" width="360" height="101">
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
        <ul class="nav layout">
            <li><a href="/home/index">网站首页</a></li>
            <li class="<?=$this->setActive('/agent/home/index') ?>"><a href="/agent/home/index">加盟首页</a></li>
            <li class="<?=$this->setActive('/agent/home/model') ?>"><a href="/agent/home/model">加盟模式</a></li>
            <li class="<?=$this->setActive('/agent/home/policy') ?>"><a href="/agent/home/policy">佣金政策</a></li>
            <li class="<?=$this->setActive('/agent/home/agreement') ?>"><a href="/agent/home/agreement">加盟协议</a></li>
            <li class="<?=$this->setActive('/home/contact') ?>"><a href="/help/contact" target="_blank">联系我们</a></li>
        </ul>
        <?php else: ?>
        <ul class="nav layout">
            <li class="<?=$this->setActive('/agent/info/index') ?>"><a href="/agent/info/index">账户管理</a></li>
            <li style='display:none;' class="<?=$this->setActive('/agent/info/promote') ?>"><a href="/agent/info/promote">推广工具</a></li>
            <li class="<?=$this->setActive('/agent/report/index') ?>"><a href="/agent/report/index">报表中心</a></li>
            <li class="<?=$this->setActive('/agent/fund/index') ?>"><a href="/agent/fund/index">提款申请</a></li>
            <li class="<?=$this->setActive('/agent/info/message') ?>"><a href="/agent/info/message">消息中心</a></li>
        </ul>
        <?php endif; ?>
    </div>
</div>

<!-- 美东时间 -->
<script type="text/javascript" src="/static/js/timer.js"></script>
<script>
	setInterval(function(){
        $('.hd-time .time').FormatTime({
            timezone: '-4'
        });
    },200);
</script>
<!-- 美东时间 end -->