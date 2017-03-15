<?php
Yii::app()->clientScript->registerScriptFile($this->getCdn(). "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
    <div class="mod-games">
        <div class="layout games-platform-wrap">
            <div class="games-hd-menu">
                <ul class="clearfix">
                    <li target="pt-item" class="pt-menu current"><span>PT游戏厅</span></li>
                    <li target="mg-item" class="mg-menu"><span>MG游戏厅</span></li>
                </ul>
            </div>
            <div class="games-panes clearfix">
                <!-- PT游戏厅 -->
                <div class="games-platform-item pt-item pr">
                    <ul class="games-sub-menu clearfix">
                        <?= $this->renderPartial('/game/ptMenu') ?>
                        <li class="tab7 games-pt-search" style="display:none;"><span>搜索结果</span></li>
                    </ul>
                    <div class="search-wrap clearfix"><input type="text" id="pt-keyword" placeholder="PT游戏搜索" /><a href="javascript:void(0);" onclick="pt_search();"></a></div>
                    <div id="ptgame_list" class="games-list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/ptGameList') ?>
                            <ul id="pt-search-result" class="clearfix hide"></ul>
                        </div>
                    </div>
                </div>
                
                <!-- MG游戏厅 -->
                <div class="games-platform-item mg-item hide pr">
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
            </div>
        </div>
    </div>
</div>

<!-- PT累计奖池 -->
<script type="text/javascript" src="/js/game/ptJackpot.js"></script>
<!-- end PT累计奖池 -->

<script type="text/javascript">
$(document).ready(function(){
    $(".games-hd-menu").find("li").click(function(){
        if($(this).hasClass("ttgs-menu")) return;
        $(".games-hd-menu").find("li.current").removeClass("current");
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
