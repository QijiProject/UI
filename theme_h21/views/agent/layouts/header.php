<div class="header">
    <div class="layout1100 clearfix pr">
        <div class="header-top">
            <div class="web-nav clearfix">
                <a href="/agent/home/index">代理合作</a><span>｜</span><a onclick="AddFavorite(window.location,document.title);" href="#">收藏本站</a><span>｜</span><a href="#" onclick="SetHome(this,window.location);">设为首页</a><span>｜</span><a href="/home/index" class="img-lang">语言选择：</a>
            </div>
            <p class="clearfix"></p>
            <div class="login-wrap">
                <?php if(!$this->is_agent_login()): ?>
                    <div class="login-menu">
                        <input type="text" id="uid" name="uid" placeholder="代理账号" class="username-btn" />
                        <input type="password" id="jpwd" name="jpwd" placeholder="密码" class="password-btn" />
                        <a href="javascript:void(0);" id="gologin" class="log-btn">会员登录</a>
                        <a href="/agent/home/register" class="reg-btn">代理注册</a>
                        <a href="/agent/home/fetchPassword" class="forgot-password" title="忘记密码？">忘记密码？</a>
                    </div>
                <?php else: ?>
                    <div class="logined-nav">
                        <span class="username">欢迎！<?=$this->agent['agentname']; ?></span>
                        <a href="/agent/info/index">主账户：<em class="cMain"><?=Helper::money($this->agent['balance']) ?></em></a>
                        <span class="money-operate">
                            <a href="/agent/info/index" class="user-center">账户中心</a>
                            <a href="/agent/info/message" class="message">未读消息（<em id="_amessage"><?=$this -> getAUnreadCount();?></em>）</a>
                        </span>
                        <a class="logged-out" href="/agent/home/logout">安全退出</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="logo">
            <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>">
            	<img src="/static/images/header_logo.png" />
            </a>
        </div>
        <i class="header-address"></i>
    </div>
    <div class="nav-wrap layout1100">
        <?php if(strcasecmp($this->id,'home') == 0): ?>
        <ul class="nav">
            <li><a href="/home/index">网站首页</a></li>
            <li class="<?=$this->setActive('/agent/home/index') ?>"><a href="/agent/home/index">合营首页</a></li>
            <li class="<?=$this->setActive('/agent/home/model') ?>"><a href="/agent/home/model">合营模式</a></li>
            <li class="<?=$this->setActive('/agent/home/policy') ?>"><a href="/agent/home/policy">佣金政策</a></li>
            <li class="<?=$this->setActive('/agent/home/agreement') ?>"><a href="/agent/home/agreement">合营协议</a></li>
            <li class="<?=$this->setActive('/home/contact') ?>"><a href="/help/contact" target="_blank">联系我们</a></li>
        </ul>
        <?php else: ?>
        <ul class="nav fr layout1100">
            <li class="<?=$this->setActive('/agent/info/index') ?>"><a href="/agent/info/index">账户管理</a></li>
            <li style='display:none;' class="<?=$this->setActive('/agent/info/promote') ?>"><a href="/agent/info/promote">推广工具</a></li>
            <li class="<?=$this->setActive('/agent/report/index') ?>"><a href="/agent/report/index">报表中心</a></li>
            <li class="<?=$this->setActive('/agent/fund/index') ?>"><a href="/agent/fund/index">提款申请</a></li>
            <li class="<?=$this->setActive('/agent/info/message') ?>"><a href="/agent/info/message">消息中心</a></li>
        </ul>
        <?php endif; ?>
    </div>
</div>


