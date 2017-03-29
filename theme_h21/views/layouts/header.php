<?php
?>
<div class="header">
    <div class="layout1100 clearfix pr">
        <div class="header-top">
            <div class="web-nav clearfix">
                <a href="/agent/home/index" target="_blank">代理合作</a><span>｜</span><a onclick="AddFavorite(window.location,document.title);" href="#">收藏本站</a><span>｜</span><a href="#" onclick="SetHome(this,window.location);">设为首页</a><span>｜</span><a href="/home/index" class="img-lang">语言选择：</a>
            </div>
            <div class="login-wrap">
                <?php if(!$this->is_login()): ?>
                    <div class="login-menu">
                        <input type="text" id="uid" name="uid" placeholder="会员账号" />
                        <input type="password" id="jpwd" name="jpwd" placeholder="密码" />
                        <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                        <a href="/home/register" class="reg-btn">注册</a>
                        <a href="/home/fetchPassword" class="forgot-password" title="忘记密码？">忘记密码？</a>
                    </div>
                <?php else: ?>
                    <div class="logined-nav">
                        <span class="username">欢迎！<?=$this->user['playername'] ?></span>
                        <a href="/member/message" class="message">未读消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a>
                        <a href="/member/index" class="user-center">账户中心<i></i></a>
                        <span>账户余额：<em class="cMain"><?=Helper::money($this->user['balance']) ?></em></span>
                        <span class="money-operate">
                            <a href="/wallet/transfer"  class="transfer-href" >转账</a>
                            <a href="/wallet/deposit" class="deposit-href">存款</a>
                            <a href="/wallet/withdraw" class="withdraw-href">取款</a>
                        </span>
                        <a class="logged-out" href="/home/logout">安全退出</a>
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
    <div class="nav-wrap">
        <ul class="nav layout1100" id="menu">
            <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">首页</a></li>
            <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index">电子游艺</a>
                <div class="nav-drop games-drop">
                	<div class="layout">
                    	<div class="return-panel fl">
                        	<h2>0.8%</h2>
                        	<span>日日返水</span>
                        </div>
                        <dl class="fl">
                            <dd class="mg"><a href="/game/index#mg" onclick="$('.mg-menu').click();">MG游戏厅</a></dd>
                            <dd class="pt"><a href="/game/index#pt" onclick="$('.pt-menu').click();">PT游戏厅</a></dd>
                            <dd class="bb"><a href="/game/index#bb" onclick="$('.bb-menu').click();">BB游戏厅</a></dd>
                            <dd class="ag"><a href="/game/index#ag" onclick="$('.ag-menu').click();">AG游戏厅</a></dd>
                            <dd class="nt last-dd"><a href="/game/index#nt" onclick="$('.nt-menu').click();">NT游戏厅</a></dd>
                        </dl>
                    </div> 
                </div>
            </li>
            <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">真人视讯</a>
                <div class="nav-drop l-c-drop">
                	<div class="layout1100">
                    	<div class="return-panel fl">
                        	<h2>0.8%</h2>
                        	<span>日日返水</span>
                        </div>
                        <dl class="fl">
                            <dd class="allbet"><a href="javascript:void(0);" onclick="load_allbet(<?=$this->is_login()?0:1 ?>);">欧博娱乐厅</a></dd>
                            <dd class="tgp"><a href="javascript:void(0);" onclick="loadTPGLD(<?=$this->is_login()?0:1 ?>)">太阳城娱乐厅</a></dd>
                            <dd class="ag"><a href="javascript:void(0);" onclick="get_ag_gc(<?=$this->is_login()?0:1 ?>,<?=AsiaGames::GP_TYPE ?>)">AG娱乐厅</a></dd>
                            <dd class="bb"><a href="javascript:void(0);" onclick="load_bbin_ld(<?=$this->is_login()?0:1 ?>,'<?=BBIN::LD ?>','live')">BB娱乐厅</a></dd>
                            <dd class="salon"><a href="javascript:void(0);" onclick="load_salon_ld(<?=$this->is_login()?0:1 ?>)">沙龙娱乐厅</a></dd>
                            <dd class="gd"><a href="javascript:void(0);" onclick='get_gd_gc(<?=$this->is_login()?0:1 ?>,<?=GoldDeluxe::GP_TYPE?>,"")'>GD娱乐厅</a></dd>
                            <dd class="mg"><a href="javascript:void(0);" onclick="load_mg_ld(<?=$this->is_login()?0:1 ?>,'')">MG娱乐厅</a></dd>
                            <dd class="pt last-dd"><a href="javascript:void(0);" onclick="load_pt('<?=PT::PT_LD ?>',<?=$this->is_login()?0:1 ?>,'plba')">PT娱乐厅</a></dd>
                        </dl>
                    </div>
                </div>
            </li>
            <li class="<?=$this->setActive('/sports/index') ?>"><a href="/sports/index">体育赛事</a>
                <div class="nav-drop sports-drop">
                	<div class="layout">
                    	<div class="return-panel fl">
                        	<h2>0.8%</h2>
                        	<span>日日返水</span>
                        </div>
                        <dl class="fl">
                            <dd class="im"><a href="/sports/im">IM体育</a></dd>
                            <dd class="hg"><a href="/sports/hg">皇冠体育</a></dd>
                            <dd class="saba"><a href="/sports/index">沙巴体育</a></dd>
                            <dd class="bb last-dd"><a href="/sports/bb">BB体育</a></dd>
                        </dl>
                    </div> 
                </div>
            </li>
            
            <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票游戏</a>
            	<div class="nav-drop lottery-drop">
                	<div class="layout">
                    	<div class="return-panel fl">
                        	<h2>0.8%</h2>
                        	<span>日日返水</span>
                        </div>
                        <dl class="fl">
                            <dd class="bb"><a href="/lottery/keno#bb" onclick="$('.bb-menu').click();">BBIN彩票</a></dd>
                            <dd class="kg last-dd"><a href="/lottery/keno#kg" onclick="$('.kg-menu').click();">KG彩票</a></dd>
                        </dl>
                    </div> 
                </div>
            </li>
            <li class="<?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index" class="ss">优惠活动</a></li>
            <li class="<?=$this->setActive('/home/mobile') ?>"><a href="/home/mobile">手机投注</a></li>
			<li class="nav-contact"><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">在线客服</a></li>
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
//文字闪烁
var colori = 0;
function getColor(){
	colori++;
	switch(colori){ 
		case 1:return "#f3e00d";
		default:return "#ff0000";
	}
}
function colorful(){
	var color = getColor();
	$(".ss").css("color",color);
	if(colori==2)colori=0;
}
setInterval('colorful()',400);
</script>


