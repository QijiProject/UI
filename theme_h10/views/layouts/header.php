<div class="header">
    <div class="header-top layout pr">
        <div class="web-nav clearfix">
            <a href="/home/c" class="web-nav-1">备用网址</a><span>｜</span>
            <a href="javascript:void(0);" class="web-nav-2" onclick="alert('加入收藏失败，请使用Ctrl+D进行添加，或手动在浏览器里进行设置！');">请按Ctrl+D键收藏</a>
        </div>
        <a href="/home/index" class="lang-icon"></a>
        <span id="siteTime" class="fl site-time"></span>
    </div>
    <div class="header-content pr">
        <div class="layout">
            <div class="logo">
                <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"><img src="<?=$this->getCdn();?>/static/images/header_logo.png" /></a>
            </div>
            <ul class="nav fr" id="menu">
                <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">网站首页<em>HOME</em></a></li>
                <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index" class="color-switch"><span class="hot-icon"></span>电子游艺<em>SLOTS</em></a>
                    <div class="nav-drop games-drop">
                        <div class="layout">
                            <div class="return-percent fl">
                                <h2>3.0%</h2>
                                <p>天天返水无上限</p>
                                <span class="line-showcase"></span>
                            </div>
                            <ul class="game-list fl">
                                <li>
                                    <a href="/game/index#mg" onclick="$('.mg-menu').click();" class="mg">
                                        <i></i>
                                        <div class="title-wrap">
                                            <p class="cn-title">MG电子</p><p class="en-title">MICROGAMING</p>
                                        </div>
                                        <span class="game-btn">进入游戏</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/game/index#pt" onclick="$('.pt-menu').click();" class="pt">
                                        <i></i>
                                        <div class="title-wrap">
                                            <p class="cn-title">PT电子</p><p class="en-title">PLAYTECH</p>
                                        </div>
                                        <span class="game-btn">进入游戏</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/game/index#bb" onclick="$('.bb-menu').click();" class="bb">
                                        <i></i>
                                        <div class="title-wrap">
                                            <p class="cn-title">BBIN电子</p><p class="en-title">BBINGAMING</p>
                                        </div>
                                        <span class="game-btn">进入游戏</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/game/index#ag" onclick="$('.ag-menu').click();" class="ag">
                                        <i></i>
                                        <div class="title-wrap">
                                            <p class="cn-title">AG电子</p><p class="en-title">ASIA GAMING</p>
                                        </div>
                                        <span class="game-btn">进入游戏</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/game/index#nt" onclick="$('.nt-menu').click();" class="nt">
                                        <i></i>
                                        <div class="title-wrap">
                                            <p class="cn-title">NT电子</p><p class="en-title">NETENT</p>
                                        </div>
                                        <span class="game-btn">进入游戏</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index"><span class="hot-icon"></span>真人视讯<em>LIVE CASINO</em></a>
                    <div class="nav-drop l-c-drop">
                        <div class="layout">
                            <div class="return-percent fl">
                                <h2>1.3%</h2>
                                <p>天天返水无上限</p>
                                <span class="line-showcase"></span>
                            </div>
                            <ul class="game-list fl">
                                <li>
                                    <a href="/liveCasino/index" class="ag">
                                        <i></i><p class="cn-title">AG娱乐场</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/liveCasino/index" class="bb">
                                        <i></i><p class="cn-title">BB娱乐场</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/liveCasino/index" class="allbet">
                                        <i></i><p class="cn-title">欧博娱乐场</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/liveCasino/index" class="shalon">
                                        <i></i><p class="cn-title">沙龙娱乐场</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/liveCasino/index" class="gd">
                                        <i></i><p class="cn-title">GD娱乐场</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/liveCasino/index" class="mg">
                                        <i></i><p class="cn-title">MG娱乐场</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/liveCasino/index" class="pt">
                                        <i></i><p class="cn-title">PT娱乐场</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="<?=$this->setActive('/sports/hg') ?>"><a href="/sports/hg">体育投注<em>SPORTS</em></a>
                    <div class="nav-drop sports-drop">
                        <div class="layout1200">
                            <div class="return-percent fl">
                                <h2>1.5%</h2>
                                <p>天天返水无上限</p>
                                <span class="line-showcase"></span>
                            </div>
                            <ul class="game-list fl">
                                <li>
                                    <a href="/sports/index" class="sb">
                                        <i></i>
                                        <div class="title-wrap">
                                            <span class="cn-title">沙巴体育</span><span class="en-title">Sabah Sports</span><span class="game-btn">进入游戏</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/sports/im" class="im">
                                        <i></i>
                                        <div class="title-wrap">
                                            <span class="cn-title">IM体育</span><span class="en-title">IM Sports</span><span class="game-btn">进入游戏</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/sports/hg" class="hg">
                                        <i></i>
                                        <div class="title-wrap">
                                            <span class="cn-title">皇冠体育</span><span class="en-title">Crown Sports</span><span class="game-btn">进入游戏</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/sports/bb" class="bb">
                                        <i></i>
                                        <div class="title-wrap">
                                            <span class="cn-title">BB体育</span><span class="en-title">BBIN Sports</span><span class="game-btn">进入游戏</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票游戏<em>LOTTERY</em></a>
                    <div class="nav-drop lottery-drop">
                        <div class="layout">
                            <div class="return-percent fl">
                                <h2>1.2%</h2>
                                <p>天天返水无上限</p>
                                <span class="line-showcase"></span>
                            </div>
                            <ul class="game-list fl">
                                <li>
                                    <a href="/lottery/keno#bb" onclick="$('.bb-menu').click();" class="bb">
                                        <i></i>
                                        <div class="title-wrap">
                                            <span class="cn-title">BB彩票</span><span class="en-title"> / BB Lottery</span><span class="game-btn">进入游戏</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/lottery/keno#kg" onclick="$('.kg-menu').click();" class="kg">
                                        <i></i>
                                        <div class="title-wrap">
                                            <span class="cn-title">KG彩票</span><span class="en-title"> / KG Lottery</span><span class="game-btn">进入游戏</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="<?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index" class="color-switch"><span class="hot-icon"></span>优惠活动<em>PROMOTIONS</em></a></li>
                <li class="<?=$this->setActive('/home/mobile') ?>" ><a href="/home/mobile">手机投注<em>MOBILE</em></a></li>
                <li><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>', '_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">在线客服<em>SERVICE</em></a></li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="layout pr">
            <i class="header-address"></i>
            <div class="login-wrap">
                <?php if(!$this->is_login()): ?>
                    <div class="login-menu">
                        <span class="login-title">用户登录 / login</span>
                        <input type="text" id="uid" name="uid" placeholder="账号" class="username-btn" />
                        <input type="password" id="jpwd" name="jpwd" placeholder="密码" class="password-btn" />
                        <a href="javascript:void(0);" id="gologin" class="log-btn">会员登录</a>
                        <a href="/home/register" class="reg-btn">免费开户</a>
                        <a href="/home/fetchPassword" class="forgot-password" title="忘记密码">忘记密码</a>
                    </div>
                <?php else: ?>
                    <div class="logined-nav">
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
            var timerID = setInterval("dispTime()", 1000); // site time
          
            colorful(); // calling color switching function
          
            $('#menu').find('li').mouseover(function(){
                $(this).addClass('hover');
                $(this).find('.nav-drop').show();
            });
            $('#menu').find('li').mouseout(function(){
                $(this).removeClass('hover');
                $(this).find('.nav-drop').hide();
            });
        });
        
        /* top nav red-yellow color switching */
		    var ix = 0;
		    function getColor() {
		        ix++;
		        switch (ix) {
		            case 1: return "red";
		            case 2: return "#FF0";
		        }
		    }
		    function colorful() {
		        $(".color-switch, .color-switch em").css("color", getColor());
            
		        if (ix == 2) ix = 0;
		        setTimeout('colorful()', 300);
		    }
        /* END: top nav red-yellow color switching */
        
        /* site time */
		    var current = 1486907141000 || 0;
		    function dispTime() {
		        current += 1000;
		        var dateObj = new Date(current);
		        var Y = dateObj.getFullYear();
		        var Mh = dateObj.getMonth() + 1;
		        if (Mh > 12) Mh = 01;
		        if (Mh < 10) Mh = '0' + Mh;
		        var D = dateObj.getDate() < 10 ? '0' + dateObj.getDate() : dateObj.getDate();
		        var H = dateObj.getHours() < 10 ? '0' + dateObj.getHours() : dateObj.getHours();
		        var M = dateObj.getMinutes() < 10 ? '0' + dateObj.getMinutes() : dateObj.getMinutes();
		        var S = dateObj.getSeconds() < 10 ? '0' + dateObj.getSeconds() : dateObj.getSeconds();
		        document.getElementById('siteTime').innerHTML = "美东时间：" + Y + '-' + Mh + '-' + D + ' ' + H + ':' + M + ':' + S;
		    }
        /* end: site time */
    </script>
</div>


