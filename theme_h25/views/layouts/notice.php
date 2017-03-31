<div class="notice"><div class="layout"><i>最新消息</i><div class="marquee"><?=str_replace(PHP_EOL, '', Helper::GetSiteTextInfo(22));?></div></div></div>
<script type="text/javascript">
    //公告滚动
    $(document).ready(function(){
        $('.marquee').marquee({
            duration:30000,
            gap:100,
            delayBeforeStart:100,
            direction: 'left',
            duplicated: true,
            pauseOnHover:true
        });
    });
</script>