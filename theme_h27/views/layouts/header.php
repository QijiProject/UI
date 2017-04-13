<div class="header pr">
    <div class="layout">
        <div class="hd-right">
            <div class="fr login-wrap">
                <?php if(!$this->is_login()): ?>
                    <div class="login-menu">
                        <div class="username-btn"><input type="text" id="uid" name="uid" placeholder="会员账号" /></div>
                        <div class="password-btn pr"><input type="password" id="jpwd" name="jpwd" placeholder="密码" /><a href="/home/fetchPassword" class="forgot-password fr" title="忘记密码？">忘记？</a></div>
                        <a href="javascript:void(0);" id="gologin" class="log-btn">登录</a>
                        <a href="/home/register" class="reg-btn">注册</a>
                    </div>
                <?php else: ?>
                    <div class="logined-nav">
                        <span class="username">欢迎！<?=$this->user['playername'] ?></span>
                        <span>账户余额：<em class="cMain"><?=Helper::money($this->user['balance']) ?></em></span>
                        <a href="/member/message" class="message">未读消息（<em id="_umessage" class="cMain"><?=$this -> getUnreadCount();?></em>）</a>
                        <span class="money-operate">
                            <a href="/member/index" class="user-center">账户中心</a>
                            <a href="/wallet/transfer"  class="transfer-href" >转账</a>
                            <a href="/wallet/deposit" class="deposit-href">存款</a>
                            <a href="/wallet/withdraw" class="withdraw-href">取款</a>
                        </span>
                        <a class="logged-out" href="/home/logout">安全退出</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="clear"></div>
            <ul class="nav fr" id="menu">
                <li class="<?=$this->setActive('/home/index') ?>"><a href="/home/index">首页</a></li>
                <li class="<?=$this->setActive('/game/index') ?>"><a href="/game/index">电子游艺</a>
                    <div class="nav-drop games-drop"> 
                    <div class="layout">
                        <dl class="right">
                            <dd class="games-pt">
                                <a href="/game/index#pt" onclick="$('.pt-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>PT游戏厅</h4>
                                    </span>
                                    <span class="bd">欧洲顶级品牌</span>
                                </a>
                            </dd>
                            <dd class="games-mg">
                                <a href="/game/index#mg" onclick="$('.mg-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>MG游戏厅</h4>
                                    </span>
                                    <span class="bd">美洲最佳电游</span>
                                </a>
                            </dd>
                            <dd class="games-bb">
                                <a href="/game/index#bb" onclick="$('.bb-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>BB游戏厅</h4>
                                    </span>
                                    <span class="bd">提供给玩家最卓越的体验</span>
                                </a>
                            </dd>
                            <dd class="games-ag">
                                <a href="/game/index#ag" onclick="$('.ag-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>AG游戏厅</h4>
                                    </span>
                                    <span class="bd">只与顶尖公司合作</span>
                                </a>
                            </dd>
                            <dd class="games-nt">
                                <a href="/game/index#nt" onclick="$('.nt-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>NT游戏厅</h4>
                                    </span>
                                    <span class="bd">尖端平台，惊险游戏</span>
                                </a>
                            </dd>
                        </dl>
                    </div>
                </div>
                </li>
                <li class="<?=$this->setActive('/sports/index') ?>"><a href="/sports/index">体育投注</a>
                    <div class="nav-drop sports-drop">
                    <div class="layout">
                        <dl class="right">
                            <dd class="sports-hg">
                                <a href="/sports/hg">
                                    <span class="hd">
                                        <i></i>
                                        <h4>皇冠体育</h4>
                                    </span>
                                    <span class="bd">亚洲著名在线体育赛事平台商</span>
                                </a>
                            </dd>
                            <dd class="sports-im">
                                <a href="/sports/im">
                                    <span class="hd">
                                        <i></i>
                                        <h4>IM体育</h4>
                                    </span>
                                    <span class="bd">亚洲著名在线体育赛事平台商</span>
                                </a>
                            </dd>
                            <dd class="sports-saba">
                                <a href="/sports/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>沙巴体育</h4>
                                    </span>
                                    <span class="bd">美女百练赛在线视频</span>
                                </a>
                            </dd>
                            <dd class="sports-bb">
                                <a href="/sports/bb">
                                    <span class="hd">
                                        <i></i>
                                        <h4>BB体育</h4>
                                    </span>
                                    <span class="bd">亚洲著名在线体育赛事平台商</span>
                                </a>
                            </dd>
                        </dl>
                    </div>  
                </div>
                </li>
                <li class="<?=$this->setActive('/liveCasino/index') ?>"><a href="/liveCasino/index">真人娱乐</a>
                    <div class="nav-drop l-c-drop">
                    <div class="layout">
                        <dl class="right">
                            <dd class="l-c-ag">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>亚洲厅(AG)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd>
                            <dd class="l-c-gd">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>菲律宾厅(GD)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd> 
                            <dd class="l-c-allbet">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>欧博厅(Allbet)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd>  
                            <dd class="l-c-bb">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>台湾厅(BBIN)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd>
                            <dd class="l-c-salon">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>沙龙厅(Salon)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd>
                            <dd class="l-c-mg">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>美洲厅(MG)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd>  
                            <dd class="l-c-pt">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>欧洲厅(PT)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd> 
                            <dd class="l-c-sun">
                                <a href="/liveCasino/index">
                                    <span class="hd">
                                        <i></i>
                                        <h4>太阳城(Sun)</h4>
                                    </span>
                                    <span class="bd">立即游戏</span>
                                </a>
                            </dd> 
                        </dl>
                    </div>
                </div>
                </li>
                <li class="<?=$this->setActive('/lottery/keno') ?>"><a href="/lottery/keno">彩票游戏</a>
                    <div class="nav-drop lottery-drop"> 
                    <div class="layout">
                        <dl class="right"> 
                            <dd class="lottery-bb">
                                <a href="/lottery/keno#bb" onclick="$('.bb-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>BBIN彩票</h4>
                                    </span>
                                    <span class="bd">多样化玩法，简单刺激</span>
                                </a>
                            </dd>
                            <dd class="lottery-kg">
                                <a href="/lottery/keno#kg" onclick="$('.kg-menu').click();">
                                    <span class="hd">
                                        <i></i>
                                        <h4>KG彩票</h4>
                                    </span>
                                    <span class="bd">创酷玩法，应有尽有</span>
                                </a>
                            </dd>  
                        </dl>
                    </div>
                </div>
                </li>
                <li class="<?=$this->setActive('/home/mobile') ?>"><a href="/home/mobile">客户端</a></li>
                <li class="<?=$this->setActive('/promotions/index') ?>"><a href="/promotions/index">优惠活动</a></li>
                <li><a href="/agent/home/index" target="_blank" >合营加盟</a></li>
            </ul>
        </div>
        <div class="logo fl"><a href="/home/index" title="<?=Helper::GetSiteTextInfo(2);?> 首页"><img src="<?=$this->getCdn();?>/static/images/header_logo.png" /></a></div>
    </div>
</div>
<script type="text/javascript">
    //导航下拉
    $(function(){
        $('#menu').find('li').mouseover(function(){
            $(this).addClass('hover');
            $(this).find('.nav-drop').show();
        });
        $('#menu').find('li').mouseout(function(){
            $(this).removeClass('hover');
            $(this).find('.nav-drop').hide();
        });
    });
</script>

