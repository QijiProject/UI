<?php if(Helper::GetSiteTextInfo(12)!=" "&&Helper::GetSiteTextInfo(12)!=""){?>
<div class="top-notice"><div class="layout"><em></em><div class="top-marquee"><?=Helper::GetSiteTextInfo(12);?></div></div></div>
<script type="text/javascript">
    $(document).ready(function(){
        if($('.top-marquee').text().length>80){
            $('.top-marquee').marquee({
                duration: 20000,
                gap: 100,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true,
                pauseOnHover:true
            });
         }
    });
</script>
<?php } ?>