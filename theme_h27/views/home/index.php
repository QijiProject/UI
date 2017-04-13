<?php
    $this->layout = 'home';
?>
<div class="content">
    <div class="mod-home">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap" id="slides">
                <?=Helper::GetSiteTextInfo(101);?>
            </div>
            <!--end 焦点图-->
        </div>
        <!--notice-->
        <?= $this->themeLayout('notice') ?>
        <!--notice end-->
        <div class="quick-entry layout">
            <ul class="clearfix">
                <li><a href="/liveCasino/index" class="box baccarat-entry"><span class="tit">百家乐</span><span class="txt">独创包桌及咪牌玩法</span><em></em></a></li>
                <li><a href="/liveCasino/index" class="box lh-entry"><span class="tit">龙虎</span><span class="txt">与美女荷官贴身肉搏</span><em></em></a></li>
                <li><a href="/game/index#mg" class="box roulette-entry"><span class="tit">轮盘</span><span class="txt">转一转就有好运气</span><em></em></a></li>
                <li><a href="/game/index#pt" class="box dice-entry"><span class="tit">骰宝</span><span class="txt">华人传统心跳博弈</span><em></em></a></li>
                <li><a href="/sports/hg" class="box f-b-entry"><span class="tit">足球</span><span class="txt">亚洲顶级滚球平台</span><em></em></a></li>
                <li><a href="/sports/index" class="box b-b-entry"><span class="tit">篮球</span><span class="txt">NBA全程精彩投注</span><em></em></a></li>
                <li><a href="/lottery/keno" class="box finance-entry"><span class="tit">快乐彩</span><span class="txt">赔率最高，体验最好</span><em></em></a></li>
                <li><a href="/lottery/keno#bb" class="box marksix-entry"><span class="tit">六合彩</span><span class="txt">男女老幼都喜爱</span><em></em></a></li>
            </ul>
        </div>
        <div class="home-menu layout">
            <ul>
                <li class="menu-reg"><a href="/home/register"><span></span></a></li>
                <li class="menu-promotions"><a href="/promotions/index"><span></span></a></li>
                <li class="menu-online"><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')"><span></span></a></li>
            </ul>
        </div>
    </div>
</div>
<?=Helper::GetSiteTextInfo(31);?>