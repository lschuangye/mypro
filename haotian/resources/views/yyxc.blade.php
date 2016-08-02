@include('header')
<div class="mcwidth-img" id="arres">
		<img style="margin-top: 80px" src="./yyxc_files/arrow.png" title="1元学车">
	</div>
	<div class="mc">
		<!--扫码报名 start-->
		<div class="center-body">
			<div class="form-width">
				<div class="icon_ewm fl">
					<img src="./yyxc_files/icon-ewm-app-sm.png" class="width-img-pt">
					<br>&nbsp;微信扫一扫
					<br>客服随时找
				</div>

				<div class="info-from fl">
					<h4 class="infor-tit">已有<span id="StudentNum" class="text-num "></span>位学员报名学车</h4>

					<form class="info-div" method="post" action="" id="contact_form" onsubmit="return false;">
						<div class="info-div">
							<p class="error-txt ">
										<span class="span-title">
												<em class="em" id="em_id">您输入的帐号或密码错误</em>
											</span>
							</p>
							<p class="infor-p">
								<input type="text" class="infor-input" placeholder="姓名" id="IDName">
							</p>
							<p class="infor-p">
								<input type="text" class="infor-input" placeholder="电话" id="IDMobile">
							</p>
							<p class="infor-p info-p-width">
								<input type="text" class="infor-input" placeholder="验证码" id="ct_captcha" name="ct_captcha" size="4" maxlength="4">
							</p>
                            <p class="infor-p info-p-width" style="display: none">
                                <input type="text" class="infor-input" placeholder="渠道码" id="mcid" name="mcid" size="4" maxlength="4" value="9aa9b6cbb549c4b629c9fb3f81fdd214">
                            </p>
							<p class="code-txt">
								<!--<input type="button" id='btn_captcha' value="发送验证码到手机" class="btn_captcha">-->
								<input type="button" id="btn_captcha" value="获取验证码" class="btn_captcha">
							</p>
							<p class="infor-btn-style">
								<input type="button" id="submit2" value="立即报名" class="infor-input infor-btn-style btn-submit-p">
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--扫码报名 end-->
	</div>

	<!--pk-->
	<div class="pk">
		<div class="compare">
			<div class="item title">
				<div class="cicle">
					<div class="vmiddle">
						<h2>PK</h2>
					</div>
				</div>
				<ul>
					<li class="word">
						<p>传统驾校</p>
					</li>
					<li class="word">
						<p>其他学车网</p>
					</li>
					<li class="word">
						<img src="./yyxc_files/pklogo.png" alt="">
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>试学</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word correct">
						<p>1元试学</p>
						<p>服务满意再付款</p>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>资金</h2>
						<h2>托管</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>学费一次全额支付</p>
					</li>
					<li class="word incorrect">
						<p>无托管, 约束力低</p>
					</li>
					<li class="word correct">
						<p>学费的10%托管于平台</p>
						<p>学员拿证满意后返还教练</p>
					</li>
				</ul>
			</div>

			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>先行</h2>
						<h2>赔付</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>自营驾校, 申辩无力</p>
					</li>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word correct">
						<p>第三方监管, 先行赔付</p>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>选择</h2>
						<h2>教练</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>被迫安排</p>
					</li>
					<li class="word incorrect">
						<p>挑选眼花缭乱</p>
					</li>
					<li class="word correct">
						<p>10秒抢单, 选择满意教练</p>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>评价</h2>
						<h2>机制</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word correct">
						<p>学员评价机制</p>
					</li>
					<li class="word correct">
						<p>海量学员评价</p>
						<p>放心挑选教练</p>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>收费</h2>
						<h2>透明</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>不公开, 额外费用多</p>
					</li>
					<li class="word incorrect">
						<p>收费半包制</p>
						<p>只有总价没有细节</p>
					</li>
					<li class="word correct">
						<p>收费项目透明</p>
						<p>套餐细节一目了然</p>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>投诉</h2>
						<h2>响应</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word correct">
						<p>5×8小时</p>
					</li>
					<li class="word correct">
						<p>7×24小时</p>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="cicle">
					<div class="vmiddle">
						<h2>学车</h2>
						<h2>总监</h2>
					</div>
				</div>
				<ul>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word incorrect">
						<p>无</p>
					</li>
					<li class="word correct">
						<p>独家推出学车总监</p>
						<p>1对1全程服务</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--pk end-->

	<div class="footer">
		<div class="mc clear-both">
			<!--学员学车现场  start-->
			<div class="drive-left fl">
				<h3 class="fontsize-num33">学员学车现场</h3>
				<div class="clear-both drive-left-border drive-m-t-b1 dri-border-w840"></div>
				<div class="drive-left-top">
					<div class="drive-left-img fl">
						<img src="./yyxc_files/03pic.png" class="drive-left-img-m">
						<img src="./yyxc_files/04pic.png"></div>
					<div class="drive-right-text fl">
						<span class="drive-rigth-tit">西丽训练场</span>
						<p class="drive-left-p">学员：顾先生
							<br> 教练：赵师傅</p>
						<p class="drive-left-p"> 学车评价：找到了靠谱的教练员，就等于成功了一半！非常感谢教练员赵师傅非常耐心的教我， 帮我总结我失败的原因，提出正确的改正方法，重要的是条理清晰，不啰嗦，让我很快就能上手 。通过一元学车的体验，让我对今后的学车充满了信心。</p>
					</div>
					<div class="clear-both"></div>
				</div>

				<div class="clear-both drive-left-border drive-m-t-b2 dri-border-w840"></div>

				<div class="drive-left-top">
					<div class="drive-left-img fl">
						<img src="./yyxc_files/01pic.png" class="drive-left-img-m">
						<img src="./yyxc_files/02pic.png"></div>
					<div class="drive-right-text fl">
						<span class="drive-rigth-tit">高新训练场</span>
						<p class="drive-left-p">学员：张同学
							<br> 教练：马师傅
						</p>
						<p class="drive-left-p">学车评价：通过微信支付一元后，马上就有教练联系到我了，看到学车地点离得挺近的，就想过去试试，结果还是很让人满意。教练服务态度很好，很耐心，全程一直在车上，不停地纠正我在学车中的问题，让我进步飞快。总的来说这是一次不错的体验。
						</p>
					</div>
				</div>

			</div>

			<div class="drive-right fl">
				<h3 class="fontsize-num33 drive-mg">最新报名学员</h3>
				<div class="clear-both drive-left-border drive-m-t-b2 dri-border-w360"></div>
				<div class="dri-r-tit">
					<span>学员</span><span class="span-mg-lr">电话</span><span>练车区域</span><span>申请时间</span>
				</div>
				<div class="myscroll">
					<ul style="margin-top: -22px;">
													

													

													

													

													

													

													<li>
								<span>赵女士</span><span class="span-mg-lr">135********</span><span>深圳盐田区</span><span>1小时前</span>
							</li>

													<li>
								<span>曹先生</span><span class="span-mg-lr">139********</span><span>深圳罗湖区</span><span>30分钟前</span>
							</li>

													<li>
								<span>江女士</span><span class="span-mg-lr">133********</span><span>深圳福田区</span><span>20小时前</span>
							</li>

													<li>
								<span>吕女士</span><span class="span-mg-lr">136********</span><span>重庆梁平县</span><span>2天前</span>
							</li>

													<li>
								<span>龚女士</span><span class="span-mg-lr">156********</span><span>深圳罗湖区</span><span>2小时前</span>
							</li>

													<li>
								<span>尹先生</span><span class="span-mg-lr">139********</span><span>深圳南山区</span><span>2天前</span>
							</li>

													<li>
								<span>廖先生</span><span class="span-mg-lr">151********</span><span>深圳南山区</span><span>3天前</span>
							</li>

													<li>
								<span>崔女士</span><span class="span-mg-lr">180********</span><span>天津武清区</span><span>3天前</span>
							</li>

													<li>
								<span>覃先生</span><span class="span-mg-lr">138********</span><span>深圳龙华新区</span><span>3天前</span>
							</li>

													<li>
								<span>马先生</span><span class="span-mg-lr">137********</span><span>广州番禺区</span><span>10分钟前</span>
							</li>

													<li>
								<span>何先生</span><span class="span-mg-lr">159********</span><span>深圳南山区</span><span>55分钟前</span>
							</li>

													<li>
								<span>顾女士</span><span class="span-mg-lr">150********</span><span>武汉经济开发区</span><span>55分钟前</span>
							</li>

													<li>
								<span>邱先生</span><span class="span-mg-lr">189********</span><span>天津西青区</span><span>5小时前</span>
							</li>

													<li>
								<span>贾先生</span><span class="span-mg-lr">150********</span><span>深圳罗湖区</span><span>2天前</span>
							</li>

											<li>
								<span>蔡女士</span><span class="span-mg-lr">131********</span><span>上海闵行区</span><span>10小时前</span>
							</li><li>
								<span>薛女士</span><span class="span-mg-lr">153********</span><span>深圳罗湖区</span><span>12小时前</span>
							</li><li>
								<span>唐先生</span><span class="span-mg-lr">136********</span><span>深圳南山区</span><span>1天前</span>
							</li><li>
								<span>沈先生</span><span class="span-mg-lr">185********</span><span>深圳宝安区</span><span>45分钟前</span>
							</li><li>
								<span>萧先生</span><span class="span-mg-lr">139********</span><span>广州海珠区</span><span>1天前</span>
							</li><li>
								<span>丁女士</span><span class="span-mg-lr">152********</span><span>武汉经济开发区</span><span>10分钟前</span>
							</li></ul>
				</div>
			</div>
			<!--学员学车现场  end-->
		</div>
	</div>


@include('footer')