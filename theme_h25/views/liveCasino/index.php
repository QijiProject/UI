<?php
/**
* .

* Date: 15/1/8
* Time: 17:05
*/
Yii::app()->clientScript->registerScriptFile($this->getCdn()."/static/js/jquery.sticky.js",CClientScript::POS_END);
?>
<div class="content">
    <div class="mod-live-casino">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap layout" id="slides">
                 <?=Helper::GetSiteTextInfo(102);?> 
           </div>
            <!--end 焦点图-->
        </div>
        <div class="layout l-c-platform">
            <ul class="clearfix">
                <li class="ag-platform"><a href="javascript:void(0);" onclick="get_ag_gc(<?=$ag_status ?>,<?=AsiaGames::GP_TYPE ?>);"></a></li>
                <li class="bb-platform m-lr-24"><a href="javascript:void(0);" onclick="load_bbin_ld(<?=$bbin_status ?>,'<?=BBIN::LD ?>','live')"></a></li>
                <li class="allbet-platform"><a href="javascript:void(0);" onclick="load_allbet(<?=$allbet_status ?>);"></a></li>
                <li class="salon-platform"><a href="javascript:void(0);" onclick="load_salon_ld(<?= $salon_status?>)"></a></li>
                <li class="gd-platform m-lr-24"><a href="javascript:void(0);" onclick='get_gd_gc(<?=$gd_status ?>,<?=GoldDeluxe::GP_TYPE?>,"");'></a></li>
                <li class="mg-platform"><a href="javascript:void(0);" onclick="load_mg_ld(<?=$mg_status ?>,'')"></a></li>
            </ul>
        </div>
    </div>
</div>
<input type="hidden" id="is_login" value="<?=$this->is_login() ?>">