<div class="notice fl"><div class="marquee"><?=Helper::GetSiteTextInfo(22);?></div></div>
<script type="text/javascript">
$(document).ready(function(){
    $('.marquee').marquee({
        duration: 40000,
        gap: 100,
        delayBeforeStart: -8000,
        direction: 'left',
        duplicated: true,
        pauseOnHover:true
    });
});
</script>