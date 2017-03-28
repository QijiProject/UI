<?php
$pt_playername = "";if($this->is_login()){$user = $this->user;$pt_playername = 'KY_'.$user['gpn'];}
?>
<div class="content">
    <div class="mod-games">
        <div class="layout games-platform-wrap">
            <div class="hd-menu">
                <ul class="clearfix">
                    <li class="current mg-menu" target="mg-item">
                        <i></i>
                        <h2>MG 游戏厅</h2>
                    </li>
                    <li class="pt-menu" target="pt-item">
                        <i></i>
                        <h2>PT 游戏厅</h2>
                    </li>
                     <li class="bb-menu" target="bb-item">
                        <i></i>
                        <h2>BBIN 游戏厅</h2>
                    </li>
                     <li class="ag-menu" target="ag-item">
                        <i></i>
                        <h2>AG 游戏厅</h2>
                    </li>
                     <li class="nt-menu" target="nt-item">
                        <i></i>
                        <h2>NT 游戏厅</h2>
                    </li>
                </ul>
            </div>
            <div class="games-panes clearfix">
                <!-- MG游戏厅 -->
                <div class="games-platform-item mg-item pr">
                    <ul class="games-sub-menu clearfix">
                        <?= $this->renderPartial('/game/mgMenu') ?>
                        <li class="tab11 games-mg-search" style="display:none;"><span>搜索结果</span></li>
                    </ul>
                    <div class="search-wrap clearfix"><input type="text" id="mg-keyword" placeholder="MG游戏搜索" /><a onclick="mg_search();" href="javascript:void(0);"></a></div>
                    <div id="mggame_list" class="games-list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/mgGameList') ?>
                            <ul id="mg-search-result" class="clearfix hide"></ul>
                        </div>
                    </div>
                </div>
                
                <!-- PT游戏厅 -->
                <div class="games-platform-item pt-item hide pr">
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
                <div class="games-platform-item bb-item hide pr">
                    <ul class="games-sub-menu clearfix">
                        <?= $this->renderPartial('/game/bbMenu') ?>
                        <li class="tab9 games-bb-search" style="display:none;"><span>搜索结果</span></li>
                    </ul>
                    <div class="search-wrap clearfix"><input type="text" id="bb-keyword" placeholder="BBIN游戏搜索" /><a href="javascript:void(0);" onclick="bb_search();"></a></div>
                    <div id="bbgame_list" class="games-list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/bbGameList') ?>
                            <ul id="bb-search-result" class="clearfix hide"></ul>
                        </div>
                    </div>
                </div>
                    
                <!-- AG游戏厅 -->
                <div class="games-platform-item ag-item hide">
                    <div id="aggame_list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/agGameList') ?>
                        </div>
                    </div>
                </div>
                
                <!-- NT游戏厅 -->
                <div class="games-platform-item nt-item hide pr">
                    <ul class="games-sub-menu clearfix">
                        <?= $this->renderPartial('/game/ntMenu') ?>
                        <li class="tab4 games-nt-search" style="display:none;"><span>搜索结果</span></li>
                    </ul>
                    <div class="search-wrap clearfix"><input type="text" id="nt-keyword" placeholder="NT游戏搜索" /><a href="javascript:void(0);" onclick="nt_search();"></a></div>
                    <div id="ntgame_list" class="games-list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/ntGameList',array('nt_status'=>$nt_status)) ?>
                            <ul id="nt-search-result" class="clearfix hide"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PT累计奖池 -->
<script type="text/javascript" src="/js/game/ptJackpot.js"></script>
<!-- end PT累计奖池 -->

<script type="text/javascript">
$(document).ready(function(){
    $(".hd-menu").find("li").click(function(){
        $(".hd-menu").find("li.current").removeClass("current");
        $(this).addClass("current");
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
    //导航下拉菜单点击选择对应平台
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
<?= $this->renderPartial('/game/ptClientDownload',array('pt_playername'=>$pt_playername,'name'=>'JJ娱乐')) ?>
<!-- end PT电游客户端下载 -->
