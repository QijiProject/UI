<?php
    $this->layout = 'home';
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="mod-banner">
    <!--焦点图-->
    <div class="slide-wrap clearfix" id="slides">
        <?=Helper::GetSiteTextInfo(101);?>
        <ul><li style="display:block;"><img src="/static/images/home_banner_01.jpg" /></li></ul>
    </div>
    <!--end 焦点图-->
    <!-- 公告 -->
    <?= $this->renderPartial('/layouts/notice') ?>
    <!--end 公告 -->
</div>
<div class="content">
    <div class="hd-menu">
        <ul class="layout">
            <li class="pt-menu active" data-target="ptgame_list"><i></i>PT 游戏厅</li>
            <li class="mg-menu" data-target="mggame_list"><i></i>MG 游戏厅</li>
            <li class="bb-menu" data-target="bbgame_list"><i></i>BBIN 游戏厅</li>
            <li class="ag-menu" data-target="aggame_list"><i></i>AG 游戏厅</li>
            <li class="nt-menu" data-target="ntgame_list"><i></i>NT 游戏厅</li>
        </ul>
    </div>
    <!-- 游戏厅 -->
    <div class="home-games">
        <div class="layout">
            <div class="games-menu fl">
                <ul id="ptgame_list" class="active clearfix">
                    <li class="pt-1">
                        <em class="game_gtshlksc"></em>
                        <div class="game-name">绿巨人刮刮乐</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="pt-2">
                        <em class="game_irm3sc"></em>
                        <div class="game-name">钢铁人2刮刮乐</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="pt-3">
                        <em class="game_zcjb"></em>
                        <div class="game-name">招财进宝</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="pt-4">
                        <em class="game_gts49"></em>
                        <div class="game-name">X战警刮刮乐</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="pt-5">
                        <em class="game_al"></em>
                        <div class="game-name">炼金术师实验室</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="pt-6">
                        <em class="game_fm"></em>
                        <div class="game-name">古怪猴子</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                </ul>

                <ul id="mggame_list" class="hide clearfix">
                    <li class="mg-1">
                        <em gameid="ReelGems" class="ReelGems"></em>
                        <div class="game-name">宝石迷阵</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="mg-2">
                        <em gameid="BreakAway" class="BreakAway"></em>
                        <div class="game-name">冰球联盟</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="mg-3">
                        <em gameid="FootballStar" class="FootballStar"></em>
                        <div class="game-name">足球明星</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="mg-4">
                        <em gameid="LuckyFirecracker" class="LuckyFirecracker"></em>
                        <div class="game-name">招财鞭炮</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="mg-5">
                        <em gameid="Playboy" class="Playboy"></em>
                        <div class="game-name">花花公子</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="mg-6">
                        <em gameid="GoldFactory" class="GoldFactory"></em>
                        <div class="game-name">黄金工厂</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                </ul>
              
                <ul id="bbgame_list" class="hide clearfix">
                    <li class="bb-1">
                        <em class="Game_5106"></em>
                        <div class="game-name">三国</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="bb-2">
                        <em class="Game_5044"></em>
                        <div class="game-name">明星97II</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="bb-3">
                        <em class="Game_5094"></em>
                        <div class="game-name">金瓶梅2</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="bb-4">
                        <em class="Game_5049"></em>
                        <div class="game-name">玉蒲团</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="bb-5">
                        <em class="Game_5404"></em>
                        <div class="game-name">沙滩排球</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="bb-6">
                        <em class="Game_5901"></em>
                        <div class="game-name">连环夺宝</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                </ul>
              
                <ul id="aggame_list" class="hide clearfix">
                    <li class="ag-1" onclick="load_ag_by("<?= $this->is_login()?0:1; ?>);">
                        <em class="ag_game_fish"></em>
                        <div class="game-name">捕鱼王2</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="ag-2" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                        <em class="ag_game_items"></em>
                        <div class="game-name">性感女仆</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="ag-3" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                        <em class="ag_game_items"></em>
                        <div class="game-name">灵猴献瑞</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="ag-4" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                        <em class="ag_game_items"></em>
                        <div class="game-name">杰克高手</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="ag-5" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                        <em class="ag_game_items"></em>
                        <div class="game-name">水果拉霸</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="ag-6" onclick="load_ag_game("<?= $this->is_login()?0:1; ?>);">
                        <em class="ag_game_items"></em>
                        <div class="game-name">幸运8</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                </ul>
              
                <ul id="ntgame_list" class="hide clearfix">
                    <li class="nt-1">
                        <em class="nt_attraction"></em>
                        <div class="game-name">引力</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="nt-2">
                        <em class="nt_beach"></em>
                        <div class="game-name">阳光海滩</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="nt-3">
                        <em class="nt_bigbang"></em>
                        <div class="game-name">宇宙大爆炸</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="nt-4">
                        <em class="nt_demolitionsquad"></em>
                        <div class="game-name">破坏小组</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="nt-5">
                        <em class="nt_alienrobots"></em>
                        <div class="game-name">机器外星人</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                    <li class="nt-6">
                        <em class="nt_bloodsuckers"></em>
                        <div class="game-name">吸血鬼</div>
                        <div class="game-rollover clearfix"><a href="javascript:void(0);" class="real-play">立刻开始</a></div>
                    </li>
                </ul>
              
                <span class="tac">PT ( palytech ) 平台是欧盟最热门的游戏平台之一，该平台开发的漫威主题系列游戏深受广大玩家喜爱，风靡全球，精彩刺激，爱不释手...</span>
            </div>
            <div class="jackpot-wrap fr">
                <div class="jackpot-amount">
                    超级彩金
                    <iframe src="/home/ticker2" width="190" height="30" scrolling="no" frameborder="0" border="0" allowtransparency="true"></iframe>
                </div>
                <div class="jackpot-winner m-t-20">
                    <div class="jackpot-title">超级赢家榜</div>
                    <div class="clearfix">
                        <span>客户ID</span>
                        <span>金额</span>
                        <span>游戏名称</span>
                    </div>
                    <div id="jackpotScroll" class="jackpot-scroll">
                      <ul>
                          <?=Helper::GetSiteTextInfo(23);?>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: 游戏厅 -->
  
    <!-- 真人娱乐 -->
    <div class="home-live">
        <div class="layout">
            <div class="live-games pr">
                <a href="#" class="live-casino active hover"></a>
                <a href="#" class="live-sport"></a>
                <a href="#" class="live-lottery"></a>
            </div>
        </div>
    </div>
    <!-- END: 真人娱乐 -->
  
    <!-- 手机游艺 -->
    <div class="home-mobile">
        <div class="layout pr">
          <span class="mobile-icon fl"></span>
          <div class="mobile-details fr">
              <h2>随时随地 畅享手机游艺</h2>
              <span class="m-t-20">手机投注平台面向全网玩家，提供近万款电子游艺，老虎机， 百家乐以及彩票游戏，体育投注，线上存款及先上取款，一起操作，运用3D即时运算创造真实场景结合立体影像，完整规划的跨系统娱乐平台，整合同步账号和资料传输，达到随时随地不间断娱乐的享受概念。</span>
              <span class="mobile-support">支持iOS &amp; Android所有移动设备</span>
              <span class="mobile-payment"></span>
          </div>
        </div>
    </div>
    <!-- END: 手机游艺 -->
  
    <!-- 关于 -->
    <div class="home-about">
        <div class="layout">
            <h2>关于澳门银河娱乐城</h2>
            <span>在市场上众多的博彩网站中，玩家选择澳门银河娱乐城除了多元化的产品，也是因为我们在业界拥有良好的信誉口碑，以及高质量的服务，我们的用心随处可见，绝无任何恶意软件，并获得GEOTRUST国际认证，确保网站公平公正性，所有会员数据均经过加密，保障玩家隐私。我们以服务会员不打烊的精神，24小时处理会员出入款相关事宜，令我们骄傲的客服团队，亲切有专业，解决玩家对于网站、游戏的种种疑难杂症，让每位玩家有宾至如归的感觉！您所想要的，就是我们一直追求的，我们绝对是您的最佳选择。</span>
        </div>
    </div>
    <!-- END: 关于 -->
</div>

<script src="<?=$this->getCdn();?>/js/jquery/jquery.scrollbox.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
      // jackpot winner scrollbox
      $("#jackpotScroll").scrollbox({
          linear: true,
          step: 1,
          delay: 0,
          speed: 100
      });
                        
      // live games mouseover
      $(".live-games > a").mouseover(function(){
          $(".live-games > a").removeClass("hover");
          $(this).addClass("hover");
      
          $(".live-games > a").removeClass("active");
          $(this).addClass("active");
          
          if ($(this).hasClass("live-lottery")){
              $(".live-games > a.live-sport").addClass("active");
          }
      });
      
      $(".hd-menu").find("li").mouseover(function(){
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
