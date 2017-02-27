<div class="header">
    <div class="header-top pr">
        <div class="layout">
            <div class="web-nav clearfix">
                <a href="/home/c" class="web-nav-1">线路检测</a><span>｜</span>
                <a href="/agent/home/index" class="web-nav-2">代理加盟</a><span>｜</span>
                <a href="/home/mobile" class="web-nav-3">手机畅玩电子</a><span>｜</span>
                <a href="/help/faqs" class="web-nav-4">新手教程</a><span>｜</span>
                <a href="javascript:void(0);" class="web-nav-5" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>', '_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">在线客服</a>
            </div>
            <span class="spare-url fl">易記域名：<?=Helper::GetSiteTextInfo(13);?></span>
        </div>
    </div>
    <div class="header-content layout pr">
        <div class="logo">
            <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"></a>
        </div>
        <?php if(strcasecmp($this->id,'home') == 0): ?>
        <ul class="nav fr">
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
            <li style='display:none;' class="<?=$this->setActive('/agent/info/promote') ?>"><a href="/agent/info/promote">推广工具</a></li>
            <li class="<?=$this->setActive('/agent/report/index') ?>"><a href="/agent/report/index">报表中心</a></li>
            <li class="<?=$this->setActive('/agent/fund/index') ?>"><a href="/agent/fund/index">提款申请</a></li>
            <li class="<?=$this->setActive('/agent/info/message') ?>"><a href="/agent/info/message">消息中心</a></li>
        </ul>
        <?php endif; ?>
    </div>
    <div class="header-bottom">
        <div class="layout pr">
            <div class="login-wrap fl">
                <?php if(!$this->is_agent_login()): ?>
                <div class="login-menu">
                    <input type="text" id="uid" name="uid" placeholder="代理账号" class="username-btn" />
                    <input type="password" id="jpwd" name="jpwd" placeholder="密码" class="password-btn" />
                    <a href="/agent/home/fetchPassword" class="forgot-password" title="忘记密码？">忘记密码？</a><br />
                    <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                    <a href="/agent/home/register" class="reg-btn">注册</a>
                </div>
                <?php else: ?>
                <div class="logined-nav">
                    <span class="username">欢迎！<?=$this->agent['agentname']; ?></span>
                    <span class="money-operate">
                        <a href="/agent/info/index" class="user-center">账户中心</a>
                        <a href="/agent/info/index">主账户：<em><?=Helper::money($this->agent['balance']) ?></em></a>
                        <a href="/agent/info/message" class="message">消息（<em id="_amessage"><?=$this -> getAUnreadCount();?></em>）</a>
                    </span>
                    <a class="logged-out" href="/agent/home/logout">安全退出</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>