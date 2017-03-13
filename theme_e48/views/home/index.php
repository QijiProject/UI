<?php
    $this->layout = 'home';
    $this->cls = '';
?>
<div class="content">
    <div class="mod-banner">
        <!--焦点图-->
        <div class="slide-wrap clearfix" id="slides">
            <?=Helper::GetSiteTextInfo(101);?>
            <div class="num"><span class="current">1</span><span>2</span><span>3</span></div>
            <ul>
                <li style="display:list-item;"><img src="/static/images/home_banner_01.png" /></li>
                <li><img src="/static/images/home_banner_02.png" /></li>
                <li><img src="/static/images/home_banner_03.png" /></li>
            </ul>
        </div>
        <!--end 焦点图-->
        
        <!-- overlay games -->
        <ul class="overlay-games">
            <li class="games-live"><a href="/liveCasino/index"></a></li>
            <li class="games-sports"><a href="/sports/index"></a></li>
            <li class="games-lottery"><a href="/lottery/keno"></a></li>
            <li class="games-egames"><a href="/game/index"></a></li>
        </ul>
        <!-- END: overlay games -->
    </div>
    <!-- 公告 -->
    <?= $this->renderPartial('/layouts/notice') ?>
    <!--end 公告 -->
    
    <div class="layout">
        <div class="banking-info pr">
            <div class="qr-wrap"></div>
            <ul class="clearfix">
                <li class="circle-01">
                    <p><span class="title">存款</span><span class="sub-title">到帐</span><span class="desc">&nbsp;&nbsp;平均时间</span></p>
                    <div class="circle"><span>25</span>秒</div>
                </li>
                <li class="circle-02">
                    <p><span class="title">取款</span><span class="sub-title">到帐</span><span class="desc">&nbsp;&nbsp;平均时间</span></p>
                    <div class="circle"><span>2.8</span>秒</div>
                </li>
                <li class="circle-03">
                    <p><span class="title">银行</span><span class="sub-title">服务</span><span class="desc">&nbsp;&nbsp;支持机构</span></p>
                    <div class="circle"><span>47</span>家</div>
                </li>
            </ul>
        </div>
        
        <div class="product-services">
            <p>产品优势 <span>PRODUCT ADVANTAGES</span></p>
            <ul class="clearfix">
                <li><span class="title">真人视讯</span><span>七大最权威平台，我们提供囊括东西方最全面平台，BB、AG、GD、PT、MG、沙龙、欧博，我们的现场二十一点游戏、现场百家乐、现场轮盘和骰宝游戏中都有美丽的真人荷官与您相伴，仿佛亲临拉斯维加斯，大西洋城和澳门现代城的感觉。</span></li>
                <li class="last-col"><span class="title">电子游戏</span><span>最优秀的在线老虎机平台，最丰富奖金和红利，更有机会赢得高额累积奖池。</span></li>
                <li><span class="title">体育平台</span><span>提供您最喜爱的体育赛事，如足球五大联赛、世界杯，NBA，WNBA，NFL，MLB，NCAA及四大网球公开赛。</span></li>
                <li class="last-col"><span class="title">彩票游戏</span><span>我们提供游戏丰富，提供最高赔率，所以宾果依据官方开奖结果。彩票游戏给您一夜致富的机会及空前的游戏体验！</span></li>
            </ul>
            <p>更多服务 <span>MORE SERVICES</span></p>
            <ul class="clearfix">
                <li><span class="title">颠覆性产品</span><span>在31/08/2010拥有英国属地马恩岛颁发的执照并受其监督。</span></li>
            </ul>
        </div>
    </div>
</div>
<?=Helper::GetSiteTextInfo(31);?>
