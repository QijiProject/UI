<?php
Yii::app()->clientScript->registerScriptFile('/js/agent/register.js', CClientScript::POS_END);
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
                <h3>合营申请表</h3>
                <p><?=Helper::GetSiteTextInfo(21);?>（请详细填写以下表格，带 <em class="cRed">*</em> 项目为必填项目）</p>
            </div>
            <form id="agentReg" method="post" action="/kz/agent/account">
            <fieldset>
                <legend>账户资料</legend>
                <ul class="mod-forms">
                    <li>
                        <label><em class="cRed">*</em> 用户名</label>
                        <div class="item-ipt">
                            <input type="text" name="aname" maxlength="50" class="txt-ipt"/>
                            <input type="hidden" name="atype" value="1000" />
                            <!-- input 触发焦点时出现tips -->
                            <p><span class="tips">请输入4-12个字符, 仅可输入英文字母以及数字的组合</span></p>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 密码</label>
                        <div class="item-ipt">
                            <input type="password" id="apwd" name="apwd" maxlength="50" class="txt-ipt"/>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 确认密码</label>
                        <div class="item-ipt">
                            <input type="password" name="password1" maxlength="50" class="txt-ipt"/>
                            <p><span class="tips">密码长度为6-16个字符,以及必须含有字母和数字的组合</span></p>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 安全提问</label>
                        <div class="item-ipt">
                             <?=CHtml::dropDownList('qid','',CHtml::listData($questions,'sqid','question'),array('tabindex'=>7)) ?>
                            <p>
                                <input type="text" name="aanswer" maxlength="50" class="txt-ipt"/>
                            </p>
                            <p><span class="tips">安全提问及答案将用来核对您的身份</span></p>
                            <!--一直存在-->
                        </div>
                    </li><!-- 
                    <li>
                        <label><em class="cRed">*</em> 国家</label>
                        <div class="item-ipt">
                            <select name="acountry">
                                <option value="CN" selected="selected">中国</option>
                            </select>
                        </div>
                    </li> -->
<!--                     <li>
                        <label><em class="cRed">*</em> 首选货币</label>
                        <div class="item-ipt">
                            <select name="acurrency">
                                <option value="CNY" selected="selected">人民币</option>
                            </select>
                        </div>
                    </li> -->
<!--                     <li>
                        <label><em class="cRed">*</em> 首选语言</label>
                        <div class="item-ipt">
                            <select name="alanguage">
                                <option value="chs" selected="selected">中文</option>
                            </select>
                        </div>
                    </li> -->
                </ul>
            </fieldset>
            <fieldset>
                <legend>联系信息</legend>
                <ul class="mod-forms">
                    <li>
                        <label><em class="cRed">*</em> 真实姓名</label>
                        <div class="item-ipt">
                            <input type="text" name="realname" maxlength="50" class="txt-ipt"/>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 性别</label>
                        <div class="item-ipt"> <span class="gender">
						<label>
                            <input type="radio" where="ppa" name="gender" value="1"/>
                            男</label>
						<label>
                            <input type="radio" where="ppa" name="gender" value="2"/>
                            女</label>
						</span> </div>
                    </li>
                    <li>
                        <input type="hidden" id="birthyear" name="birthyear" />
                        <input type="hidden" id="birthmonth" name="birthmonth" />
                        <input type="hidden" id="birthday" name="birthday" />
                        <label><em class="cRed">*</em> 出生日期</label>
                        <div class="item-ipt">
                            <input type="text" where="na" readonly id="showBirthDay" name="showBirthDay" maxlength="50" class="txt-ipt"/>
                            <span onclick="WdatePicker({el:'showBirthDay',isShowClear:false,readOnly:true,minDate:'1900-01-01',maxDate:'1997-12-31'})" class="tips-date"><i></i></span> </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 邮箱地址</label>
                        <div class="item-ipt">
                            <input type="text" name="email" maxlength="50" class="txt-ipt"/>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 手机号码</label>
                        <div class="item-ipt">
                            <input type="text" name="aphone" maxlength="50" class="txt-ipt"/>
                            <p><span class="tips">请您确保邮箱与手机填写无误，有助您接受讯息和找回密码。</span></p>
                        </div>
                    </li>
                </ul>
            </fieldset>
            <fieldset>
                <legend>推广信息</legend>
                <ul class="mod-forms">
                    <li>
                        <label><em class="cRed">*</em> 推广计划</label>
                        <div class="item-ipt">
                            <textarea name="aplan" cols="50" rows="4"></textarea>
                            <p><span class="tips">例如：行业经验谈、目前网站流量统计信息，或是您未来计划的推广方式</span></p>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 推广网站</label>
                        <div id="webs" class="item-ipt">
                            <div>
                                <input type="text" name="awebs" maxlength="50" class="txt-ipt"/>
                              <!--   <span onclick="add_web()" class="add-btn"></span></div> -->
                            <!-- 点击加按钮 添加一行 -->
                            <!--                <p><input type="text" name="webs" maxlength="50" class="txt-ipt ignore"/>-->
                            <!--                    <span onclick="del_web(this)" class="del-btn"></span></p>-->
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 目标市场</label>
                        <div class="item-ipt">
                            <select name="amarket" tabindex="7">
                                <option value="CN" selected="selected">中国</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <label><em class="cRed">*</em> 验证码</label>
                        <div class="item-ipt">
                            <input type="text" where="pa" name="verifycode" id="captcha_text" maxlength="50" class="txt-ipt"
                                   style="width: 100px;"/>
                            <img id="captcha" onclick="get_captcha();" src="/service/verifycode"><!-- 
                            <input type="hidden" id="uuid" name="captchaId" value=""> -->
                            <span id="captcha_text-error"></span> </div>
                    </li>
                </ul>
            </fieldset>
            <div class="agreement">
                <input type="checkbox" name="iagree" value="1" checked="checked">
                我已阅读并同意 <a target="_blank" href="/agent/home/agreement">"合营条款和条件"</a>。<br/>
                <input type="checkbox" checked="checked">
                我已年满18周岁 </div>
            <div class="reg-sub"> <a id="agent_reg_btn" href="javascript:void (0);" onclick="reg_agent();" class="btn-sub">提交申请</a></div>
        </form>
        </div>
    </div>