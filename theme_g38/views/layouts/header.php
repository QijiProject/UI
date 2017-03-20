<div class="header">
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
                <?php if(!$this->is_login()): ?>
                    <div class="login-menu">
                        <ul>
                            <li>
                                <p><a href="/home/register" class="reg-btn ss">立即加入</a></p>
                            </li>
                            <li>
                            	<p class="username-btn"><input type="text" id="uid" name="uid" placeholder="会员账号" /></p>
                                <p class="password-btn"><input type="password" id="jpwd" name="jpwd" placeholder="密码" /></p>
                                <p><a href="/home/fetchPassword" class="forgot-password">忘记密码？</a></p>
                            </li>
                            <li><a href="javascript:void(0);" id="gologin" class="log-btn">登入</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="logined-nav">
                        <ul>
                            <li>
                                <span>账户余额：<em class="cMain"><?=Helper::money($this->user['balance']) ?></em></span>
                                <a href="/member/message" class="message">未读消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a>
                                <span class="username">欢迎！<?=$this->user['playername'] ?></span>
                            </li>
                            <li>
                                <a class="logged-out" href="/home/logout">安全退出</a>
                                <span class="money-operate">
                                    <a href="/wallet/transfer"  class="transfer-href" >转账</a>
                                    <a href="/wallet/deposit" class="deposit-href">存款</a>
                                    <a href="/wallet/withdraw" class="withdraw-href">取款</a>
                                </span>
                                <a href="/member/index" class="user-center">账户中心<i></i></a>
                            </li>
                        </ul>
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
        <ul class="nav layout" id="menu">
            <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">首页</a></li>
            <li class="<?=$this->setActive('/sports/index') ?>"><a href="/sports/bb">体育投注</a>
                <div class="nav-drop sports-drop">
                    <a href="/sports/hg" class="hg">皇冠体育</a>
                    <a href="/sports/bb" class="bb last-a">BB体育</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">真人视讯</a>
                <div class="nav-drop l-c-drop">
                    <a href="/liveCasino/index" class="bb">BB娱乐厅</a>
                    <a href="/liveCasino/index" class="ag">AG娱乐厅</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票游戏</a>
                <div class="nav-drop lottery-drop">
                    <a href="/lottery/keno#bb" onclick="$('.bb-menu').click();" class="bb last-a">BB彩票</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index">电子游艺</a>
                <div class="nav-drop games-drop">
                    <a href="/game/index#pt" onclick="$('.pt-menu').click();" class="pt">PT电子厅</a>
                    <a href="/game/index#mg" onclick="$('.mg-menu').click();" class="mg">MG电子厅</a>
					<a href="/game/index#ag" onclick="$('.ag-menu').click();" class="ag last-a">AG电子厅</a>
                </div>
            </li>
			<li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">AG 真人</a></li>
			<li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index#pt" onclick="$('.pt-menu').click();" class="pt">PT老虎机</a></li>
            <li class="<?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index">优惠活动</a></li>
            <li class="<?=$this->setActive('/home/mobile') ?>"><a href="/home/mobile">手机投注</a></li>
            <li class="nav-agency <?=$this->setActive('/agent/home/index') ?>"><a href="/agent/home/index" target="_blank">代理合作</a></li>
            
        </ul>
    </div>
</div>

<script>
    //下拉导航
    $(function(){
        $('#menu').find('li').mouseover(function(){
            $(this).addClass('hover');
            $(this).find('.nav-drop').show();
        });
        $('#menu').find('li').mouseout(function(){
            $(this).removeClass('hover');
            $(this).find('.nav-drop').hide();
        });
    });
</script>

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