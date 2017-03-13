<div class="header">
	<div class="layout1440">
        <div class="header-logo fl pr">
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
            <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?> 首页" class="home-link"></a>
        </div>	
        <div class="header-top fr">
            <div class="login-wrap clearfix">
                <?php if(!$this->is_login()): ?>
                    <div class="login-menu fr">
                        <h2>会员登录</h2>
                        <input type="text" id="uid" name="uid" placeholder="账号" />
                        <input type="password" id="jpwd" name="jpwd" placeholder="密码" />
                        <a href="javascript:void(0);" id="gologin" class="log-btn">登入</a>
                        <a href="/home/register" class="reg-btn">免费试玩</a>
                        <a href="/home/fetchPassword" class="forgot-password" title="忘记密码">忘记密码</a>
                    </div>
                <?php else: ?>
                    <div class="logined-nav fr">
                        <span class="username">欢迎！<?=$this->user['playername'] ?></span>
                        <span class="user-balance">主账户：<em class="cMain"><?=Helper::money($this->user['balance']) ?></em></span>
                        <a href="/member/message" class="message">消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a>
                        <a href="/member/index" class="user-center">账户中心</a>
                        <span class="money-operate">
                            <a href="/wallet/transfer" class="transfer-href" >转账</a>
                            <a href="/wallet/deposit" class="deposit-href">存款</a>
                            <a href="/wallet/withdraw" class="withdraw-href">取款</a>
                       	</span>
                        <a class="logged-out" href="/home/logout">安全退出</a>
                     </div>
                <?php endif; ?>
            </div>
            <ul id="menu" class="nav clearfix">
            	<li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">首页</a></li>
                <li class="<?=$this->setActive('/sports/index') ?> nav-sports"><a href="/sports/index">体育投注</a>
                	<div class="nav-drop sports-drop"> 
                    	<ul>
                            <li class="sb">
                                <a href="/sports/index"><i></i><h4>沙巴体育</h4></a>
                            </li>
                            <li class="im">
                                <a href="/sports/im"><i></i><h4>IM体育</h4></a>
                            </li>
                            <li class="hg">
                                <a href="/sports/hg"><i></i><h4>皇冠体育</h4></a>
                            </li>
                            <li class="bb">
                                <a href="/sports/bb"><i></i><h4>BB体育</h4></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="<?=$this->setActive('/liveCasino/index') ?> nav-live"><a href="/liveCasino/index">真人娱乐场</a>
                    <div class="nav-drop l-c-drop">
                        <ul>
                            <li class="bb">
                                <a href="/liveCasino/index"><i></i><h4>BBIN娱乐厅</h4></a>
                            </li>
                            <li class="ag">
                                <a href="/liveCasino/index"><i></i><h4>AG娱乐厅</h4></a>
                            </li>
                            <li class="shalon">
                                <a href="/liveCasino/index"><i></i><h4>沙龙娱乐厅</h4></a>
                            </li>
                            <li class="allbet">
                                <a href="/liveCasino/index"><i></i><h4>欧博娱乐厅</h4></a>
                            </li>
                            <li class="gd">
                                <a href="/liveCasino/index"><i></i><h4>GD娱乐厅</h4></a>
                            </li>
                            <li class="pt">
                                <a href="/liveCasino/index"><i></i><h4>PT娱乐厅</h4></a>
                            </li>
                            <li class="mg">
                                <a href="/liveCasino/index"><i></i><h4>MG娱乐厅</h4></a>
                            </li>
                        </ul>
                	</div> 
                </li>
                <li class="<?=$this->setActive('/game/index') ?> nav-games"><a href="/game/index">电子游艺</a>
                    <div class="nav-drop games-drop"> 
                    	<ul>
                            <li class="pt">
                                <a href="/game/index#pt" onclick="$('.pt-menu').click();"><i></i><h4>PT游戏厅</h4></a>
                            </li>
                            <li class="mg">
                                <a href="/game/index#mg" onclick="$('.mg-menu').click();"><i></i><h4>MG游戏厅</h4></a>
                            </li>
                            <li class="bb">
                                <a href="/game/index#bb" onclick="$('.bb-menu').click();"><i></i><h4>BB游戏厅</h4></a>
                            </li>
                            <li class="ag">
                                <a href="/game/index#ag" onclick="$('.ag-menu').click();"><i></i><h4>AG游戏厅</h4></a>
                            </li>
                            <li class="nt">
                                <a href="/game/index#nt" onclick="$('.nt-menu').click();"><i></i><h4>NT游戏厅</h4></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="<?=$this->setActive('/lottery/keno') ?> nav-keno"><a href="/lottery/keno">彩票游戏</a>
                    <div class="nav-drop lottery-drop"> 
                    	<ul>
                            <li class="kg">
                                <a href="/lottery/keno#kg" onclick="$('.kg-menu').click();"><i></i><h4>KG彩票</h4></a>
                            </li>
                            <li class="bb">
                                <a href="/lottery/keno#bb" onclick="$('.bb-menu').click();"><i></i><h4>BBIN彩票</h4></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="<?=$this->setActive('/home/mobile') ?> nav-phone"><a href="/home/mobile">客户端</a></li>
                <li class="<?=$this->setActive('/promotions/index') ?> nav-promotions"><a href="/promotions/index">优惠活动</a></li>
                <li class="<?=$this->setActive('/home/c') ?> nav-promotions"><a href="/home/c">备用线路</a></li>
                <li><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>', '_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">在线客服</a></li>
            </ul>
        </div>
 	</div>
</div>

<script>
    //导航下拉
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
