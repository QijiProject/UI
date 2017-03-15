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
            <?php if(!$this->is_login()): ?>
            	<div class="login-menu">
                	<div class="username-btn">
                    	<input type="text" id="uid" name="uid" placeholder="会员账号" />
                   	</div>
                    <div class="password-btn pr">
                        <input type="password" id="jpwd" name="jpwd" placeholder="密码" />
                        <a href="/home/fetchPassword" class="forgot-password" title="忘记？">忘记？</a>
                    </div>
                    <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                    <a href="/home/register" class="reg-btn">立即注册</a>
                </div>
            <?php else: ?>
                <div class="logined-nav">
                    <span class="username">欢迎！<?=$this->user['playername'] ?>, 账户余额：<em><?=Helper::money($this->user['balance']) ?></em></span>
                    <span><a href="/member/index">账户中心</a>
                    <a href="/wallet/transfer" >转账</a>
                    <a href="/wallet/deposit">存款</a>
                    <a href="/wallet/withdraw">取款</a>
                    <a href="/member/message" class="message">未读消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a>
                    <a class="logged-out" href="/home/logout">退出</a></span>
                </div>
            <?php endif; ?>
        </div>
        <div class="logo">
            <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"><img src="<?=$this->getCdn();?>/static/images/header_logo.png" /></a>
        </div>
    </div>
    <div class="nav">
        <ul class="layout">
            <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">首 页</a></li>
            <li class="<?=$this->setActive('/sports/index') ?>"><a href="/sports/index">体育投注</a></li>
            <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">真人娱乐</a></li>
            <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index">电子游艺</a></li>
            <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票投注</a></li>
            <li class="<?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index">VIP优惠</a></li>
            <li class="<?=$this->setActive('/home/mobile') ?>"><a href="/home/mobile">客户端</a></li>
        </ul>
    </div>
</div>