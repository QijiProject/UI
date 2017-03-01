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
            <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"><img src="<?=$this->getCdn();?>/static/images/header_logo.png" /></a>
        </div>
        <ul class="nav fr" id="menu">
            <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">网站首页<em>HOME</em></a></li>
            <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index">MG电子游戏<em>SLOTS</em></a>
                <div class="nav-drop games-drop">
                    <a href="/game/index#mg" onclick="$('.mg-menu').click();" class="mg">MG游戏厅</a>
                    <a href="/game/index#pt" onclick="$('.pt-menu').click();" class="pt">PT游戏厅</a>
                    <a href="/game/index#bb" onclick="$('.bb-menu').click();" class="bb">BB游戏厅</a>
					          <a href="/game/index#ag" onclick="$('.ag-menu').click();" class="ag">AG游戏厅</a>
                    <a href="/game/index#nt" onclick="$('.nt-menu').click();" class="nt">NT游戏厅</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">真人娱乐<em>LIVE CASINO</em></a>
                <span class="hot-icon"></span>
                <div class="nav-drop l-c-drop">
                    <a href="/liveCasino/index" class="allbet">欧博娱乐场</a>
                    <a href="/liveCasino/index" class="ag">AG娱乐场</a>
                    <a href="/liveCasino/index" class="bb">BB娱乐场</a>
                    <a href="/liveCasino/index" class="shalon">沙龙娱乐场</a>
                    <a href="/liveCasino/index" class="gd">GD娱乐场</a>
                    <a href="/liveCasino/index" class="mg">MG娱乐场</a>
                    <a href="/liveCasino/index" class="pt">PT娱乐场</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/sports/hg') ?>"><a href="/sports/hg">体育投注<em>SPORTS</em></a>
                <div class="nav-drop sports-drop">
                    <a href="/sports/im">IM体育</a>
                    <a href="/sports/hg">皇冠体育</a>
                    <a href="/sports/index">沙巴体育</a>
                    <a href="/sports/bb">BB体育</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票游戏<em>LOTTERY</em></a>
                <div class="nav-drop lottery-drop">
                    <a href="/lottery/keno#bb" onclick="$('.bb-menu').click();" class="bb">BB彩票</a>
                    <a href="/lottery/keno#sgwin" onclick="$('.sgwin-menu').click();" class="sgwin">双赢彩票</a>
                </div>
            </li>
            <li class="nav-promotion <?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index">优惠活动<em>PROMOTIONS</em></a>
                <span class="hot-icon"></span>
            </li>
            <li class="<?=$this->setActive('/home/mobile') ?>"><a href="/home/mobile">客户端<em>CLIENT</em></a></li>
        </ul>
    </div>
    <div class="header-bottom">
        <div class="layout pr">
            <div class="login-wrap">
                <?php if(!$this->is_login()): ?>
                    <div class="login-menu">
                        <h2>会员登录 <span>LOGIN</span></h2>
                        <input type="text" id="uid" name="uid" placeholder="会员账号" class="username-btn" />
                        <input type="password" id="jpwd" name="jpwd" placeholder="密码" class="password-btn" />
                        <a href="/home/fetchPassword" class="forgot-password" title="忘记密码？">忘记密码？</a><br />
                        <a href="javascript:void(0);" id="gologin" class="log-btn">会员登录</a>
                        <a href="/home/register" class="reg-btn">免费开户</a>
                    </div>
                <?php else: ?>
                    <div class="logined-nav">
                        <h2>欢迎光临 <span>WELCOME</span></h2>
                        <!--<a href="/wallet/deposit" class="top-deposit-href">马上充值</a>-->
                        <span class="username">欢迎！<?=$this->user['playername'] ?></span>
                        <span class="nav-balance">账户余额：<em class="cMain"><?=Helper::money($this->user['balance']) ?></em></span>
                        <a href="/member/message" class="message">未读消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a>
                        <span class="money-operate">
                            <a href="/member/index" class="user-center">账户中心</a>
                            <a href="/wallet/transfer"  class="transfer-href" >转账</a>
                            <a href="/wallet/deposit" class="deposit-href">存款</a>
                            <a href="/wallet/withdraw" class="withdraw-href">取款</a>
                        </span>
                        <a class="logged-out" href="/home/logout">安全退出</a>
                    </div>
                <?php endif; ?>
            </div>
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
</div>


