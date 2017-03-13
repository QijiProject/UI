;(function ($, window, document, undefined) {
    var pluginName = 'FormatTime',  
        defaults = {                
        	timezone: '8',
        	isWeek: false,
        	order: ['y','m','d','t','g'],
            isGMT: false
        };
    function Plugin(element, options) {
        this.element = element;     

        this.options = $.extend({
        	timezone: '8',
        	isWeek: false,
        	order: ['y','m','d','t','g'],
            isGMT: false
        }, defaults, options);  
        this._defaults = defaults;
        this._name = pluginName;
        this.init(); 
    }
    Plugin.prototype = {
        init:function() {
            var iniTime = new Date();
            var numTime = iniTime.getTime();
            var TimeToGMT = iniTime.getTimezoneOffset()/60;
            var gmtTime = numTime + TimeToGMT*3600*1000;
            if (this.options.timezone != undefined) {
                var time = new Date(gmtTime + this.options.timezone*3600*1000);
                var gmt = -1*this.options.timezone;
            }else{
                var time = iniTime;
                var gmt = TimeToGMT;
            }
            if (this.options.isWeek == true) {
                var day = this.nf(time.getDate(), 2);
                var week = time.getDay();
                var weekname;
                switch(week) 
                { 
                case 0:weekname="日";break; 
                case 1:weekname="一";break; 
                case 2:weekname="二";break; 
                case 3:weekname="三";break; 
                case 4:weekname="四";break; 
                case 5:weekname="五";break; 
                case 6:weekname="六";break; 
                default:weekname="系统错误，无法读取日期！"; 
                } 
                day +='(' + weekname + ')';
            }else{
                var day = this.nf(time.getDate(), 2);
            }
            if (this.options.isGMT == true) {
                var g = '&nbspGMT' + this.getGMT(gmt) + '00' + '&nbsp';
            }else {
                var g = '';
            }
            var y = time.getFullYear();
            var m = this.nf(time.getMonth() + 1, 2);
            var d = day;
            var t = this.nf(time.getHours(),2) + ":" + this.nf(time.getMinutes(),2) + ":" + this.nf(time.getSeconds(), 2) + '&nbsp';
            if (this.options.order[0]== 'y' || this.options.order[0] == 'm' || this.options.order[0]== 'd') {
                var formated = eval(this.options.order[0]) + '/' + eval(this.options.order[1]) + '/' + eval(this.options.order[2]) + "&nbsp" + eval(this.options.order[3]) + eval(this.options.order[4]);
            }else if(this.options.order[1]== 'y' || this.options.order[1]== 'm' || this.options.order[1]== 'd'){
                var formated = eval(this.options.order[0]) + eval(this.options.order[1]) + '/' + eval(this.options.order[2]) + '/' + eval(this.options.order[3]) + eval(this.options.order[4]);
            }else{
                var formated = eval(this.options.order[0]) + eval(this.options.order[1]) + eval(this.options.order[2]) + '/' + eval(this.options.order[3]) + '/' + eval(this.options.order[4]);
            }
            $(this.element).html(formated);
        },
        nf:function(num, size){
            var s = "000000000" + num;
            return s.substr(s.length-size);
        },
        getGMT:function(gmt){
            if (gmt <= 0) {
                return '+' + this.nf(-1*gmt, 2);
            }else{
                return '-' + this.nf(gmt, 2)
            }
        }
    }

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            // if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
            // }
        });
    }

})(jQuery, window, document);
