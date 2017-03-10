<div class="footer">
	<div class="footer-icon"></div>
    
    <div class="layout">
        <div class="footer-left fl">
            <a href="/help/faqs" class="tutorial-link">新手教程</a>
            <span id="siteTime" class="site-time"></span>
            <div class="footer-menu"><a href="/help/contact">联系我们</a><span>●</span><a href="/help/privacy">隐私政策</a><span>●</span><a href="/help/responsibility">责任博彩</a><span>●</span><a href="/help/faqs">常见问题</a><span>●</span><a href="/help/terms">规则条款</a><span>●</span><a href="/agent/home/index" target="_blank">合营加盟</a></div>
        </div>
        
        <div class="credentials fr">版权声明:Copyright&copy;  申博太阳城 Reserved</div>
   	</div>
</div>

<!--在线客服飘窗-->
<div id="sideChatRight" class="float-box float-box-right" picfloat="right">
    <div class="side-float">
    	<div class="qq-contact"><i></i><p>咨询QQ</p><span>1835900099</span></div>
        <ul class="box-list">
            <li class="box-1"><a href="/home/register">真钱开户</a></li>
            <li class="box-2"><a href="/help/faqs">新手教程</a></li>
            <li class="box-3"><a href="/promotions/index">最新优惠</a></li>
        </ul>
    </div>
    <i class="box-tit"></i>
</div>
<!--END: 在线客服飘窗-->

<script>
	$(function(){
		var timerID = setInterval("dispTime()", 1000); // site time
		
		/* 在线客服飘窗 */
		$('.box-tit').click(function(){
			$(".float-box-right").toggleClass('hover');
		});
		/* END: 在线客服飘窗 */
	});
	
	/* site time */
		var current = 1486907141000 || 0;
		function dispTime() {
			current += 1000;
			var dateObj = new Date(current);
			var Y = dateObj.getFullYear();
			var Mh = dateObj.getMonth() + 1;
			if (Mh > 12) Mh = 01;
			if (Mh < 10) Mh = '0' + Mh;
			var D = dateObj.getDate() < 10 ? '0' + dateObj.getDate() : dateObj.getDate();
			var H = dateObj.getHours() < 10 ? '0' + dateObj.getHours() : dateObj.getHours();
			var M = dateObj.getMinutes() < 10 ? '0' + dateObj.getMinutes() : dateObj.getMinutes();
			var S = dateObj.getSeconds() < 10 ? '0' + dateObj.getSeconds() : dateObj.getSeconds();
			document.getElementById('siteTime').innerHTML = "美东时间：" + Y + '-' + Mh + '-' + D + ' ' + H + ':' + M + ':' + S;
		}
	/* end: site time */
</script>

<?=Helper::GetSiteTextInfo(5);?>
