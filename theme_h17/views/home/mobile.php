<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/game/Game.js",CClientScript::POS_END);
$pt_playername = "";if($this->is_login()){$user = $this->user;$pt_playername = 'KY_'.$user['gpn'];}
?>
<div class="content">
    <div class="mod-mobile">
        <div class="section section-app">
            <div class="layout">
                <div class="fr section-info">
                    <h3 class="clearfix"><span class="fl">博冠手机APP</span><i class="fl"></i></h3>
                    <div class="inner clearfix">
                        <p class="fl qr-code"><img src="<?=Helper::GetSiteTextInfo(203);?>" /></p>
                        <div class="fl">
                            <p>①&nbsp&nbsp手机扫描二维码，进入APP下载页面，点击下载</p>
                            <p>②&nbsp&nbspAPP安装和授权 <a href="http://xiazaiyouxiapp.com/help.html" target="_blank">点此查看IOS版教程</a></p>
                            <p>③&nbsp&nbsp打开APP，再次扫描左侧二维码进入游戏</p>
                        </div>
                    </div>
                    <p><i>注意：</i>第一步使用微信扫描下载的用户，请在扫描后，点击右上角选择“在浏览器中打开”。</p>
                </div>
                <div class="fl section-img"><img src="<?=$this->getCdn();?>/images/mobile_app_img.png" /></div>
            </div>
        </div>
        <div class="section section1">
            <div class="layout">
                <div class="fr section-img"><img src="<?=$this->getCdn();?>/images/mobile_web_img.png" /></div>
                <div class="fl section-info">
                    <h3>博冠手机Web版</h3>
                    <div class="inner clearfix">
                        <p class="fl qr-code"><img src="<?=Helper::GetSiteTextInfo(204);?>" /></p>
                        <div class="fl">
                            <p class="f18px">一户通：一个账号玩遍PC端与手机端<br>打通平台：告别单客户端</p>
                            <p class="f14px">支持IOS版和Android版，玩转AG/MG/GD</p>
                            <p class="link"><a href="<?=Helper::GetSiteTextInfo(205);?>" target="_blank">点击体验</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section2">
            <div class="layout">
                <div class="fr section-info">
                    <h3>PT游戏客户端下载</h3>
                    <div class="pt-player-name clearfix">
                        <label>您的客户端<br/>专用登录名</label>
                        <span><?=$this->is_login()==true?$pt_playername:'账户名'?></span>
                    </div>
                    <p class="pt-login-notice"><i>注意：</i>PT客户端一定要使用“专用登录名”和“专用密码”才能正常使用。<br/>未设置或忘记“专用密码”的用户可以点击 <a id="pt_download_start" href="javascript:void(0);">这里设置</a></p>
                    <div class="pt-download">
                        <span class="fr pt-download-qr">安卓手机扫描下载</span>
                        <span class="fl">
                            <a target="_blank" href="http://banner.dragonfish88.com/cgi-bin/SetupCasino.exe" class="pt-download-pc">电脑版下载</a>
                            <a target="_blank" href="http://m.gf175588.com/download.html" class="pt-download-android">安卓手机版下载</a>
                        </span>
                    </div>
                </div>
                <div class="fl section-img"><img src="<?=$this->getCdn();?>/images/second_img.png" /></div>
            </div>
        </div>
        <div class="section section3">
            <div class="layout">
                <div class="section-info clearfix">
                    <p class="fl ag-download-qr">手机扫描下载安装</p>
                    <div class="fl section-info-text">
                        <h3>AG客户端下载</h3>
                        <div class="inner clearfix">
                            <div class="fl">
                                <p>①&nbsp&nbsp进入AG游戏大厅，找到左侧的手机标识，点击“立即体验”</p>
                                <p>②&nbsp&nbsp按照指南进行安装，并扫描二维码登录</p>
                                <p>③&nbsp&nbsp更多AG客户端详情请 <a href="http://agmbet.com/promotion/index.html" target="_blank">点此查看</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-img"><img src="<?=$this->getCdn();?>/images/ag_dl_mobile_img.png" /></div>
            </div>
        </div>
    </div>
</div>

<!-- PT电游客户端下载 -->
<?= $this->renderPartial('/game/ptClientDownload',array('pt_playername'=>$pt_playername,'name'=>'博冠')) ?>
<!-- end PT电游客户端下载 -->

