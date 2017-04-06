<div class="header">
    <div class="header-top">
        <div class="layout pr">
            <div class="web-nav fr">
                <a href="#" onclick="SetHome(this,window.location);">设为首页</a><span>｜</span><a onclick="AddFavorite(window.location,document.title);" href="#">收藏本站</a><span>｜</span><a href="/help/faqs">常见问题</a><span>｜</span><a href="/home/index" class="img-lang"></a>
            </div>
            <div class="clear"></div>
            <div class="login-wrap clearfix">
                <?php if(!$this->is_login()): ?>
                <div class="login-menu clearfix">
                    <input type="text" id="uid" name="uid" placeholder="会员账号" class="username-btn" />
                    <input type="password" id="jpwd" name="jpwd" placeholder="密码" class="password-btn" />
                    <a href="/home/register" class="reg-btn fr">注册</a>
                    <a href="/home/fetchPassword" class="forgot-password">忘记密码？</a>
                    <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                </div>
                <?php else: ?>
                <div class="logined-nav">
                    <span class="username">欢迎！<?=$this->user['playername'] ?></span>
                    <span>账户余额：<em class="cMain"><?=Helper::money($this->user['balance']) ?></em></span>
                    <span><a href="/member/message" class="message">未读消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a></span>
                    <div class="clear"></div>
                    <span class="money-operate">
                        <a href="/member/index" class="user-center">账户中心</a>
                        <a href="/wallet/transfer"  class="transfer-href" >转账</a>
                        <a href="/wallet/deposit" class="deposit-href">存款</a>
                        <a href="/wallet/withdraw" class="withdraw-href">取款</a>
                    </span>
                    <a class="logged-out cMain" href="/home/logout">安全退出</a>
                </div>
                <?php endif; ?>
            </div>
            <div class="logo">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="309" height="84" onmousedown="location.href='/home/index'">
                    <param name="movie" value="/static/images/header_logo.swf" />
                    <param name="wmode" value="transparent" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="/static/images/header_logo.swf" width="309" height="84">
                        <param name="wmode" value="transparent" />
                        <!--<![endif]-->
                        <a href="http://www.adobe.com/go/getflashplayer">
                        	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                        </a>
                        <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object>
                <a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?>"></a>
            </div>
        </div>
    </div>
    <div class="nav-wrap">
        <ul class="nav clearfix" id="menu">
            <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">首页</a></li>
            <li class="<?=$this->setActive('/sports/hg') ?>"><a href="/sports/index">体育赛事</a>
                <div class="nav-drop sports-drop">
                    <a href="/sports/hg" class="hg">皇冠体育</a>
                    <a href="/sports/im" class="im">IM体育</a>
                    <a href="/sports/index" class="sb">沙巴体育</a>
                    <a href="/sports/bb" class="bb last-a">BB体育</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">真人娱乐</a><i><img src="/static/images/header/hot.gif" /></i>
                <div class="nav-drop l-c-drop">
                    <a href="javascript:void(0);" onclick="get_ag_gc(<?=$this->is_login()?0:1 ?>,<?=AsiaGames::GP_TYPE ?>)" class="ag">AG娱乐厅</a>
                    <a href="javascript:void(0);" onclick="load_bbin_ld(<?=$this->is_login()?0:1 ?>,'<?=BBIN::LD ?>','live')" class="bb">BB娱乐厅</a>
                    <a href="javascript:void(0);" onclick="loadTPGLD(<?=$this->is_login()?0:1 ?>)" class="tgp">太阳城娱乐厅</a>
                    <a href="javascript:void(0);" onclick="load_allbet(<?=$this->is_login()?0:1 ?>);" class="allbet">欧博娱乐厅</a>
                    <a href="javascript:void(0);" onclick="load_salon_ld(<?=$this->is_login()?0:1 ?>)" class="shalon">沙龙娱乐厅</a>
                    <a href="javascript:void(0);" onclick='get_gd_gc(<?=$this->is_login()?0:1 ?>,<?=GoldDeluxe::GP_TYPE?>,"")' class="gd">GD娱乐厅</a>
                    <a href="javascript:void(0);" onclick="load_pt('<?=PT::PT_LD ?>',<?=$this->is_login()?0:1 ?>,'plba')" class="pt">PT娱乐厅</a>
                    <a href="javascript:void(0);" onclick="load_mg_ld(<?=$this->is_login()?0:1 ?>,'')" class="mg last-a">MG娱乐厅</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index">电子游艺</a>
                <div class="nav-drop games-drop">
                    <a href="/game/index#mg" onclick="$('.mg-menu').click();" class="mg">MG电子厅</a>
                    <a href="/game/index#pt" onclick="$('.pt-menu').click();" class="pt">PT电子厅</a>
					<a href="/game/index#ag" onclick="$('.ag-menu').click();" class="ag">AG电子厅</a>
                    <a href="/game/index#nt" onclick="$('.nt-menu').click();" class="nt last-a">NT电子厅</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票游戏</a>
                <div class="nav-drop lottery-drop">
                    <a href="/lottery/keno#bb" onclick="$('.bb-menu').click();" class="bb">BB彩票</a>
                    <a href="/lottery/keno#kg" onclick="$('.kg-menu').click();" class="kg last-a">KG彩票</a>
                </div>
            </li>
            <li class="<?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index" class="ss">优惠活动</a></li>
            <li class="<?=$this->setActive('/home/agent/index') ?>"><a href="/agent/home/index" target="_blank">代理加盟</a><i><img src="/static/images/header/hot.gif" /></i></li>
            <li class="<?=$this->setActive('/home/mobile') ?>"><a href="/home/mobile">手机下注</a></li>
            <li class="nav-service"><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">在线客服</a></li>
        </ul>
    </div>
    <!-- 公告 -->
    <?= $this->themeLayout('notice') ?>
    <!--end 公告 -->
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
        //文字闪烁
        var colori = 0;
        function getColor(){
            colori++;
            switch(colori){ 
                case 1:return "#5F2508";
                default:return "red";
            }
        }
        function colorful(){
            var color = getColor();
            $(".ss").css("color",color);
            if(colori==2)colori=0;
        }
        setInterval('colorful()',400);
    </script>
</div>


