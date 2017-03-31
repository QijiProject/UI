<?php
?>


<div class="content">
    <div class="mod-lottery">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap layout" id="slides">
                 <?=Helper::GetSiteTextInfo(103);?>   
            </div>
            <!--end 焦点图-->
        </div>
        <div class="layout">
            <div class="content-wrap clearfix">
                <div class="lotto-wrap mod-bb">
                    <i class="img-area"></i>
                    <div class="main-area">
                        <h2>BB彩票</h2>
                        <p>官方同步开奖，更高中奖率，感受彩票无限乐趣。</p>
                        <a href="javascript:void(0);" onclick="load_bbin_ld(<?= $bbin_status ?>,'<?= BBIN::LT ?>','Ltlottery');">立即游戏<em></em></a>
                    </div>
                </div>
                <div class="lotto-wrap mod-kg">
                    <i class="img-area"></i>
                    <div class="main-area">
                        <h2>KG彩票</h2>
                        <p>快乐彩、时时彩、六合彩游戏多样化，玩家可自订介面。</p>
                        <a href="javascript:void(0);" onclick="load_kg(<?=$this->is_login()?0:1 ?>);">立即游戏<em></em></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
