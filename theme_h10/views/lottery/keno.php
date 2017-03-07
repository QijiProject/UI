<?php
Yii::app()->clientScript->registerScriptFile($this->getCdn() . "/js/game/Game.js",CClientScript::POS_END);
?>

<div class="content">
    <div class="mod-lottery pr">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap clearfix" id="slides">
                <?=Helper::GetSiteTextInfo(103);?>
                <ul>
                    <li style="display:block;"><img src="/static/images/lottery_banner_01.jpg" /></li>
                </ul>
            </div>
            <!--end 焦点图-->
            <!-- 公告 -->
            <?= $this->renderPartial('/layouts/notice') ?>
            <!--end 公告 -->
        </div>
        <div class="platform-wrap pr m-t-20">
            <ul class="hd-menu lottery-menu clearfix">
                <li class="bb-menu active" target="lotto-bb">
                    <h2>BBIN彩票</h2>
                </li>
                <li class="kg-menu" target="lotto-kg">
                    <h2>KG彩票</h2>
                </li>
            </ul>
            <div class="lotto-items">
              <!-- BBIN -->
                <ul class="clearfix lotto-item lotto-bb">
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-01"></div>
                        <h4>六合彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-02"></div>
                        <h4>3D彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-03"></div>
                        <h4>排列三</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-04"></div>
                        <h4>BB真人彩票</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-05"></div>
                        <h4>时时彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-06"></div>
                        <h4>分分彩</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-07"></div>
                        <h4>KENO</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-08"></div>
                        <h4>十一选五</h4>
                    </li>
                    <li onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">
                        <div class="img bb-09"></div>
                        <h4>赌城系列</h4>
                    </li>
                </ul>
              
                <!-- KG彩票 -->
                <ul class="clearfix lotto-item lotto-kg hide">
                    <?php $kgStatus = $this->is_login() ? 0 : 1; ?>
                    <?= $this->renderPartial('/lottery/kgLotteryList',array('status'=>$kgStatus)) ?>
                </ul>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $(".hd-menu").find("li").click(function(){
        $(".hd-menu").find("li.active").removeClass("active");
        $(this).addClass("active");
        $(".lotto-item").hide();
        $("ul."+$(this).attr("target")).show();
    });
    //彩票游戏导航下拉菜单点击选择对应平台
    var ml = window.location.href.split("#");
    if(ml.length>0)ml = ml[1];
    var oo = $("."+ml+"-menu");
    if(oo.length>0){oo.click();}
}); 
</script>


