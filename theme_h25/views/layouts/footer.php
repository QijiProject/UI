<!--footer-->
<div class="footer">
    <div class="footer-icon-02"></div>
    <div class="footer-menu">
        <div class="layout">
            <p class="fr"><?=Helper::GetSiteTextInfo(1);?></p>
            <p class="fl"><a href="/help/contact">联系我们</a><span>|</span><a href="/help/privacy">隐私政策</a><span>|</span><a href="/help/responsibility">责任博彩</a><span>|</span><a href="/help/faqs">常见问题</a><span>|</span><a href="/help/terms">规则条款</a><span>|</span><a href="/agent/home/index">合营加盟</a></p>
        </div>
    </div>
    <div class="introduce">
        <!--introduce-->
        <div class="layout">
            <div class="footer-icon"></div>
            <ul class="clearfix">
                <li class="int-service">
                    <h3>服务优势</h3>
                    <dl>
                        <dd>
                            <div class="int-tit">
                                <div class="fr"><em id="m">45</em><span>秒</span></div>
                                <div class="fl"><h4>存款到账</h4><p>平均时间</p></div>
                            </div>
                            <div class="int-speed-bar deposit-speed"><i id="pm"></i></div>
                        </dd>
                        <dd>
                            <div class="int-tit">
                                <div class="fr"><em id="d">4'33</em><span>秒</span></div>
                                <div class="fl"><h4>取款到账</h4><p>平均时间</p></div>
                            </div>
                            <div class="int-speed-bar withdraw-speed"><i id="dm"></i></div>
                        </dd>
                        <dd>
                            <div class="int-tit">
                                <div class="fr"><em id="j">34</em><span>家</span></div>
                                <div class="fl"><h4>便捷的银行服务</h4><p>目前我们支付机构有：</p></div>
                            </div>
                            <img src="/static/images/footer/introduct_bank.png" width="253" height="21" class="m-t-10" />
                        </dd>
                    </dl>
                </li>
                <li class="int-product">
                    <h3>产品优势</h3>
                    <dl>
                        <dd>
                            <div class="int-tit">
                                <div class="fr">KENO</div>
                                <div class="fl"><h4>快乐彩</h4></div>
                            </div>
                            <p>皇冠国际，兼容iPad/iPhone等各种移动设备是目前市面上用户体验最优秀的产品。</p>
                        </dd>
                        <dd>
                            <div class="int-tit">
                                <div class="fr">SPORT BET</div>
                                <div class="fl"><h4>体育平台</h4></div>
                            </div>
                            <p>经过皇冠国际用户体验中心设计的投注界面，能够让您轻松、怡静的享受体育投注的乐趣。</p>
                        </dd>
                        <dd>
                            <div class="int-tit">
                                <div class="fr">LIVE CASINO</div>
                                <div class="fl"><h4>真人娱乐城</h4></div>
                            </div>
                            <p>皇冠国际所使用的娱乐平台，必须经过TST Game国际认证，保证每款游戏公平公正。</p>
                        </dd>
                    </dl>
                </li>
                <li class="int-more">
                    <h3>更多服务</h3>
                    <dl>
                        <dd>
                            <div class="int-tit">
                                <div class="fr">SUBVERSIVE PRODUCTS</div>
                                <div class="fl"><h4>颠覆性产品</h4></div>
                            </div>
                            <p>每一款上线的皇冠国际产品都是经过大量测试后证实最符合亚洲人的产品，这是一个对现状做出的强势挑战的创新团队。</p>
                        </dd>
                        <dd>
                            <div class="int-tit">
                                <div class="fr">Communication security</div>
                                <div class="fl"><h4>通信安全</h4></div>
                            </div>
                            <p>数据传送均通过128位SSL加密安全端口，所有数据内部出入严格限制和严密监控。</p>
                        </dd>
                        <dd>
                            <div class="int-tit">
                                <div class="fr">Website maintenance</div>
                                <div class="fl"><h4>网站运维</h4></div>
                            </div>
                            <p>SSD专业服务器集群，多种技术优化保障运营稳定。</p>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
        <!--存款到账，取款到账，便捷的银行服务数据动态显示-->
        <script type="text/javascript">
            var dh = true;
            var win=$(window); //得到窗口对象
            var sc=$(document);//得到document文档对象。
            win.scroll(function(){
                if(sc.scrollTop()>=700&&dh==true){
                    dh = false;
                    var m=45;
                    var mm=0;
                    var d=33;
                    var dd=0;
                    var j=34;
                    var jj=0;
                    setInterval(function(){
                        if(mm<=m){
                            $("#m").html(mm);
                            $("#pm").css("width",mm+"%");
                            mm++;
                        }
                        if(dd<=d){
                            $("#d").html("4'"+dd);
                            $("#dm").css("width",parseInt(dd*2.2)+"%");
                            dd++;
                        }
                        if(jj<=j){
                            $("#j").html(jj);
                            jj++;
                        }
                    },30);
                }
            });
        </script>
        <!--introduce end-->
    </div>
</div>
<?=Helper::GetSiteTextInfo(5);?>