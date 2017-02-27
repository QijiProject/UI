<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/game/Game.js",CClientScript::POS_END);
$pt_playername = "";
if($this->is_login()){
    $user = $this->user;
    $pt_playername = 'KY_'.$user['gpn'];
}
?>
<div class="content mod-games">
    <div class="mod-banner">
        <!--焦点图-->
        <div class="slide-wrap" id="slides">
             <?=Helper::GetSiteTextInfo(104);?>
        </div>
        <!--end 焦点图-->
        <!-- 公告 -->
        <?= $this->renderPartial('/layouts/notice') ?>
        <!--end 公告 -->
    </div>
    
    <div class="platform-wrap pr m-t-20">
        <div class="hd-menu">
            <ul class="clearfix">
                <li class="mg-menu active" target="mg-item">
                    <i></i><h2>MG 游戏厅</h2>
                </li>
                <li class="pt-menu" target="pt-item">
                    <i></i><h2>PT 游戏厅</h2>
                </li>
                 <li class="bb-menu" target="bb-item">
                    <i></i><h2>BB 游戏厅</h2>
                </li>
                <li class="ag-menu" target="ag-item">
                    <i></i><h2>AG 游戏厅</h2>
                </li>
                <li class="nt-menu" target="nt-item">
                    <i></i><h2>NT 游戏厅</h2>
                </li>
            </ul>
        </div>
        <div class="games-panes clearfix">
            <!-- MG游戏厅 -->
            <div class="games-platform-item mg-item ">
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/mgMenu') ?>
                </ul>
                <div class="game-search">
                    <input type="text" placeholder="MG游戏搜索" />
                </div>
                <div id="mggame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/mgGameList') ?>
                    </div>
                </div>
            </div>
          
            <!-- PT游戏厅 -->
           <div class="games-platform-item pt-item pr hide">
                <a class="pt-pc-download" id="pt_download_start" href="javascript:void(0);">PT客户端下载</a>
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/ptMenu') ?>
                </ul>
                <div class="game-search">
                    <input type="text" placeholder="PT游戏搜索" />
                </div>
                <div id="ptgame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/ptGameList') ?>
                    </div>
                </div>
            </div>
            
            <!-- BB游戏厅 -->
            <div class="games-platform-item bb-item hide">
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/bbMenu') ?>
                </ul>
                <div class="game-search">
                    <input type="text" placeholder="BB游戏搜索" />
                </div>
                <div id="bbgame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/bbGameList') ?>
                    </div>
                </div>
            </div>
            
            <!-- AG游戏厅 -->
            <div class="games-platform-item ag-item hide">
                <div id="aggame_list" class="games-list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/agGameList') ?>
                    </div>
                </div>
            </div>
            
            <!-- NT游戏厅 -->
            <div class="games-platform-item nt-item hide">
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/ntMenu') ?>
                </ul>
                <div class="game-search">
                    <input type="text" placeholder="NT游戏搜索" />
                </div>
                <div id="ntgame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/ntGameList',array('nt_status'=>$nt_status)) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $(".hd-menu").find("li").click(function(){
        $(".hd-menu").find("li.active").removeClass("active");
        $(this).addClass("active");
        $(".games-platform-item").hide();
        $("div."+$(this).attr("target")).show();
        $(".games-sub-menu:visible").find("li:first").click();
    });

    $(".games-sub-menu").find("li").click(function(){
        $(".games-sub-menu").find(".current").removeClass("current");
        var index = $(this).attr("class").replace("tab",'');
        index = parseInt(index)-1;
        $(this).addClass("current");
        $(".games-item:visible").find("ul").addClass("hide");
        $(".games-item:visible").find("ul:eq("+index+")").removeClass("hide");
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
    
    //电子游戏导航下拉菜单点击选择对应平台
    var ml = window.location.href.split("#");
    if(ml.length>0)ml = ml[1];
    var oo = $("."+ml+"-menu");
    if(oo.length>0){oo.click();}
});
</script>

<!-- PT电游客户端下载 -->
<?= $this->renderPartial('/game/ptClientDownload',array('pt_playername'=>$pt_playername,'name'=>'澳门金沙')) ?>
<!-- end PT电游客户端下载 -->