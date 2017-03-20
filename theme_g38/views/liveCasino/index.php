<?php
/**
* .

* Date: 15/1/8
* Time: 17:05
*/
Yii::app()->clientScript->registerScriptFile($this->getCdn(). "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
    <div class="mod-live-casino">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap" id="slides">
                <?=Helper::GetSiteTextInfo(102);?>
            </div>
            <!--end 焦点图-->
        </div>
        <!--notice-->
        <?= $this->themeLayout('notice') ?>
        <!--notice end-->
        <div class="mod-content">
            <div class="l-c-platform layout m-t-20">
                <ul class="clearfix">
                    <li class="ag-play-btn">
                        <div class="game-detail">
                            <p class="detail">独创6张牌先发，多种创新玩法，提供咪牌百家乐、包桌百家乐、免佣百家乐等游戏</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick="get_ag_gc(<?=$ag_status ?>,<?=AsiaGames::GP_TYPE ?>);">进入游戏</a>
                            </p>
                        </div>
                    </li>
                    <li class="gd-play-btn">
                        <div class="game-detail">
                            <p class="detail">集合众多美女荷官，支持不同游戏同台下注，提供百家乐、龙虎、骰宝等多款游戏</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick='get_gd_gc(<?=$gd_status ?>,<?=GoldDeluxe::GP_TYPE?>,"");'>进入游戏</a>
                            </p>
                        </div>
                    </li>
                    <li class="allbet-play-btn">
                        <div class="game-detail">
                            <p class="detail">与菲律宾规模最大的赌场联手打造现场投注新平台，现场视频直播，尊荣唯您独享</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick="load_allbet(<?=$allbet_status ?>);">进入游戏</a>
                            </p>
                        </div>
                    </li>
                    <li class="bb-play-btn">
                        <div class="game-detail">
                            <p class="detail">平台稳定细致, 现场管理严格科学, 界面符合亚洲人使用习惯，多年来深受玩家欢迎</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick="load_bbin_ld(<?=$bbin_status ?>,<?=BBIN::LD?>,'live');">进入游戏</a>
                            </p>
                        </div>
                    </li>
                    <li class="salon-play-btn">
                        <div class="game-detail">
                            <p class="detail">亚洲地区发展最快的线上游戏平台，画质清晰，系统稳定性高</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick="load_salon_ld(<?= $salon_status?>)">进入游戏</a>
                            </p>
                        </div>
                    </li>
                    <li class="mg-play-btn">
                        <div class="game-detail">
                            <p class="detail">目前全球最具影响力及实力的博彩平台，是世界上第一个品牌真人-花花公子荷官的创始公司</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick="load_mg_ld(<?=$mg_status ?>,'')">进入游戏</a>
                            </p>
                        </div>
                    </li>
                    <li class="pt-play-btn">
                        <div class="game-detail">
                            <p class="detail">全称playtech，于1999年成立于欧洲塔尔图，最具影响力的老牌平台</p>
                            <p class="btn">
                                <a href="javascript:void(0);" onclick="load_pt('<?=PT::PT_LD ?>',<?=$pt_status ?>,'plba');">进入游戏</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
<input type="hidden" id="is_login" value="<?=$this->is_login() ?>">
