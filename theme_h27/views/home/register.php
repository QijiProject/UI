<?php
Yii::app()->clientScript->registerScriptFile('/js/member/register.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/js/jquery/jquery.validate.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/js/My97DatePicker/WdatePicker.js', CClientScript::POS_END);

$now = time();
$year = (int)date('Y', $now);
$limit_year = $year - 17; //用户注册最小年龄

$minDate = '1900-01-01';
$maxDate = DateUtil::short(strtotime($limit_year . '-01-01') - 1);

?>
<div class="content">
    <div class="mod-reg">
        <div class="layout">
            <div class="hd">
                <h3>欢迎注册<?=Helper::GetSiteTextInfo(2);?></h3>
                <p><?=Helper::GetSiteTextInfo(20);?>（请详细填写以下表格，带 <em class="cRed">*</em> 项目为必填项目）</p>
            </div>
            <form id="memberReg" method="post" action="/kz/member/account">
                <fieldset>
                    <legend>账户资料</legend>
                    <ul class="mod-forms">

                        <li>
                            <label><em class="cRed">*</em> 用户名称</label>

                            <div class="item-ipt">
                                <input type="text" name="joiname" value="" maxlength="50" class="txt-ipt"/>
                                <p><span class="tips">请输入4-12个字符, 仅可输入英文字母以及数字的组合</span></p>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 确认密码</label>

                            <div class="item-ipt">
                                <input type="password" id="joinpwd" name="joinpwd" value="" maxlength="50" class="txt-ipt"/>
                                <p><span class="tips">密码长度为6-16个字符,以及必须含有字母和数字的组合</span></p>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 密码</label>

                            <div class="item-ipt">
                                <input type="password" name="password1" maxlength="50" value="" class="txt-ipt"/>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 安全提问</label>

                            <div class="item-ipt">
                                <?=CHtml::dropDownList('qid','',CHtml::listData($questions,'sqid','question'),array('tabindex'=>7)) ?>
                                <p><input type="text" name="uanswer" maxlength="50" class="txt-ipt"/></p>

                                <p><span class="tips">安全提问及答案将用来核对您的身份</span></p><!--一直存在-->
                            </div>
                        </li>
                    </ul>
                </fieldset>

                <fieldset>
                    <legend>个人资料</legend>
                    <ul class="mod-forms">
                        <li>
                            <label><em class="cRed">*</em> 真实姓名</label>

                            <div class="item-ipt">
                                <input type="text" name="fullname" maxlength="50" value="" class="txt-ipt"/>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 性别</label>

                            <div class="item-ipt">
							<span class="gender">
								<label><input type="radio" checked name="gender" where="ppa" value="1" id="RadioGroup1_0"/>男</label>
								<label><input type="radio" name="gender" where="ppa" value="2" id="RadioGroup1_1"/>女</label>
							</span>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 出生日期</label>

                            <div class="item-ipt">
                                <input type="hidden" id="birthyear" name="birthyear"/>
                                <input type="hidden" id="birthmonth" name="birthmonth"/>
                                <input type="hidden" id="birthday" name="birthday"/>
                                <input type="text" readonly id="showBirthDay" name="showBirthDay" where="pa" maxlength="50"
                                       class="txt-ipt"/>
                                <span class="tips-date"
                                      onclick="WdatePicker({el:'showBirthDay',isShowClear:false,readOnly:true,minDate:'<?= $minDate ?>',maxDate:'<?= $maxDate ?>'})"><i></i></span>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 邮箱地址</label>

                            <div class="item-ipt">
                                <input type="text" name="email" value="" maxlength="50" class="txt-ipt"/>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 手机号码</label>

                            <div class="item-ipt">
                                <input type="text" name="uphone" value="" maxlength="50" class="txt-ipt"/>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 国家</label>

                            <div class="item-ipt">
                                <select name="staddr">
                                    <option value="CN" selected="selected">中国</option>
                                </select>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 首选货币</label>

                            <div class="item-ipt">
                                <select name="ucurrency">
                                    <option value="CNY" selected="selected">人民币</option>
                                </select>
                            </div>
                        </li>

                        <li>
                            <label><em class="cRed">*</em> 首选语言</label>

                            <div class="item-ipt">
                                <select name="ulanguage">
                                    <option value="chs" selected="selected">中文</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>推介代码</label>
                            <div class="item-ipt">
                                <?php if(empty($code)): ?>
                                    <input type="text" name="agc" maxlength="50" class="txt-ipt ignore"/>
                                <?php else: ?>
                                    <input type="text" name="agc" maxlength="50" readonly value="<?=$code ?>" class="txt-ipt ignore"/>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <label><em class="cRed">*</em>验证码</label>

                            <div class="item-ipt">
                                <input type="text" name="verifycode" where="pa" maxlength="50" class="txt-ipt"/>
                                <img onclick="get_captcha()" id="captcha" src="/service/verifycode"/>
                            </div>
                        </li>
                    </ul>
                </fieldset>
                <div class="agreement"><input type="checkbox" checked="checked"> 我已届满合法博彩年龄﹐且同意并愿意遵守 <a
                        href="/help/terms">"用户协议"</a>。
                </div>
                <div class="reg-sub"><a onclick="sub_member()" href="javascript:void(0);">立即注册</a></div>
            </form>
        </div>
    </div>
</div>