<?php
/**
* .

* Date: 15/1/8
* Time: 17:05
*/
?>
<div class="content">
    <div class="mod-live-casino">
        <div class="layout1000">
            <div class="l-c-platform fl">
                <ul class="clearfix">
                    <li class="allbet-platform"><span><a href="javascript:void(0);" onclick="load_allbet(<?=$allbet_status ?>);">进入游戏</a></span></li>
                    <li class="tgp-platform"><span><a href="javascript:void(0);" onclick="loadTPGLD(<?=$status ?>)">进入游戏</a></span></li>
                    <li class="ag-platform"><span><a href="javascript:void(0);" onclick="get_ag_gc(<?=$ag_status ?>,<?=AsiaGames::GP_TYPE ?>);">进入游戏</a></span></li>
                    <li class="bb-platform"><span><a href="javascript:void(0);" onclick="load_bbin_ld(<?=$bbin_status ?>,'<?=BBIN::LD ?>','live')">进入游戏</a></span></li>
                    <li class="salon-platform"><span><a href="javascript:void(0);" onclick="load_salon_ld(<?= $salon_status?>)">进入游戏</a></span></li>
                    <li class="gd-platform"><span><a href="javascript:void(0);" onclick='get_gd_gc(<?=$gd_status ?>,<?=GoldDeluxe::GP_TYPE?>,"");'>进入游戏</a></span></li>
                    <li class="mg-platform"><span><a href="javascript:void(0);" onclick="load_mg_ld(<?=$mg_status ?>,'')">进入游戏</a></span></li>
                    <li class="pt-platform"><span><a href="javascript:void(0);" onclick="load_pt('<?=PT::PT_LD ?>',<?=$pt_status ?>,'plba');">进入游戏</a></span></li>
                </ul>
            </div>
        </div>
        <script>
            //鼠标经过
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
</div>
<input type="hidden" id="is_login" value="<?=$this->is_login() ?>">