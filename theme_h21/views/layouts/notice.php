<div class="notice"><div class="layout1100"><i>最新公告／News</i><div class="marquee"><?=str_replace(PHP_EOL, '', Helper::GetSiteTextInfo(22));?></div>
</div></div>
<script type="text/javascript">
//公告滚动
$(document).ready(function(){
    $('.home-marquee').marquee({
        duration: 10000,
        gap:50,
        delayBeforeStart:-10000,
        direction: 'up',
        duplicated: true,
        pauseOnHover:true
    });
    $('.marquee').marquee({
        duration: 20000,
        gap:50,
        delayBeforeStart:-10000,
        direction: 'left',
        duplicated: true,
        pauseOnHover:true
    });
});
</script>