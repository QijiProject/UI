<?php
Yii::app()->clientScript->registerScriptFile( "/js/game/Game.js",CClientScript::POS_END);
?>
<div class="content">
	<!-- 公告 -->
    <?= $this->renderPartial('/layouts/notice') ?>
    <!--end 公告 -->
    <div class="mod-lottery">
        <div class="platform-wrap layout">
            <div class="hd-menu">
                <ul class="clearfix">
                    <li class="current kg-menu" target="kg-item"><i></i><h2>KG彩票</h2></li>
                    <li class="bb-menu" target="bb-item"><i></i><h2>BBIN彩票</h2></li>
                </ul>
            </div>
            <div class="lotto-items">
            	<!-- KG -->
                <ul  class="clearfix lotto-item kg-item active">
                    <li onclick="load_kg(<?=$this->is_login()?0:1 ?>,0,1);">
                        <div class="img"><img src="/static/images/lotto/kg_01.jpg" /></div>
                        <h4>综合版</h4>
                    </li>
                    <li onclick="load_kg(<?=$this->is_login()?0:1 ?>,2,1);">
                        <div class="img"><img src="/static/images/lotto/kg_03.jpg" /></div>
                        <h4>时时彩</h4>
                    </li>
                    <li onclick="load_kg(<?=$this->is_login()?0:1 ?>,0,1);">
                        <div class="img"><img src="/static/images/lotto/kg_02.jpg" /></div>
                        <h4>KENO</h4>
                    </li>
                    <li onclick="load_kg(<?=$this->is_login()?0:1 ?>,4,1);">
                        <div class="img"><img src="/static/images/lotto/kg_04.jpg" /></div>
                        <h4>香港乐透</h4>
                    </li>
                </ul>
                <!-- BBIN -->
                <ul class="clearfix lotto-item bb-item hide">
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_01.jpg" /></div>
                        <h4>六合彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_02.jpg" /></div>
                        <h4>3D彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_03.jpg" /></div>
                        <h4>排列三</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_04.jpg" /></div>
                        <h4>BB真人彩票</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_05.jpg" /></div>
                        <h4>时时彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');" class="last">
                        <div class="img"><img src="/static/images/lotto/bb_06.jpg" /></div>
                        <h4>分分彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_07.jpg" /></div>
                        <h4>KNEO</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_08.jpg" /></div>
                        <h4>十一选五</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img"><img src="/static/images/lotto/bb_09.jpg" /></div>
                        <h4>赌城系列</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".hd-menu").find("li").click(function(){
        $(".hd-menu").find("li.current").removeClass("current");
        $(this).addClass("current");
        $(".lotto-item").hide();
        $("ul."+$(this).attr("target")).show();
    });
    
    //导航下拉菜单点击选择对应平台
    var ml = window.location.href.split("#");
    if(ml.length>0)ml = ml[1];
    var oo = $("."+ml+"-menu");
    if(oo.length>0){oo.click();}
}); 
</script>