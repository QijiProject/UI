<!--footer-->
<div class="footer">
    <div class="footer-menu"><div class="layout"><a href="/help/contact">联系我们</a><span>|</span><a href="/help/privacy">隐私政策</a><span>|</span><a href="/help/responsibility">责任博彩</a><span>|</span><a href="/help/faqs">常见问题</a><span>|</span><a href="/help/terms">规则条款</a><span>|</span><a href="/agent/home/index" target="_blank">合营加盟</a></div></div>
    <div class="layout">
        <div class="footer-icon clearfix">
            <div class="payment-wrap right">
                <h4>支付方式</h4>
                <ul>
                    <li><a><span id='_Visa'></span></a></li>
                    <li><a><span id='_UnionPay'></span></a></li>
                    <li><a><span id='_MasterCard'></span></a></li>
                </ul>
            </div>
            <div class="liability-wrap left">
                <h4>博彩责任</h4>
                <ul>
                    <li><a><span id="_FastCagayan"></span></a></li>
                    <li><a><span id="_Gambling"></span></a></li>
                    <li><a><span id="_GamCare"></span></a></li>
                    <li><a><span id="_AdultsOnly"></span></a></li>
                </ul>
            </div>
            <div class="partner-wrap left">
                <h4>合作伙伴</h4>
                <ul>
                    <li><a href="http://golddeluxephil.com/" target="_blank"><span id="_GoldDeiuxe"></span></a></li>
                    <li><a href="http://bb-in.com/" target="_blank"><span id="_BBIN"></span></a></li>
                    <li><a href="http://www.playtech.com/" target="_blank"><span id="_Playtech"></span></a></li>
                    <li><a href="http://www.asia-gaming.com/index.php?LANG=zh" target="_blank"><span id="_AsiaGaming"></span></a></li>
                    <li><a><span id="_Saba"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright"><p class="layout"><?=Helper::GetSiteTextInfo(1);?></p></div>
</div>
<!--浮动在线客服
<div id="sideChatRight" class="float-box float-box-right" picfloat="right">
    <div>
        <ul>
            <li class="box-chat" onclick="window.open('<?=Helper::GetSiteTextInfo(26);?>','_blank', 'toolbar=no,scrollbars=no,menubar=no,status=no,resizable=yes,location=no')"></li>
            <li class="box-qq"><a target="blank" href="http://wpa.qq.com/msgrd?V=3&amp;uin=3083650959&amp;Site=QQ客服1&amp;Menu=yes"></a></li>
            <li class="box-close" onclick="document.getElementById('sideChatRight').style.display='none'"></li>
        </ul>
    </div>
</div>
<script type="text/javascript">
if (self.location != top.location)
    top.location = self.location;

var left_top = 150, right_top = 150, float_list = [];
$(function() {
    //浮動圖
    float_list['2'] = $('#sideChatRight');
    for ( var i in float_list) {
        var self = float_list[i], picfloat = (self.attr('picfloat') == 'right') ? 1 :0;
        self.show().Float({
            'floatRight' :picfloat,
            'topSide' :((picfloat == 1) ? right_top
                    :left_top),
            close :"closebox" + (i)
        });

        if (picfloat) {
            right_top = right_top + 10 + (self.height() || 250);
        } else {
            left_top = left_top + 10 + (self.height() || 250);
        }
        self.show();
    }
});
</script>
<script type="text/javascript" src="/js/jquery/jquery.sideFloat.js"></script>
浮动在线客服 end-->
<?=Helper::GetSiteTextInfo(5);?>

