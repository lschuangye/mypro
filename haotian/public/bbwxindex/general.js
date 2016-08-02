
var general={
	inputKeyDown:'',
	inputKeyUp:'',
	alert:function(tips,type){  //显示提示文字
		var tips=tips||'',
			type=type||'warn',  //也许以后用得到
			html='<span class="alert-tips">'+tips+'</span>';
		$('body').append(html);
		setTimeout(function(){
			$('.alert-tips').remove();
		},1500);
	},
	isTelVerify:function(txt){  //检查验证码是否合法
		var txt=txt||'',
			reg=/(^\s*)(\d{4})(\s*$)/g;
		return reg.test(txt);
	},
	isTelPhone:function(txt){  //检查电话号码是否合法
		var txt=txt||'',
			reg=/(^\s*)(\d{11})(\s*$)/g;
		return reg.test(txt);
	},
	isInputNumber:function(event){  //检查输入的字符是不是数字，0-9对应48-57
		var e=event||window.event,
			reg=/^(4[8-9])|(5[0-7])$/g,
			code=e.keyCode==0?e.charCode:e.keyCode;  //兼容不同的浏览器
		return reg.test(code);
	},
	isIEBrowser:function(){  //是否是IE浏览器
		var userAgent=navigator.userAgent;
		if(userAgent.indexOf('Edge')>-1||userAgent.indexOf('MSIE')>-1){
			return true;
		}else{
			return false;
		}
	},
	timeoutFn:null,
	timeCountDown:function(func,callback){  //倒计时，func:倒计时的时候需要处理的函数，callback：到时间后的处理函数
		var func,
			callback;
		if(arguments.length>0){
			func=arguments[0];
			callback=arguments[1]||null;
		} 
		if(countDownTotalTime){			
			general.timeoutFn=setTimeout(function(){
				if(countDownTotalTime<=1){
					clearTimeout(general.timeoutFn);
					callback && callback();
				}else{
					countDownTotalTime--;
					func&&func();
					general.timeCountDown(func,callback);
					}
			},1000);
		}
	},
	trim:function(txt){  //去掉头尾的空格
		var txt=txt||'',
			reg=/(^\s*)|(\s*$)/g;
		return txt.replace(reg,'');
	},
	popupWindowVerticalCenter:function(popupWindowObj){  //弹框垂直居中
		if(popupWindowObj){
			var docHeight=document.documentElement.clientHeight,
				popupwindowHeight=popupWindowObj.offsetHeight,
				half_docHeight=docHeight/2,
				half_popupwindowHeight=popupwindowHeight/2,
				finalHeight=half_docHeight>half_popupwindowHeight?half_docHeight-half_popupwindowHeight:0;
			popupWindowObj.style.marginTop=finalHeight+'px';
		}
	}
}
