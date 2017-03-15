<div class="header">
    <div class="header-top">
        <div class="layout">
            <a href="javascript:void(0);" class="fr" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,top=0,left=0,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">VIP客服专线</a><a href="/help/faqs" target="_blank" class="fr">帮助中心</a>
            <!--notice-->
            <?= $this->themeLayout('notice') ?>
            <!--notice end-->
        </div>
    </div>
    <div class="layout header-content pr">
        <div class="fr login-wrap">
            <?php if(!$this->is_agent_login()): ?>
            <div class="login-menu">
                <div class="username-btn"><input type="text" id="uid" name="uid" placeholder="代理账号"></div>
                <div class="password-btn pr"><input type="password" id="jpwd" name="jpwd" placeholder="密码"><a href="/agent/home/fetchPassword" title="忘记密码？" class="forgot-password">忘记？</a></div>
                <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a><a href="/agent/home/register" class="reg-btn">立即注册</a>
            </div>
            <?php else: ?>
            <div class="logined-nav">
                <span class="username">欢迎！<?=$this->agent['agentname']; ?> 主账户：<em class="cMain"><?=Helper::money($this->agent['balance']) ?></em></span>
                <span>
                    <a href="/agent/info/index" class="user-center">账户中心<i></i></a>
                    <a href="/agent/info/message" class="message">未读消息（<em id="_amessage" class="cMain"><?=$this -> getAUnreadCount();?></em>）</a>
                    <a class="logged-out" href="/agent/home/logout">安全退出</a>
                </span>
            </div>
            <?php endif; ?>
        </div>
        <div class="logo">
            <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"><img src="<?=$this->getCdn();?>/static/images/header_logo.png" /></a>
        </div>
    </div>
    <div class="nav">
        <div class="layout">
            <a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,top=0,left=0,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')"  class="nav-online-chat fr">在线客服</a>
            <?php if(strcasecmp($this->id,'home') == 0): ?>
            <ul>
            	<li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">网站首页</a></li>
                <li class="<?=$this->setActive('/agent/home/index') ?>"><a href="/agent/home/index">合营首页</a></li>
                <li class="<?=$this->setActive('/agent/home/model') ?>"><a href="/agent/home/model">合营模式</a></li>
                <li class="<?=$this->setActive('/agent/home/policy') ?>"><a href="/agent/home/policy">佣金政策</a></li>
                <li class="<?=$this->setActive('/agent/home/agreement') ?>"><a href="/agent/home/agreement">合营协议</a></li>
                <li class="<?=$this->setActive('/home/contact') ?>"><a href="/help/contact" target="_blank">联系我们</a></li>
            </ul>
            <?php else: ?>
            <ul>
                <li class="<?=$this->setActive('/agent/info/index') ?>"><a href="/agent/info/index">账户管理</a></li>
                <li class="<?=$this->setActive('/agent/report/index') ?>"><a href="/agent/report/index">报表中心</a></li>
                <li class="<?=$this->setActive('/agent/fund/index') ?>"><a href="/agent/fund/index">提款申请</a></li>
                <li class="<?=$this->setActive('/agent/info/message') ?>"><a href="/agent/info/message">消息中心</a></li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>