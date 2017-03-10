<?php
/**
* .

* Date: 15/1/8
* Time: 17:05
*/
Yii::app()->clientScript->registerScriptFile( "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
	<!-- 公告 -->
    <?= $this->renderPartial('/layouts/notice') ?>
    <!--end 公告 -->
    <div class="mod-live-casino">
        <div class="layout">
            <ul class="l-c-platform">
				<li class="l-c-bb">
                	<a href="javascript:void(0);" onclick="load_bbin_ld(<?=$bbin_status ?>,'<?=BBIN::LD ?>','live')">进入游戏<i></i></a>
                </li>
                <li class="l-c-ag">
                    <a href="javascript:void(0);" onclick="get_ag_gc(<?=$ag_status ?>,<?=AsiaGames::GP_TYPE ?>)">进入游戏<i></i></a>
                </li>
                <li class="l-c-salon last">
                    <a href="javascript:void(0);" onclick="load_salon_ld(<?= $salon_status?>)">进入游戏<i></i></a>
                </li>
                <li class="l-c-allbet">
                    <a href="javascript:void(0);" onclick="load_allbet(<?=$allbet_status ?>);">进入游戏<i></i></a>
                </li>
                <li class="l-c-gd">
                    <a href="javascript:void(0);" onclick='get_gd_gc(<?=$gd_status ?>,<?=GoldDeluxe::GP_TYPE?>,"")'>进入游戏<i></i></a>
                </li>
                
                <li class="l-c-pt last">
                    <a href="javascript:void(0);" onclick="load_pt('<?=PT::PT_LD ?>',<?=$pt_status ?>,'plba')">进入游戏<i></i></a>
                </li>
                <li class="l-c-mg">
                    <a href="javascript:void(0);" onclick="load_mg_ld(<?=$mg_status ?>,'')">进入游戏<i></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<input type="hidden" id="is_login" value="<?=$this->is_login() ?>">
