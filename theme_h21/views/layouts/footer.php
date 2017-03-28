<!--footer-->
<div class="footer">
    <div class="footer-contact layout1100">
        <ul>
            <li>
                <img src="/static/images/footer/contact_mail.jpg">
                <div>
                    <p>官方邮箱</p>
                    <span> xpj123win@gmail.com</span>
                </div>
            </li>
            <li>
                <img src="/static/images/footer/contact_www.jpg">
                <div>
                    <p>简易网址</p>
                    <span>123.win</span>
                </div>
            </li>
            <li>
                <img src="/static/images/footer/contact_wechat.jpg">
                <div>
                    <p>微信客服</p>
                    <span>www123win</span>
                </div>
            </li>
            <li>
                <img src="/static/images/footer/contact_qq.jpg">
                <div>
                    <p>客服QQ</p>
                    <span>839327777</span>
                </div>
            </li>
        </ul>
    </div>
    <div class="footer-icon"></div>
    <div class="footer-menu"><div class="layout1100"><a href="/help/about">关于我们</a><span>|</span><a href="/help/privacy">隐私政策</a><span>|</span><a href="/help/faqs">存款帮助</a><span>|</span><a href="/help/faqs">取款帮助</a><span>|</span><a href="/help/faqs">常见问题</a><span>|</span><a href="/help/responsibility">责任博彩</a><span>|</span><a href="/help/terms">规则条款</a><span>|</span><a href="/agent/home/index" target="_blank">合营加盟</a></div></div>
    <div class="copyright layout1100"><p><?=Helper::GetSiteTextInfo(1);?></p></div>
</div>
<script type="text/javascript" src="/static/js/timer.js"></script>
<script type="text/javascript">
$(function(){
    setInterval(function(){
        $('.header .time em').FormatTime({
            timezone: '-4',
            isWeek: true,
        });
    },200)
        
})
</script>
<?=Helper::GetSiteTextInfo(5);?>