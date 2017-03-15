<?php
Yii::app()->clientScript->registerScriptFile( "/js/game/Game.js",CClientScript::POS_END);
?>

<div class="content">
    <div class="mod-lottery pr">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap clearfix" id="slides">
                <?=Helper::GetSiteTextInfo(103);?>
            </div>
            <!--end 焦点图-->
        </div>
        <div class="platform-wrap m-t-20 layout">
            <div class="hd-menu lottery-hd-menu">
                <ul class="clearfix">
                    <li class="current kg-menu" target="kg-item"><span>KG彩票</span></li>
                </ul>
            </div>
            <div class="lotto-items">
            	<!-- KG彩票 -->
                <ul class="clearfix lotto-item lotto-kg">
                    <?php $kgStatus = $this->is_login() ? 0 : 1; ?>
                    <?= $this->renderPartial('/lottery/kgLotteryList',array('status'=>$kgStatus)) ?>
                </ul>
            </div>
        </div>
	</div>
</div>


