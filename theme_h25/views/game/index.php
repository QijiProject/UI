<?php
$pt_playername = "";if($this->is_login()){$user = $this->user;$pt_playername = 'KY_'.$user['gpn'];}
?>
<div class="content">
    <div class="mod-games m-t-20">
        <div class="layout games-platform-wrap">
            <div class="hd-menu">
                <ul class="clearfix">
                    <li target="mg-item" class="mg-menu current"><span>MG游戏厅</span></li>
                    <li target="pt-item" class="pt-menu"><span>PT游戏厅</span></li>
                    <li target="ag-item" class="ag-menu"><span>AG游戏厅</span></li>
                    <li target="nt-item" class="nt-menu"><span>NT游戏厅</span></li>
                </ul>
            </div>
            <div class="games-panes clearfix">
                <!-- MG游戏厅 -->
                <div class="games-platform-item mg-item">
                    <ul class="games-sub-menu clearfix">
                        <?= $this->renderPartial('/game/mgMenu') ?>
                    </ul>
                    <div id="mggame_list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/mgGameList') ?>
                        </div>
                    </div>
                </div>
                
                <!-- PT游戏厅 -->
                <div class="games-platform-item pt-item hide">
                    <a class="pt-pc-download" id="pt_download_start" href="javascript:void(0);">PT客户端下载</a>
                    <ul class="games-sub-menu clearfix">
                        <?= $this->renderPartial('/game/ptMenu') ?>
                    </ul>
                    <div id="ptgame_list">
                        <div class="games-item clearfix">
                            <?= $this->renderPartial('/game/ptGameList') ?>
                            <ul id="pt-search-result" class="clearfix hide"></ul>
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
					<div id="ntgame_list">
						<div class="games-item clearfix">
							<?= $this->renderPartial('/game/ntGameList',array('nt_status'=>$nt_status)) ?>
						</div>
					</div>
				</div> 
            </div>
        </div>
    </div>
</div>

<!-- PT电游客户端下载 -->
<?= $this->renderPartial('/game/ptClientDownload',array('pt_playername'=>$pt_playername,'name'=>'鼎盈国际')) ?>
<!-- end PT电游客户端下载 -->

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
    
    //电子游戏导航下拉菜单点击选择对应平台
    var ml = window.location.href.split("#");
    if(ml.length>0)ml = ml[1];
    var oo = $("."+ml+"-menu");
    if(oo.length>0){oo.click();}
});
</script>