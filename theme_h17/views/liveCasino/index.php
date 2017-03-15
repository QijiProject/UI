<?php
Yii::app()->clientScript->registerScriptFile( "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
    <div class="mod-live-casino">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap clearfix" id="slides">
                <?=Helper::GetSiteTextInfo(102);?>
            </div>
            <!--end 焦点图-->
        </div>
        <div class="l-c-platform layout">
            <ul class="clearfix">
                <li class="ag-play-btn">
                    <div class="game-detail">
                        <p class="detail">独创6张牌先发，多种创新玩法，提供咪牌百家乐、包桌百家乐、免佣百家乐等游戏</p>
                      	<a href="javascript:void(0);" class="btn" onclick="get_ag_gc(<?=$ag_status ?>,<?=AsiaGames::GP_TYPE ?>);">进入游戏</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('.l-c-platform li').mouseover(function(){
                $(this).addClass('hover');
            });
            $('.l-c-platform li').mouseout(function(){
                $(this).removeClass('hover');
            });
        });
    </script>
</div>
<input type="hidden" id="is_login" value="<?=$this->is_login() ?>">