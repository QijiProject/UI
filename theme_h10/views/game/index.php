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
            <ul>
                <li style="display:block;"><img src="/static/images/games_banner_01.jpg" /></li>
            </ul>
        </div>
        <!--end 焦点图-->
        <!-- 公告 -->
        <?= $this->renderPartial('/layouts/notice') ?>
        <!--end 公告 -->
    </div>
    
    <div class="platform-wrap pr m-t-20">
        <ul class="hd-menu clearfix">
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
        <div class="games-panes clearfix">
            <!-- MG游戏厅 -->
            <div class="games-platform-item mg-item ">
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/mgMenu') ?>
                    <li class="tab11 games-mg-search" style="display:none;"><span>搜索结果</span></li>
                </ul>
                <div class="search-wrap clearfix"><input type="text" id="mg-keyword" placeholder="MG游戏搜索" /><a onclick="mg_search();" href="javascript:void(0);"></a></div>
                <div id="mggame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/mgGameList') ?>
                        <ul id="mg-search-result" class="clearfix hide"></ul>
                    </div>
                </div>
            </div>
          
            <!-- PT游戏厅 -->
           <div class="games-platform-item pt-item pr hide">
                <a class="pt-pc-download" id="pt_download_start" href="javascript:void(0);">PT客户端下载</a>
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/ptMenu') ?>
                    <li class="tab7 games-pt-search" style="display:none;"><span>搜索结果</span></li>
                </ul>
                <div class="search-wrap clearfix"><input type="text" id="pt-keyword" placeholder="PT游戏搜索" /><a href="javascript:void(0);" onclick="pt_search();"></a></div>
                <div id="ptgame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/ptGameList') ?>
                        <ul id="pt-search-result" class="clearfix hide"></ul>
                    </div>
                </div>
            </div>
            
            <!-- BB游戏厅 -->
            <div class="games-platform-item bb-item hide">
                <ul class="games-sub-menu clearfix">
                    <?= $this->renderPartial('/game/bbMenu') ?>
                    <li class="tab9 games-bb-search" style="display:none;"><span>搜索结果</span></li>
                </ul>
                <div class="search-wrap clearfix"><input type="text" id="bb-keyword" placeholder="BBIN游戏搜索" /><a href="javascript:void(0);" onclick="bb_search();"></a></div>
                <div id="bbgame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/bbGameList') ?>
                        <ul id="bb-search-result" class="clearfix hide"></ul>
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
                    <li class="tab4 games-nt-search" style="display:none;"><span>搜索结果</span></li>
                </ul>
                <div class="search-wrap clearfix"><input type="text" id="nt-keyword" placeholder="NT游戏搜索" /><a href="javascript:void(0);" onclick="nt_search();"></a></div>
                <div id="ntgame_list">
                    <div class="games-item clearfix">
                        <?= $this->renderPartial('/game/ntGameList',array('nt_status'=>$nt_status)) ?>
                        <ul id="nt-search-result" class="clearfix hide"></ul>
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
        if(!$(this).hasClass("games-pt-search")){
            $(".games-pt-search").hide();
        }
        if(!$(this).hasClass("games-mg-search")){
            $(".games-mg-search").hide();
        }
        if(!$(this).hasClass("games-bb-search")){
            $(".games-bb-search").hide();
        }
        if(!$(this).hasClass("games-nt-search")){
            $(".games-nt-search").hide();
        }
        
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
    
    $('#pt-keyword').keypress(function (e) {
        var key = e.which;
        if (key == 13) {pt_search();} 
    });
    
    $('#mg-keyword').keypress(function (e) {
        var key = e.which;
        if (key == 13) {mg_search();} 
    });
    
    $('#bb-keyword').keypress(function (e) {
        var key = e.which;
        if (key == 13) {bb_search();} 
    });
    
    $('#nt-keyword').keypress(function (e) {
        var key = e.which;
        if (key == 13) {nt_search();} 
    });
    
    //电子游戏导航下拉菜单点击选择对应平台
    var ml = window.location.href.split("#");
    if(ml.length>0)ml = ml[1];
    var oo = $("."+ml+"-menu");
    if(oo.length>0){oo.click();}
});

//pt-游戏搜索
function pt_search(){
    var b = [];
    var k = $("#pt-keyword").val();
    if(k=="")return;
    $(".games-pt-search").show().click();
    $("#pt-search-result").show().html('');
    $(".pt-item .game-name").each(function(){
        if($(this).html().indexOf(k)!=-1){
            $("#pt-search-result").append('<li>'+$(this).parent().html()+'</li>');
        }
    });
    $('#pt-search-result li').bind('click',function(){
       var gameId = $(this).find("em").attr("class").replace('game_','');
        load_pt('<?=PT::PT_RE ?>',<?=$pt_status ?>,gameId);
    });
}

//mg-游戏搜索
function mg_search(){
    var b = [];
    var k = $("#mg-keyword").val();
    if(k=="")return;
    $(".games-mg-search").show().click();
    $("#mg-search-result").html('');
    $(".mg-item .game-name").each(function(i){
        if($(this).html().indexOf(k)!=-1){
             console.log($(this).parent().html());
            $("#mg-search-result").append('<li>'+$(this).parent().html()+'</li>');
        }
    });
    $('#mg-search-result li').bind('click',function(){
        var gameId = $(this).find("em").attr("gameid");
        load_mg(<?=$mg_status?>,gameId);
    });
}

//bb-游戏搜索
function bb_search(){
    var b = [];
    var k = $("#bb-keyword").val();
    if(k=="")return;
    $(".games-bb-search").show().click();
    $("#bb-search-result").html('');
    $(".bb-item .game-name").each(function(){
        if($(this).html().indexOf(k)!=-1){
            $("#bb-search-result").append('<li>'+$(this).parent().html()+'</li>');
        }
    });
    $('#bb-search-result li').bind('click',function(){
       var gameId = $(this).find("em").attr("class").replace('Game_','');
       load_bbin_game(<?=$bbin_status?>,'<?=BBIN::CH ?>',gameId);
    });
}

//nt-游戏搜索
function nt_search(){
    var b = [];
    var k = $("#nt-keyword").val();
    if(k=="")return;
    $(".games-nt-search").show().click();
    $("#nt-search-result").html('');
    $(".nt-item .game-name").each(function(){
        if($(this).html().indexOf(k)!=-1){
            $("#nt-search-result").append('<li>'+$(this).parent().html()+'</li>');
        }
    });
    $('#nt-search-result li').bind('click',function(){
       var gameId = $(this).find("em").attr("class").replace('nt_','');
       load_nt(<?= $nt_status?>,gameId);
    });
}
</script>

<!-- PT电游客户端下载 -->
<?= $this->renderPartial('/game/ptClientDownload',array('pt_playername'=>$pt_playername,'name'=>'澳门新葡京赌场')) ?>
<!-- end PT电游客户端下载 -->