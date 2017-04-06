<?php
$this->layout = 'home';
$this->cls = 'mod-home';
?>
<div class="content">
    <div class="mod-banner">
        <!--焦点图-->
        <div class="layout pr">
            <div class="home-banner-text">
            	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="480" height="300">
                    <param name="movie" value="/static/images/home/home_banner_text.swf" />
                    <param name="wmode" value="transparent" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="/static/images/home/home_banner_text.swf" width="480" height="300">
                        <param name="wmode" value="transparent" />
                        <!--<![endif]-->
                        <a href="http://www.adobe.com/go/getflashplayer">
                            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                        </a>
                        <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object>
            </div>
        </div>
        <!--end 焦点图-->
    </div>
    <div class="mod-home-jackpot layout"><span>￥<em id="jackpot"></em></span></div>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                var t = new Date().getTime()+"";
                var k = parseInt(t.substr(t.length-11,11) * 2.1);
                k = k + "";
                k = k.substr(0,3)+","+k.substr(3,3)+","+k.substr(6,3)+"."+ (parseInt(Math.random()*90)+10)
                 $("#jackpot").html(k);
            },200);
        });
    </script>
    <div class="home-menu layout">
            <div class="menu-bg-left">
                <ul>
                    <li class="menu-l-c"><a href="/liveCasino/index"><p>提供真人娱乐、百家乐、骰宝、二八杠、龙虎斗、轮盘、金臂...精彩内容面向全玩家。</p></a></li>
                    <li class="menu-sports"><a href="/sports/index"><p>为您提供最全面赛前及滚球投注服务,眼下最为热门的体育投注类型，总能为您营造最好的赔率，创造最大价值。</p></a></li>
                    <li class="menu-games"><a href="/game/index"><p>30多款老虎机、电动扑克、大型电玩、桌上游戏、以丰富的视觉、声光效果提供您一级的娱乐。</p></a></li>
                    <li class="menu-keno"><a href="/lottery/keno"><p>彩票游戏丰富，提供最高赔率，所有赛果依据官方开奖结果。彩票游戏给您一夜致富的机会及空前的游戏体验！</p></a></li>
                </ul>
            </div>
            <div class="menu-bg-right">
                <ul>
                    <li class="menu-register"><a href="/home/register"></a></li>
                    <li class="menu-service"><a href="javascript:void(0);" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')"></a></li>
                    <li class="menu-checkin"><a href="/home/c"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?=Helper::GetSiteTextInfo(31);?>