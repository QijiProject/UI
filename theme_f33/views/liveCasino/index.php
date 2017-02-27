<?php
/**
* .

* Date: 15/1/8
* Time: 17:05
*/
Yii::app()->clientScript->registerScriptFile( "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
    <div class="mod-live-casino">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap" id="slides">
                <?=Helper::GetSiteTextInfo(102);?>
            </div>
            <!--end 焦点图-->
            <!-- 公告 -->
            <?= $this->renderPartial('/layouts/notice') ?>
            <!--end 公告 -->
        </div>
        <div class="l-c-platform layout m-t-30">
            <ul class="clearfix">
                <li class="allbet-play-btn"><a href="javascript:void(0);" onclick="load_allbet(<?=$allbet_status ?>);"></a></li>
                <li class="ag-play-btn"><a href="javascript:void(0);" onclick="get_ag_gc(<?=$ag_status ?>,<?=AsiaGames::GP_TYPE ?>);"></a></li>
                <li class="bb-play-btn"><a href="javascript:void(0);" onclick="load_bbin_ld(<?=$bbin_status ?>,<?=BBIN::LD?>,'live');"></a></li>
                <li class="salon-play-btn"><a href="javascript:void(0);" onclick="load_salon_ld(<?= $salon_status?>)"></a></li>
                <li class="gd-play-btn"><a href="javascript:void(0);" onclick='get_gd_gc(<?=$gd_status ?>,<?=GoldDeluxe::GP_TYPE?>,"");'></a></li>
                <li class="mg-play-btn"><a href="javascript:void(0);" onclick="load_mg_ld(<?=$mg_status ?>,'')"></a></li>
                <li class="pt-play-btn"><a href="javascript:void(0);" onclick="load_pt('<?=NPT::PT_LD ?>',<?=$pt_status ?>,'plba');"></a></li>
            </ul>
        </div>
    </div>
</div>
<input type="hidden" id="is_login" value="<?=$this->is_login() ?>">