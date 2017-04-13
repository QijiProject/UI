<div class="notice">
    <div class="layout">
        <div class="notice-tit">最新公告：</div>
        <div class="marquee fl"><?=Helper::GetSiteTextInfo(22);?></div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.marquee').marquee({
        duration: 30000,
        gap: 100,
        delayBeforeStart: -10000,
        direction: 'left',
        duplicated: true,
        pauseOnHover:true
    });
});
</script>