<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
* { margin:0; padding:0; }
body{font-family:arial,"Microsoft Yahei";}
.total-ticker{position:relative; width:100%; height:34px; color:#fdd039; font-size:20px; font-family:"SimSun"; text-align:center;}
.total-ticker .jackpot{display:inline; float:left; margin-right:5px;  text-align:center; line-height:30px; font-family:arial;}
</style>
</head>
<body style="background-color:transparent;"> 
<div class="ticker">
    <div id="total-ticker" class="total-ticker"></div>
</div>
<script language="JavaScript" type="text/javascript" src="/js/jquery/jquery.min.js"></script> 
<script language="JavaScript" type="text/javascript" src="https://tickers.playtech.com/jackpots/new_jackpotjs.js"></script>
<script type="text/javascript">
    //累计奖池
    var StartPageGlobal = {
        hasCustomFooterColor:false,
        customFooterColor:'',
        shouldOpenUnsubscribeNewsletter:false 
    };
    function addCommas(nStr){
        nStr += "";
        x = nStr.split(".");
        x1 = x[0];
        x2 = x.length > 1 ? "." + x[1] :"";
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, "$1" + "," + "$2");
        }
        return x1 + x2;
    }       
	Ticker.prototype.showJackpot = function() {	 
		var newvalue = this.getJackpot();
		if (this.type != 'count') {
			newvalue = Math.round(newvalue * 100) / 100 + '';
		    if (newvalue.match(/^\d+\.\d$/)) {newvalue = newvalue + '0';}
			if (newvalue.match(/^\d+$/)) {newvalue = newvalue + '.00';}
		}
		var text = '';
		if (newvalue > 0) {text = (this.signpos != 0 ? addCommas(newvalue) + this.sign :this.sign + addCommas(newvalue)); }
		if (newvalue > 0 && this.type == 'count') {text = newvalue;}
		var imgtxt = loadImage(text);
		if (imgtxt != '') {this.textbox.innerHTML = imgtxt;}
	}
	function loadImage(am) {
		var digit_len = am.length;
		var digit_img_str = "";
		for (var di = 0; di < digit_len; di++) 
        {
			if (am[di].match(/^[0-9]$/)) 
            {
				digit_img_str += "<span class='jackpot jackpot_num'>" + am[di] + "</span> "
			} 
            else 
            {
				var classType = '';
				if (am[di] == '.') {
					classType = 'jackpot-dot';
				} else if (am[di] == ',')  {
					classType = 'jackpot-comm';
				} else {
					continue;
				}
				digit_img_str += "<span class='jackpot " + classType + "'>"+ am[di] +"</span>";
			}
		}
		return digit_img_str;
	}
	var ticker = new Ticker({
		info:2,
		casino:"playtech",
		currency:'cny',
		root_url:"https://tickers.playtech.com/" 
	});
	ticker.attachToTextBox("total-ticker");
	ticker.SetCurrencyPos(0);
	ticker.SetCurrencySign('￥');
	ticker.tick(); 
    // 累计奖池 结束
</script>
</body>

