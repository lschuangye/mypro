    <div class="blue-footer">

    <div class="footer-phone">
        <p><span>客服热线&nbsp;&nbsp;</span><span class="orange-big-text">028-89188888</span></p>
    </div>

    <!-- 链接 -->
    <div class="own-links" style="display: none;">
                                    <a href="http://www.91lianche.com.cn/articlel/2_1.html" target="_blank">学车指南</a>
                            <a href="http://www.91lianche.com.cn/articlel/3_1.html" target="_blank">学车资讯</a>
                            <a href="http://www.91lianche.com.cn/articlel/4_1.html" target="_blank">政策法规</a>
                                                                                                                                                                                                                                        <a href="http://www.91lianche.com.cn/team/9.html" rel="external nofollow">关于我们</a>
                                                                                        <a class="today" href="http://www.91lianche.com.cn/home/user_protocol.html"></a>
    </div>
    <!-- 链接 end -->
    <!-- 版权 -->
    <div class="copyright">
        <span>版权所有：成都本本无线科技有限公司 备案号：</span>
        <a href="http://www.miibeian.gov.cn/" rel="external nofollow" target="_blank">蜀ICP1390874号-1</a>
    </div>
    <!-- 版权end -->

</div>
    
	<script>
		$(function() {
			$('.myscroll').myScroll({
				speed: 40, //数值越大，速度越慢
				rowHeight: 26 //li的高度
			});
		});
	</script>

	<script>
		$(document).ready(function() {

//            imgWidthSet();

			get_num();

			$("#IDName").keydown(function(event) {
				if (event.which == "13") { //回车键,移动光标到电话框
					$("#IDMobile").focus();
				}
			});
			$("#IDMobile").keydown(function(event) {
				if (event.which == "13") { //回车键,移动光标到验证码框
					$("#ct_captcha").focus();
				}
			});
			$("#ct_captcha").keydown(function(event) {
				if (event.which == "13") { //回车键，用.ajax提交表单
					$("#submit").trigger("click");
				}
			});

			//定时器倒计时时间初始化
			var timerNum;

			//验证码获取
			$("#btn_captcha").click(function() {
				//获取用户名称
				var strTxtName = $("#IDName").val();
				//获取输入电话
				var strTxtPass = $("#IDMobile").val();
				if (!erreText()) {
					return false;
				}
				$(".btn_captcha").addClass("captcha-bgc");
				$(".btn_captcha").attr("disabled","disabled");

				//传送数据
				var dataInfo = 'Name=' + strTxtName + '&Mobile=' + strTxtPass + '&Action=auth';
				//开始发送数据
				$.ajax({ //请求提交处理页
					url: 'http://www.91lianche.com.cn/index.php/redpacket/auth_send', //地址
					type: 'POST', //请求类型
					data: dataInfo, //传送数据data: { txtName: strTxtName, txtPass: strTxtPass },
					dataType: 'json', //类型
					success: function(data) {
						if (data.code == 0) {
							alert("发送验证码成功");
							timerNum = 60;
							timer();
						} else {
							$("#em_id").html(data.msg);
							$(".error-txt").show();
							initData();
						}
					}
				});
			});

			//提交数据
			$("#submit").click(function() {
				//获取用户名称
				var strTxtName = $("#IDName").val();
				//获取输入电话
				var strTxtPass = $("#IDMobile").val();
				//获取验证码
				var str_ct_captcha = $("#ct_captcha").val();
                //Mcid
				var str_mcid = $("#mcid").val();
				if (!codeTxt()) {
					return false;
				}
				//传送数据
				var dataString = 'Name=' + strTxtName + '&Mobile=' + strTxtPass + '&ct_captcha=' + str_ct_captcha + '&Action=in&Mcid=' + str_mcid;
				//开始发送数据
				$.ajax({ //请求提交处理页
					url: 'http://www.91lianche.com.cn/index.php/redpacket/register_in', //地址
					type: 'POST', //请求类型
					data: dataString, //传送数据data: { txtName: strTxtName, txtPass: strTxtPass },
					dataType: 'json', //类型
					success: function(data) {
						if (data.code == 0) {
							alert(data.msg);
							$("#StudentNum").html((parseInt($("#StudentNum").text()) + 1));
							clearInterval(clock); //清除js定时器
							registerReload();

						} else {
							$("#em_id").html(data.msg);
							$(".error-txt").show();
//                            clearInterval(clock); //清除js定时器
//                            initData();
						}
					}
				});
			});
			//验证消息
			function erreText() {
				$('.error-txt').hide();
				var name = $("#IDName").val();
				if (name == "") {
					$("#em_id").html("请输入姓名！");
					$(".error-txt").show();
					$("#IDName").focus();
					return false;
				}
				if (name.length >= 20) {
					$("#em_id").html("姓名不能超过20字！");
					$(".error-txt").show();
					$("#IDName").focus();
					return false;
				}
				var mobile = $("#IDMobile").val();
				if (mobile == "") {
					$("#em_id").html("请输入电话号码！");
					$(".error-txt").show();
					$("#IDMobile").focus();
					return false;
				}
				return true;
			}

			function codeTxt() {
				var authcodetxt = $("#ct_captcha").val();
				if (authcodetxt == "") {
					$("#em_id").html("请输入验证码！");
					$(".error-txt").show();
					$("#ct_captcha").focus();
					return false;
				}
				return true;
			}


			function get_num()
			{
				var dataString = 'Action=num';
				$.ajax({ //请求提交处理页
					url: 'http://www.91lianche.com.cn/index.php/redpacket/get_num', //地址
					type: 'POST', //请求类型
					data: dataString, //传送数据data: { txtName: strTxtName, txtPass: strTxtPass },
					dataType: 'json', //类型
					success: function(data) {
						if (data.code == 0) {
							$("#StudentNum").html(parseInt(data.data));
						} else {
							$("#StudentNum").html('1314');
						}
					}
				});

			}

			function initData()
			{
				//发送验证码按钮可用
				$("#btn_captcha").removeClass();
				$("#btn_captcha").addClass("btn_captcha");
				$("#btn_captcha").attr("disabled",false);
				$("#btn_captcha").val('发送验证码');
			}

			function registerReload()
			{
				$("#IDName").val('');
				$("#IDMobile").val('');
				$("#ct_captcha").val('');
				$("#em_id").html('');
				//发送验证码按钮可用
				initData();
			}

			function timer()
			{
//                disableData();
				$("#btn_captcha").val(timerNum+'秒后重新获取');
				clock = setInterval(doLoop, 1000); //一秒执行一次
			}

			function doLoop()
			{
				timerNum--;
				if(timerNum > 0){
					$("#btn_captcha").val(timerNum+'秒后重新获取');
				}else{
					clearInterval(clock); //清除js定时器
					$("#btn_captcha").val('发送验证码');
					//按钮恢复可用
					initData();
				}
			}

			function imgWidthSet()
			{
				var width_screen = screen.width - 17;
				var heightImg = width_screen * 0.34;
				$("#arres img").width(width_screen).height(heightImg);
			}

		})
	</script>

	<script>
		var JPlaceHolder = {
			//检测
			_check: function() {
				return 'placeholder' in document.createElement('input');
			},
			//初始化
			init: function() {
				if (!this._check()) {
					this.fix();
				}
			},
			//修复
			fix: function() {
				jQuery(':input[placeholder]').each(function(index, element) {
					var self = $(this),
							txt = self.attr('placeholder');
					self.wrap($('<div></div>').css({
						position: 'relative',
						zoom: '1',
						border: 'none',
						background: 'none',
						padding: '0 0 0 5px',
						margin: 'none'
					}));
					var pos = self.position(),
							h = self.outerHeight(true),
							paddingleft = self.css('padding-left');
					var holder = $('<span></span>').text(txt).css({
						position: 'absolute',
						left: pos.left,
						top: pos.top,
						height: h,
						lienHeight: h,
						paddingLeft: paddingleft,
						color: '#aaa'
					}).appendTo(self.parent());
					self.focusin(function(e) {
						holder.hide();
					}).focusout(function(e) {
						if (!self.val()) {
							holder.show();
						}
					});
					holder.click(function(e) {
						holder.hide();
						self.focus();
					});
				});
			}
		};
		//执行
		jQuery(function() {
			JPlaceHolder.init();
		});
	</script>


</div>

</body></html>