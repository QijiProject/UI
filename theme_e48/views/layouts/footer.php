<div class="footer">
	<div class="footer-icon"></div>
    
    <div class="layout">
        <div class="footer-left fl">
            <a href="/help/faqs" class="tutorial-link">新手教程</a>
            <span id="siteTime" class="site-time">美东时间：<span class="time"></span></span>
            <div class="footer-menu"><a href="/help/contact">联系我们</a><span>●</span><a href="/help/privacy">隐私政策</a><span>●</span><a href="/help/responsibility">责任博彩</a><span>●</span><a href="/help/faqs">常见问题</a><span>●</span><a href="/help/terms">规则条款</a><span>●</span><a href="/agent/home/index" target="_blank">合营加盟</a></div>
        </div>
        
        <p class="credentials fr"><?=Helper::GetSiteTextInfo(1);?></p>
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
            <li class="box-4"><a href="javascript:void(0);" onclick="window.open('https://kf1.learnsaas.com/chat/chatClient/chatbox.jsp?companyID=11155&amp;configID=57719&amp;jid=&amp;s=1', '_blank', 'width=750,height=750,toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')"></a></li>
        </ul>
    </div>
    <i class="box-tit"></i>
</div>

<script type="text/javascript" src="/static/js/timer.js"></script>
<script>
	setInterval(function(){
        $('.site-time .time').FormatTime({
            timezone: '-4'
        });
    },200)  
	$(function(){
		/* 在线客服飘窗 */
		$('.box-tit').click(function(){
			$(".float-box-right").toggleClass('hover');
		});
		/* END: 在线客服飘窗 */
	});
</script>

<?=Helper::GetSiteTextInfo(5);?>
