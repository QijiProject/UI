<?php
$this->layout = 'home';
?>
<div class="content">
    <div class="mod-home">
        <div class="layout pr">
            <div class="web-date">
                <ul>
                    <li class="date-item-01"><label>活跃用户：</label><span id="_h" style="width:44%">-</span></li>
                    <li class="date-item-02"><label>累计注单：</label><span id="_i" style="width:63%">-</span></li>
                    <li class="date-item-03"><label>平均到账时间：</label><span id="_j">-</span></li>
                    <li class="date-item-04"><label>累计派彩金额：</label><span id="_k" style="width:77%;">-</span></li>
                </ul>
            </div>
            <a class="home-reg-btn"></a>
        </div>
        <div class="home-entry layout">
            <ul>
                <li class="entry-sport">
                    <h3><span class="fr">SPORT</span>体育投注</h3>
                    <i></i>
                    <div>
                        <p>集合三大业界公认最强的体育平台<br/>每月平均10000场滚球赛事<br/>提供所有最大型的国际体育比赛</p>
                        <a href="/sports/index">点此进入</a>
                    </div>
                </li>
                <li class="entry-live">
                    <h3><span class="fr">LIVE CASINO</span>真人娱乐</h3>
                    <i></i>
                    <div>
                        <p>遵照赌场专业严谨的流程<br/>以清晰直播画面提供多款热门产品<br/>随时体验亲临赌场般感官享受</p>
                        <a href="/liveCasino/index">点此进入</a>
                    </div>
                </li>
                <li class="entry-game">
                    <h3><span class="fr">ELEC GAME</span>电子游艺</h3>
                    <i></i>
                    <div>
                        <p>全球最公平机率游戏翘楚<br/>包含丰富玩法并提供震撼声光效果<br/>给您充满娱乐享受的游戏体验</p>
                        <a href="/game/index">点此进入</a>
                    </div>
                </li>
                <li class="entry-lottery">
                    <h3><span class="fr">LOTTERY</span>彩票投注</h3>
                    <i></i>
                    <div>
                        <p>拥有市场上热门彩球游戏<br/>参照官方开奖结果为依据即时开彩<br/>具备强大的后台管理功能</p>
                        <a href="/lottery/keno">点此进入</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    setInterval(function(){
       calc_2();
    },5000);
    
    var calc_2 = function(){
        var t = new Date().getTime()+"";
        
        var h = parseInt(Math.random()*2000)+1000; 
        var i = parseInt(t.substr(t.length-7,7) * .0082);
        var j1 = parseInt(Math.random()*2)+6;
        var j2 = parseInt(Math.random()*50)+10;
        var k = parseInt(t.substr(t.length-10,10) * .53);
        k = k/100;
        
        $("#_h").html(parseFloat(h).toLocaleString()+" 人");
        $("#_i").html(parseFloat(i).toLocaleString()+" 注");
        $("#_j").html(j1+"分"+j2+"秒每笔");
        $("#_k").html("￥"+parseFloat(k).toLocaleString());
    }
    calc_2();
    
    //home-entry
    $(function(){
        $('.home-entry li').mouseover(function(){
            $(this).addClass('hover');
        });
        $('.home-entry li').mouseout(function(){
            $(this).removeClass('hover');
        });
    });
</script>
<?=Helper::GetSiteTextInfo(31);?>
