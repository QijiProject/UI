<?php
    $this->layout = 'home';
    $this->cls = '';
?>
<div class="content">
    <div class="home-content">
        <div class="mod-banner pr">
            <!--焦点图-->
            <div class="slide-wrap clearfix" id="slides">
                <?=Helper::GetSiteTextInfo(101);?>
            </div>
            <!--end 焦点图-->
            <!--notice-->
            <?= $this->themeLayout('notice') ?>
            <!--notice end-->        
        </div>
        <div class="home-subnav">
        	<div class="layout1100">
                <span class="subnav-title"></span>
                <ul class="clearfix">
                    <li class="home-subnav-bb"><a href="javascript:void(0);" onclick="load_bbin_ld(<?=$this->is_login()?0:1 ?>,'<?=BBIN::LD ?>','live')"><i></i></a></li>
                    <li class="home-subnav-ag"><a href="javascript:void(0);" onclick="get_ag_gc(<?=$this->is_login()?0:1 ?>,<?=AsiaGames::GP_TYPE ?>)"><i></i></a></li>
                    <li class="home-subnav-salon"><a href="javascript:void(0);" onclick="load_salon_ld(<?=$this->is_login()?0:1 ?>)"><i></i></a></li>
                    <li class="home-subnav-allbet"><a href="javascript:void(0);" onclick="load_allbet(<?=$this->is_login()?0:1 ?>);"><i></i></a></li>
                </ul>
                <div class="subnav-pay"></div>
           	</div>
        </div>
        <div class="home-tags">
            <div class="jackpot-top layout1100">
                <ul>
                    <li>
                        <p>MG超级奖池</p>
                        <em><span class="jackpot-num">9534000</span>.00</em>
                        <span></span>
                    </li>
                    <li>
                        <p>PT超级奖池</p>
                        <em><span class="jackpot-num">8081000</span>.00</em>
                        <span></span>
                    </li>
                    <li class="jackpot-bbin">
                        <p>BBIN超级奖池</p>
                        <em><span class="jackpot-num">8833000</span>.00</em>
                        <span></span>
                    </li>
                </ul>
            </div>
            <div class="jackpot-bottom layout1100">
                <div class="jackpot-title">
                    <img src="/static/images/home/home_jackpot_title.png">
                </div>
                <div class="player-list-01">
                    <div class="list-wrap-01">
                        <ul>
                            <?=Helper::GetSiteTextInfo(23);?>
                        </ul>
                    </div>
                </div>
                <div class="player-list-02">
                    <div class="list-wrap-02">
                        <ul>
                            <?=Helper::GetSiteTextInfo(24);?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tags-game">
                <div class="home-games-panes clearfix">
                    <div class="layout1100 pr">
                        <i class="game-right"></i>            
                    </div>
                    <div class="layout1100">
                        <div class="home-games-left">
                            <ul>
                                <li class="mg-menu current" target="mg-item">
                                    <em></em>
                                    <i></i>
                                    <h2>MG 电子<p>Microgaming</p></h2>
                                </li>
                                <li class="pt-menu" target="pt-item">
                                    <i></i>
                                    <h2>PT 电子<p>Playtech</p></h2>
                                </li>
                                
                                 <li class="bb-menu" target="bb-item">
                                    <i></i>
                                    <h2>BBIN 电子<p>Bbingaming</p></h2>
                                </li>
                                 <li class="ag-menu" target="ag-item">
                                    <i></i>
                                    <h2>AG 电子<p>Asiagaming</p></h2>
                                </li>
                                 <li class="nt-menu" target="nt-item">
                                    <i></i>
                                    <h2>NT 电子<p>NetEnt</p></h2>
                                </li>
                            </ul>
                        </div>
                        <div class="home-games-right">
                            <div class="games-right-wrap">
                                <!-- MG游戏厅 -->
                                <div class="games-platform-item mg-item">
                                    <div id="mggame_list">
                                        <div class="games-item clearfix">
                                            <ul class="clearfix">
                                                <li>
                                                    <em gameid="ReelGems" class="ReelGems"></em>
                                                    <div class="game-name">宝石迷阵 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em gameid="BreakAway" class="BreakAway"></em>
                                                    <div class="game-name">冰球联盟 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em gameid="FootballStar" class="FootballStar"></em>
                                                    <div class="game-name">足球明星 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em gameid="LuckyFirecracker" class="LuckyFirecracker"></em>
                                                    <div class="game-name">招财鞭炮 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em gameid="Playboy" class="Playboy"></em>
                                                    <div class="game-name">花花公子 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em gameid="GoldFactory" class="GoldFactory"></em>
                                                    <div class="game-name">黄金工厂 <p class="star"></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- PT游戏厅 -->
                                <div class="games-platform-item pt-item hide">
                                    <div id="ptgame_list">
                                        <div class="games-item clearfix">
                                            <ul class="clearfix">
                                                <li>
                                                    <i></i>
                                                    <em class="game_gtshlksc"></em>
                                                    <div class="game-name">绿巨人刮刮乐 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="game_irm3sc"></em>
                                                    <div class="game-name">钢铁人2刮刮乐 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em class="game_zcjb"></em>
                                                    <div class="game-name">招财进宝 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="game_gts49"></em>
                                                    <div class="game-name">X战警刮刮乐 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em class="game_al"></em>
                                                    <div class="game-name">炼金术师实验室 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="game_fm"></em>
                                                    <div class="game-name">古怪猴子 <p class="star"></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- BB游戏厅 -->
                                <div class="games-platform-item bb-item hide">
                                    <div id="bbgame_list">
                                        <div class="games-item clearfix">
                                            <ul class="clearfix">
                                                <li>
                                                    <i></i>
                                                    <em class="Game_5106"></em>
                                                    <div class="game-name">三国 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em class="Game_5044"></em>
                                                    <div class="game-name">明星97II <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="Game_5094"></em>
                                                    <div class="game-name">金瓶梅2 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="Game_5049"></em>
                                                    <div class="game-name">玉蒲团 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="Game_5404"></em>
                                                    <div class="game-name">沙滩排球 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="Game_5901"></em>
                                                    <div class="game-name">连环夺宝 <p class="star"></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- AG游戏厅 -->
                                <div class="games-platform-item ag-item hide">
                                    <div id="aggame_list">
                                        <div class="games-item clearfix">
                                            <ul class="clearfix">
                                                <li onclick="load_ag_by(<?= $this->is_login()?0:1; ?>);">
                                                    <i></i>
                                                    <em class="ag_game_fish"></em>
                                                    <div class="game-name">捕鱼王2 <p class="star"></p></div>
                                                </li>
                                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                                    <em class="ag_game_items_01"></em>
                                                    <div class="game-name">性感女仆 <p class="star"></p></div>
                                                </li>
                                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                                    <em class="ag_game_items_02"></em>
                                                    <div class="game-name">灵猴献瑞 <p class="star"></p></div>
                                                </li>
                                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                                    <em class="ag_game_items_03"></em>
                                                    <div class="game-name">杰克高手 <p class="star"></p></div>
                                                </li>
                                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                                    <em class="ag_game_items_04"></em>
                                                    <div class="game-name">水果拉霸 <p class="star"></p></div>
                                                </li>
                                                <li onclick="load_ag_game(<?= $this->is_login()?0:1; ?>);">
                                                    <i></i>
                                                    <em class="ag_game_items_05"></em>
                                                    <div class="game-name">幸运8 <p class="star"></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- NT游戏厅 -->
                                <div class="games-platform-item nt-item hide">
                                    <div id="ntgame_list">
                                        <div class="games-item clearfix">
                                            <ul class="clearfix">
                                                <li>
                                                    <i></i>
                                                    <em class="nt_attraction"></em>
                                                    <div class="game-name">引力 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="nt_beach"></em>
                                                    <div class="game-name">阳光海滩 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em class="nt_bigbang"></em>
                                                    <div class="game-name">宇宙大爆炸 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="nt_demolitionsquad"></em>
                                                    <div class="game-name">破坏小组 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <i></i>
                                                    <em class="nt_alienrobots"></em>
                                                    <div class="game-name">机器外星人 <p class="star"></p></div>
                                                </li>
                                                <li>
                                                    <em class="nt_bloodsuckers"></em>
                                                    <div class="game-name">吸血鬼 <p class="star"></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="games-more layout1100"><a href="/game/index">更多游戏 <i></i></a></div>
        </div>
        <div class="home-mobile"><div class="layout1100"></div></div>
        <div class="home-about">
            <div class="layout1100 home-about-wrap">
                <div class="top-wrap">
                    <h3><span>关于我们</span> / About us</h3>
                    <p>JJ娱乐城在线持牌经营博彩投注多年.是目前世界最大的网络博彩集团之一！持有老挝政府金三角经济特区颁发的体育博彩与线上赌场执照.网站所提供的所有产品和服务由老挝政府金三角经济特区所授权和监管.选择我们，您将拥有可靠的资金保障和优势服务.我们对"小赌怡情，健康博彩"的宗旨非常重视.我们希望客户在投注时获得的快乐，但也希望博彩不会影响到玩家的财政状况和生活.我们不允许未满18岁的青少年参与投注和领奖.如果您未满18岁，请马上退出本站</p>
                    <img src="/static/images/home/about_img.jpg">
                </div>
                <div class="bottom-wrap">
                    <div class="circle-txt">
                        <ul>
                            <li><p><span>3</span>秒</p><em>存款到账</em></li>
                            <li><p><span>5</span>秒</p><em>取款到账</em></li>
                            <li><p><span>20</span>家</p><em>合作银行</em></li>
                            <li><p><span>5</span>家</p><em>游戏平台</em></li>
                        </ul>
                    </div>
                    <div class="home-data">
                        <h4>最近24小时数据</h4>
                        <ul>
                            <li>
                                <span>活跃用户数</span>
                                <div class="data-line">
                                    <div class="data-01" style="width: 65%"><span class="about-num">331000</span>人</div>
                                </div>
                            </li>
                            <li>
                                <span>累计单注量</span>
                                <div class="data-line">
                                    <div class="data-02" style="width: 75%"><span class="about-num">416876122</span>注</div>
                                </div>
                            </li>
                            <li>
                                <span>累计存提量</span>
                                <div class="data-line">
                                    <div class="data-03" style="width: 85%"><span class="about-num">79522</span>笔／30秒每笔</div>
                                </div>
                            </li>
                            <li>
                                <span>累计派彩量</span>
                                <div class="data-line">
                                    <div class="data-04" style="width: 95%">¥<span class="about-num">34550000.</span>.00 元</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?=$this->getCdn();?>/js/jquery/jquery.scrollbox.js"></script>
<script src="/static/js/jquery.scrollbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //动态数字
    setInterval(function(){
        dynamicNum()
    },500)
    //英雄榜
    $('.list-wrap-01').scrollbox({
          linear: true,
          step: 1,
          delay: 0,
          speed: 100
    });
    $('.list-wrap-02').scrollbox({
          linear: true,
          step: 1,
          delay: 0,
          speed: 100
    });
    //首页动画控制
    setTimeout(function(){
        $('.home-money').addClass('stop');
    }, 2000)
    // jackpot
    setInterval(function(){
        $.each($('.home-money em'), function(index, value){
            var potNum = value.innerHTML.replace(/,/g, '');
            var random = Math.random().toString().substr(0, 7)*1000;
            setTimeout(function(){
                value.innerHTML = addCommas(parseInt(potNum) + parseFloat(random.toFixed(2)));
            },5000*Math.random())
        })
    }, 2000)
    
    //电子游戏平台
    $(".home-games-left").find("li").mouseover(function(){
        $(".home-games-left").find("li.current").removeClass("current");
        $(this).addClass("current");
        $(".games-platform-item").hide();
        $("div."+$(this).attr("target")).show();
        $(".games-sub-menu:visible").find("li:first").click();
    });

    $('#mggame_list li').bind('click',function(){
        var gameId = $(this).find("em").attr("gameid");
        load_mg(<?=$this->is_login()==true?0:1 ?>,gameId);
    });


    $('#ptgame_list li').bind('click',function(){
        var gameId = $(this).find("em").attr("class").replace('game_','');
        load_pt('<?=PT::PT_RE ?>',<?=$this->is_login()==true?0:1 ?>,gameId);
    });


    $('#bbgame_list li').bind('click',function(){
       var gameId = $(this).find("em").attr("class").replace('Game_','');
       load_bbin_game(<?=$this->is_login()==true?0:1?>,'<?=BBIN::CH ?>',gameId);

    });
    
    $(function(){
        $('#ntgame_list li').bind('click',function(){
            var gameId = $(this).find("em").attr("class").replace('nt_','').toLowerCase();
            load_nt(<?= $this->is_login()==true?0:1?>,gameId);
        });
    });
    
});
//动态数字
function dynamicNum(){
    $.each($('.jackpot-num'), function(key,value){
        var ini = $(value).html();
        ini = parseInt(ini);
        ini += randomNum(2);
        $(this).html(ini);
    })
    $.each($('.about-num'), function(key,value){
        var ini = $(value).html();
        ini = parseInt(ini);
        ini += randomNum(1);
        $(this).html(ini);
    })
}


//random num
function randomNum(scale){
    var ini = Math.random();
    var num = ini*Math.pow(10,scale);
    return parseInt(num.toFixed(0));
}

//format num
function addCommas(nStr){ 
    nStr += ''; 
    x = nStr.split('.'); 
    x1 = x[0]; 
    x2 = x.length > 1 ? '.' + x[1] : ''; 
    var rgx = /(\d+)(\d{3})/; 
    while (rgx.test(x1)) { 
        x1 = x1.replace(rgx, '$1' + ',' + '$2'); 
    } 
    return x1 + x2; 
} 


</script>
<?=Helper::GetSiteTextInfo(31);?>