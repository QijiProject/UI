<?php
    $this->layout = 'home';
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="mod-banner">
    <!--焦点图-->
    <div class="slide-wrap clearfix" id="slides">
        <?=Helper::GetSiteTextInfo(101);?>
        <ul>
            <li style="display:block;"><img src="/static/images/home_banner_01.png" /></li>
            <li><img src="/static/images/home_banner_02.jpg" /></li>
        </ul>
    </div>
    <!--end 焦点图-->
    <!-- 公告 -->
    <?= $this->renderPartial('/layouts/notice') ?>
    <!--end 公告 -->
</div>
<div class="content">
    <!-- 真人娱乐 -->
    <div class="home-live">
        <div class="layout">
            <span class="live-title">澳门新葡京赌场汇集了世界上最顶级的电子、视讯、足球、彩票平台；玩法多样，种类繁多；让广大玩家玩得更尽兴，更舒畅；更有首存彩金，各种游戏优惠等你来体验</span>
            <ul>
                <li class="live-casino"><a href="/liveCasino/index"><i></i><span class="cn-title">真人视讯</span><span class="en-title">LIVE CASINO</span></a></li>
                <li class="live-aglive"><a href="/liveCasino/index"><i></i><span class="cn-title">AG女优厅</span><span class="en-title">AGLIVE</span></a></li>
                <li class="live-slots"><a href="/game/index"><i></i><span class="cn-title">电子游艺</span><span class="en-title">SLOTS</span></a></li>
                <li class="live-promotions"><a href="/promotions/index"><i></i><span class="cn-title">优惠活动</span><span class="en-title">PROMOTIONS</span></a></li>
            </ul>
        </div>
    </div>
    <!-- END: 真人娱乐 -->
  
    <!-- 游戏厅 -->
    <div class="home-games">
        <div class="layout">
            <ul class="jackpot-list clearfix">
                <li><span class="jackpot-title">MG超级奖池</span><span class="jackpot-amount">6768931.00元</span><i></i></li>
                <li><span class="jackpot-title">PT超级奖池</span><span class="jackpot-amount">6716535.00元</span><i></i></li>
                <li class="jackpot-bb"><span class="jackpot-title">BBIN超级奖池</span><span class="jackpot-amount">4285865.00元</span><i></i></li>
            </ul>
            <div class="jackpot-winner">
                <span>就在澳门新葡京赌场 仅此一家 您值得拥有</span>
                <div id="jackpotScroll" class="jackpot-scroll">
                    <ul>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                    </ul>
                </div>
                <div id="jackpotScroll" class="jackpot-scroll">
                    <ul>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                        <li>
                            <span class="state">北京</span>
										        <span class="username">ro***41854</span>
										        <span class="game">古怪的猴子</span>
										        <span class="amount">32000元</span>
                        </li>
                        <li>
                            <span class="state">湖南</span>
										        <span class="username">ow***23</span>
										        <span class="game">宝石之轮</span>
										        <span class="amount">46000元</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="games-wrap pr clearfix">
                <ul class="hd-menu fl">
                    <li class="mg-menu active" data-target="mggame_list"><h2>MG电子<span class="hot-icon"></span></h2><span>MICROGAMING</span><span class="tab-bg"></span></li>
                    <li class="pt-menu" data-target="ptgame_list"><h2>PT电子</h2><span>PLAYTECH</span><span class="tab-bg"></span></li>
                    <li class="bb-menu" data-target="bbgame_list"><h2>BBIN电子</h2><span>BBINGAMING</span><span class="tab-bg"></span></li>
                    <li class="ag-menu" data-target="aggame_list"><h2>AG电子</h2><span>ASIA GAMING</span><span class="tab-bg"></span></li>
                    <li class="nt-menu" data-target="ntgame_list"><h2>NT电子</h2><span>NETENT</span><span class="tab-bg"></span></li>
                </ul>
            
                <div class="games-menu fr">
                    <ul id="mggame_list" class="active clearfix">
                        <li class="mg-1">
                            <span class="hot-game"></span>
                            <em gameid="ReelGems" class="ReelGems"></em>
                            <div class="game-name">宝石迷阵</div>
                        </li>
                        <li class="mg-2">
                            <em gameid="Carnaval" class="Carnaval"></em>
                            <div class="game-name">狂欢节</div>
                        </li>
                        <li class="mg-3">
                            <span class="hot-game"></span>
                            <em gameid="FootballStar" class="FootballStar"></em>
                            <div class="game-name">足球明星</div>
                        </li>
                        <li class="mg-4">
                            <em gameid="LuckyFirecracker" class="LuckyFirecracker"></em>
                            <div class="game-name">招财鞭炮</div>
                        </li>
                        <li class="mg-5">
                            <span class="hot-game"></span>
                            <em gameid="Playboy" class="Playboy"></em>
                            <div class="game-name">花花公子</div>
                        </li>
                        <li class="mg-6">
                            <em gameid="GoldFactory" class="GoldFactory"></em>
                            <div class="game-name">黄金工厂</div>
                        </li>
                    </ul>
                  
                    <ul id="ptgame_list" class="hide clearfix">
                        <li class="pt-1">
                            <em class="game_gtshlksc"></em>
                            <div class="game-name">绿巨人刮刮乐</div>
                        </li>
                        <li class="pt-2">
                            <span class="hot-game"></span>
                            <em class="game_irm3sc"></em>
                            <div class="game-name">钢铁人2刮刮乐</div>
                        </li>
                        <li class="pt-3">
                            <em class="game_zcjb"></em>
                            <div class="game-name">招财进宝</div>
                        </li>
                        <li class="pt-4">
                            <span class="hot-game"></span>
                            <em class="game_gts49"></em>
                            <div class="game-name">X战警刮刮乐</div>
                        </li>
                        <li class="pt-5">
                            <em class="game_al"></em>
                            <div class="game-name">炼金术师实验室</div>
                        </li>
                        <li class="pt-6">
                            <em class="game_fm"></em>
                            <div class="game-name">古怪猴子</div>
                        </li>
                    </ul>

                    <ul id="bbgame_list" class="hide clearfix">
                        <li class="bb-1">
                            <span class="hot-game"></span>
                            <em class="Game_5901"></em>
                            <div class="game-name">连环夺宝</div>
                        </li>
                        <li class="bb-2">
                            <span class="hot-game"></span>
                            <em class="Game_5902"></em>
                            <div class="game-name">糖果派对</div>
                        </li>
                        <li class="bb-3">
                            <em class="Game_5094"></em>
                            <div class="game-name">金瓶梅2</div>
                        </li>
                        <li class="bb-4">
                            <em class="Game_5005"></em>
                            <div class="game-name">惑星战记</div>
                        </li>
                        <li class="bb-5">
                            <em class="Game_5404"></em>
                            <div class="game-name">沙滩排球</div>
                        </li>
                        <li class="bb-6">
                            <em class="Game_5106"></em>
                            <div class="game-name">三国</div>
                        </li>
                    </ul>
              
                    <ul id="aggame_list" class="hide clearfix">
                        <li class="ag-1" onclick="load_ag_by("<?= $this->is_login()?0:1; ?>);">
                            <span class="hot-game"></span>
                            <em class="ag_game_fish"></em>
                            <div class="game-name">捕鱼王2</div>
                        </li>
                        <li class="ag-2" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                            <em class="ag_game_items"></em>
                            <div class="game-name">性感女仆</div>
                        </li>
                        <li class="ag-3" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                            <em class="ag_game_items"></em>
                            <div class="game-name">灵猴献瑞</div>
                        </li>
                        <li class="ag-4" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                            <em class="ag_game_items"></em>
                            <div class="game-name">杰克高手</div>
                        </li>
                        <li class="ag-5" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                            <em class="ag_game_items"></em>
                            <div class="game-name">水果拉霸</div>
                        </li>
                        <li class="ag-6" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                            <span class="hot-game"></span>
                            <em class="ag_game_items"></em>
                            <div class="game-name">幸运8</div>
                        </li>
                    </ul>
              
                    <ul id="ntgame_list" class="hide clearfix">
                        <li class="nt-1">
                            <span class="hot-game"></span>
                            <em class="nt_attraction"></em>
                            <div class="game-name">引力</div>
                        </li>
                        <li class="nt-2">
                            <em class="nt_beach"></em>
                            <div class="game-name">阳光海滩</div>
                        </li>
                        <li class="nt-3">
                            <span class="hot-game"></span>
                            <em class="nt_bigbang"></em>
                            <div class="game-name">宇宙大爆炸</div>
                        </li>
                        <li class="nt-4">
                            <em class="nt_demolitionsquad"></em>
                            <div class="game-name">破坏小组</div>
                        </li>
                        <li class="nt-5">
                            <span class="hot-game"></span>
                            <em class="nt_alienrobots"></em>
                            <div class="game-name">机器外星人</div>
                        </li>
                        <li class="nt-6">
                            <em class="nt_bloodsuckers"></em>
                            <div class="game-name">吸血鬼</div>
                        </li>
                    </ul>
                </div>
            </div>
          
            <div class="more-games">
                <a href="/game/index">更多游戏<i></i></a>
            </div>
        </div>
    </div>
    <!-- END: 游戏厅 -->
  
    <!-- 手机游艺 -->
    <div class="home-mobile">
        <div class="layout pr">
          <div class="mobile-details">
              <h2>随时随地 想玩就玩</h2>
              <p class="sub-title">Mobile Betting Introduction</p>
              <p>全新模式，新颖设计更耐玩，汇集诸多精彩一一呈现；各国博彩精英、世界顶级博彩服务团队打造，享受随时随地、足不出户的博彩“游戏人生”!</p>
              <a href="/home/mobile">查看详情</a>
              <i class="mobile-bg"></i>
          </div>
        </div>
    </div>
    <!-- END: 手机游艺 -->
  
    <!-- 关于 -->
    <div class="home-about layout">
        <div class="about-top">
            <h2><span>关于我们</span> / About us</h2>
            <p>澳门新葡京赌场在线持牌经营博彩投注多年.是目前世界最大的网络博彩集团之一！持有菲律宾政府卡格扬经济特区 First Cagayan leisure and Resort Corporation颁发的体育博彩与线上赌场执照.网站所提供的所有产品和服务由菲律宾政府卡格扬经济特区First Cagayan leisure and Resort Corporation 所授权和监管.选择我们，您将拥有可靠的资金保障和优势服务.我们对"小赌怡情，健康博彩"的宗旨非常重视.我们希望客户在投注时获得的快乐，但也希望博彩不会影响到玩家的财政状况和生活.我们不允许未满18岁的青少年参与投注和领奖.如果您未满18岁，请马上退出本站.</p>
        </div>
        <div class="about-bottom">
            <ul class="about-desc fl">
                <li><span>3</span>秒<p>存款到账</p></li>
                <li><span>5</span>秒<p>取款到账</p></li>
                <li><span>20</span>家<p>合作银行</p></li>
                <li><span>6</span>家<p>游戏平台</p></li>
            </ul>
            <div class="about-stats fr">
                <p>最近24小时数据</p>
                <ul>
                    <li class="clearfix">
                        <span class="fl">活跃用户数</span>
                        <div class="stats-wrapper"><span>527,111人</span></div>
                    </li>
                    <li class="clearfix">
                        <span class="fl">累计注单量</span>
                        <div class="stats-wrapper"><span class="percent75">123,567,899注</span></div>
                    </li>
                    <li class="clearfix">
                        <span class="fl">累计存提款</span>
                        <div class="stats-wrapper"><span class="percent85">103456笔/30秒每笔</span></div>
                    </li>
                    <li class="clearfix">
                        <span class="fl">累计派彩量</span>
                        <div class="stats-wrapper"><span class="percent95">￥34819721.00元</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: 关于 -->
</div>

<script src="<?=$this->getCdn();?>/js/jquery/jquery.scrollbox.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
      // jackpot winner scrollbox
      $(".jackpot-scroll").scrollbox({
          linear: true,
          step: 1,
          delay: 0,
          speed: 100
      });
      
      $(".hd-menu").find("li").click(function(){
          $(".hd-menu").find("li.active").removeClass("active");
          $(this).addClass("active");
          //$(".games-platform-item").hide();
          $(".home-games .games-menu > ul").hide();
          $("ul#"+$(this).attr("data-target")).show();
          //$(".games-sub-menu:visible").find("li:first").click();
      });
    
      $('#mggame_list li').bind('click',function(){
          var gameId = $(this).find("em").attr("gameid");
          load_mg(<?=$mg_status?>,gameId);
      });

      $('#ptgame_list li').bind('click',function(){
          var gameId = $(this).find("em").attr("class").replace('game_','');
          load_pt('<?=PT::PT_RE ?>',<?=$pt_status ?>,gameId);
      });

      $('#bbgame_list li').bind('click',function(){
          var gameId = $(this).find("em").attr("class").replace('Game_','');
          load_bbin_game(<?=$bbin_status?>,'<?=BBIN::CH ?>',gameId);
      });
    
      $('#ntgame_list li').bind('click',function(){
          var gameId = $(this).find("em").attr("class").replace('nt_','').toLowerCase();
          load_nt(<?= $nt_status?>,gameId);
      });
  });
</script>
<?=Helper::GetSiteTextInfo(31);?>
