<div class="notice"><div class="layout1000"><i>最新公告:</i><p class="marquee"><?=Helper::GetSiteTextInfo(22);?></p></div></div>
<script type="text/javascript">
    $(document).ready(function(){
		$('.marquee').marquee({
			duration: 30000,
			gap: 100,
			delayBeforeStart:0,
			direction: 'left',
			duplicated: true,
			pauseOnHover:true
		});
    });
</script>
