<?php
    $this->layout = 'home';
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
    <div class="mod-home">
		<div class="mod-banner">
            <div class="layout pr">
                <div class="slide-wrap" id="slides">
                    <?=Helper::GetSiteTextInfo(101);?>
                </div>
                <div class="hd-notice">
                    <div class="hd-service"><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')">在线客服</a></div>
                    <!-- 公告 -->
                    <?= $this->renderPartial('/layouts/notice') ?>
                    <!--end 公告 -->
                </div>
            </div>
        </div>
        <div class="layout">
            <div class="mod-link">
                <ul class="clearfix">
                    <li class="link-register cur"><a href="/home/register"></a></li>
                    <li class="link-mobile"><a href="/home/mobile"></a></li>
                    <li class="link-download"><a href="/home/mobile"></a></li>
                    <li class="link-solt"><a href="/game/index"></a></li>
                    <li class="link-promotion"><a href="/promotions/index"></a></li>
                </ul>
            </div>
            <div class="games-link m-t-20">
                <ul class="clearfix">
                    <li class="img-live"><a href="/liveCasino/index"><p>提供真人百家乐、骰宝、龙虎斗、轮盘、欧美真人百家乐…等多种精彩真人视讯游戏面向全球玩家。</p></a></li>
                    <li class="img-sports"><a href="/sports/hg"><p>为您提供最全面赛前及滚球投注服务，最热门的体育投注类型，为您营造最好的赔率，创造最大价值。</p></a></li>
                    <li class="img-lottery"><a href="/lottery/keno"><p>多款彩票游戏，提供最高赔率，所有赛果依据官方开奖结果。给您一夜致富的机会及空前的游戏体验！</p></a></li>
                </ul>
                <div class="img-link">
                    <span class="info-register"><a href="/home/register"></a></span>
                    <span class="info-agent"><a href="/agent/home/index"></a></span>
                    <span class="info-promotions"><a href="/promotions/index"></a></span>
                </div>
            </div>
            <div class="games-wrap">
                <ul id="game-list" class="list-wrap">
                    <li class="game-pt on"><a href="javascript:void(0)"></a></li>
                    <li class="game-mg"><a href="javascript:void(0)"></a></li>
                    <li class="game-ag"><a href="javascript:void(0)"></a></li>
                </ul>
                <div class="content-info">
                    <div class="box-left">
                        <div class="home-jackpot"><iframe class="jackpot-wrap" src="/home/ticker" width="230" height="34" scrolling="no" frameborder="0" border="0" allowtransparency="true"></iframe></div>
                        <div class="game-king-marquee">
                            <ul>
                                <?=Helper::GetSiteTextInfo(23);?>
                           </ul>
                        </div>
                    </div>
                    <div class="box-right clearfix">
                        <!-- PT游戏厅 -->
                        <div class="games-platform-item pt-item">
                            <ul id="ptgame_list" class="games-item clearfix">
                                <li>
                                    <em class="game_gtshlksc"></em>
                                    <p class="fl">
                                        <span class="name">绿巨人刮刮乐</span><span class="num">玩家：<i>88304</i></span><span class="start"></span>
                                    </p>
                                </li>
                                <li>
                                    <em class="game_irm3sc"></em>
                                    <p class="fl">
                                        <span class="name">钢铁人2刮刮乐</span><span class="num">玩家：<i>84514</i></span><span class="start"></span>
                                    </p>
                                </li>
                                <li>
                                    <em class="game_zcjb"></em>
                                    <p class="fl">
                                        <span class="name">招财进宝</span><span class="num">玩家：<i>88304</i></span><span class="start"></span>
                                    </p>
                                </li>
                                <li>
                                    <em class="game_gts49"></em>
                                    <p class="fl">
                                        <span class="name">X战警刮刮乐</span><span class="num">玩家：<i>84514</i></span><span class="start"></span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- MG游戏厅 -->
                        <div class="games-platform-item mg-item hide pr">
                            <ul id="mggame_list" class="games-item clearfix">
                                <li>
                                    <span class="gameborder"><em gameid="ReelGems" class="ReelGems"></em></span>
                                    <p class="fl">
                                        <span class="name">宝石迷阵</span><span class="num">玩家：<i>88304</i></span></span><span class="start"></span>
                                    </p>
                                </li>
                                <li>
                                    <span class="gameborder"><em gameid="BreakAway" class="BreakAway"></em></span>
                                    <p class="fl">
                                        <span class="name">冰球联盟</span><span class="num">玩家：<i>84514</i></span></span><span class="start"></span>
                                    </p>
                                </li>
                                <li>
                                    <span class="gameborder"><em gameid="FootballStar" class="FootballStar"></em></span>
                                    <p class="fl">
                                        <span class="name">足球明星</span><span class="num">玩家：<i>88304</i></span></span><span class="start"></span>
                                    </p>
                                </li>
                                <li>
                                    <span class="gameborder"><em gameid="LuckyFirecracker" class="LuckyFirecracker"></em></span>
                                    <p class="fl">
                                        <span class="name">招财鞭炮</span><span class="num">玩家：<i>84514</i></span></span><span class="start"></span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- AG游戏厅 -->
                        <div class="games-platform-item ag-item hide">
                            <ul id="aggame_list" class="games-item clearfix">
                                <li onclick="load_ag_by(<?= $this->is_login()?0:1; ?>);">
                                    <span class="gameborder"><em class="ag_game_fish"></em></span>
                                    <p class="fl">
                                        <span class="name">AG捕鱼</span><span class="num">玩家：<i>84514</i></span><span class="start"></span>
                                    </p>
                                </li>
                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                    <span class="gameborder"><em class="ag_game_01"></em></span>
                                    <p class="fl">
                                        <span class="name">性感女仆</span><span class="num">玩家：<i>64514</i></span><span class="start"></span>
                                    </p>
                                </li>
                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                    <span class="gameborder"><em class="ag_game_02"></em></span>
                                    <p class="fl">
                                        <span class="name">灵猴献瑞</span><span class="num">玩家：<i>78376</i></span><span class="start"></span>
                                    </p>
                                </li>
                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                    <span class="gameborder"><em class="ag_game_03"></em></span>
                                    <p class="fl">
                                        <span class="name">杰克高手</span><span class="num">玩家：<i>28192</i></span><span class="start"></span>
                                    </p>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="promo-link">
                        <span class="promo-register"><a href="/home/register"></a></span>
                        <span class="promo-promotions"><a href="/agent/home/index"></a></span>
                        <span class="promo-agent"><a href="/promotions/index"></a></span>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript" src="<?=$this->getCdn();?>/static/js/jquery.cycle.all.js"></script>
<script>
$(document).ready(function(){
	//只是首页 - 公告滚动
    $(document).ready(function(){
		$('.marquee').marquee('destroy');
        $('.mod-home .marquee').marquee({
            duration:30000,
            gap: 100,
            delayBeforeStart:-10000,
            direction: 'up',
            duplicated: true,
            pauseOnHover:true
        });
    });
	
    //首页图片单击
    $(".mod-link ul li").click(function(){
        $(this).addClass("cur").siblings("li").removeClass("cur");
    });
	
    //最新出入款消息
    $('.game-king-marquee').marquee({
        duration: 8000,
        gap: 0,
        delayBeforeStart: -6000,
        direction: 'up',
        duplicated: true,
        pauseOnHover:true
    });
    $("ul#game-list li").click(function(){
        var myindex=$(this).index();
        $(this).addClass("on").siblings("li").removeClass("on");
        $(this).parents("#game-list").siblings(".content-info").find(".games-platform-item").eq(myindex).removeClass("hide").siblings(".games-platform-item").addClass("hide");
    });
    
    $('#mggame_list li').bind('click',function(){
        var gameId = $(this).find("em").attr("gameid");
        load_mg(<?=$mg_status?>,gameId);
    });

    $('#ptgame_list li').bind('click',function(){
        var gameId = $(this).find("em").attr("class").replace('game_','');
        load_pt('<?=PT::PT_RE ?>',<?=$pt_status ?>,gameId);
    });
});
</script>
<?=Helper::GetSiteTextInfo(31);?>