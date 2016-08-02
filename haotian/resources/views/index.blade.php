@include('header')
<div class="container-fluid">


    <!-- 轮播图 -->
          <div class="banner">
        <div id="slides" style="min-width: 1200px; overflow: hidden; display: block;">
                      <div class="slidesjs-container" style="overflow: hidden; position: relative; width: 1528px; height: 353.295px;"><div class="slidesjs-control" style="position: relative; left: 0px; width: 1528px; height: 353.295px;">
                              <a href="/kjmt" style="width: 100%; height: 100%; display: none; position: absolute; top: 0px; left: 0px; z-index: 0; backface-visibility: hidden;" target="_blank" class="slidesjs-slide" slidesjs-index="1">
              <img src="./bbwxindex/央视采访.jpg" alt="">
            </a><a href="/yyxc" style="width: 100%; height: 100%; display: block; position: absolute; top: 0px; left: 0px; z-index: 10; backface-visibility: hidden;" target="_blank" class="slidesjs-slide" slidesjs-index="2">
              <img src="./bbwxindex/一元试学(1).png" alt="">
            </a></div></div>
                      
                      
                  <ul class="slidesjs-pagination"><li class="slidesjs-pagination-item"><a href="/" data-slidesjs-item="0" class="">1</a></li><li class="slidesjs-pagination-item"><a href="/bbwx" data-slidesjs-item="1" class="">2</a></li><li class="slidesjs-pagination-item"><a href="/#" data-slidesjs-item="2" class="active">3</a></li></ul></div>
        <img src="./bbwxindex/code_right_now.png" alt="扫码立即学车" style="width: 11.51%;position: absolute;z-index: 100;top: 20.23%;left: 50%;margin-left: 19.25%;">
      </div>
    
    <!--发布订单-->
    <input type="hidden" value="0" id="OrderExist">
    <div class="send-order-wrap">

</div>

<input type="hidden" id="showToggleCityButton" value="1">


<script type="text/html" id="sendOrder">
    <div class="send-order">
        <p>10秒找到满意教练</p>
        <form action="" id="sendOrderForm">
            <div class="choose">

                <div class="item" <?php //if showToggleCityButton == 0 && siteCityId != 0;?>style="display: none;"<?php ///if;?>>
                    <p class="caption">城&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市</p>
                    <div class="options address">
                        <span>
                            <span id="cityName" class="label toggle-city-label">
                                <img src="<?php //baseurl;?>/assets/website/img/address.png" style="height: 16px;" alt="">
                                <?php //if CityList!='';?>
                                    <?php //each CityList as v k;?>
                                        <?php //if LocationCityId==v.Id;?>
                                            <?php //v.Name;?>
                                        <?php ///if;?>
                                    <?php ///each;?>
                                <?php ///if;?><span>[切换]</span>
                            </span>
                        </span>
                        <div class="addresses" style="display: none;">
                            <?php //if CityList!='';?>
                                <?php //each CityList as v k;?>
                                    <a href="javascript:void(0);" data-cityid='<?php //v.Id;?>' data-cityname="<?php //v.Name;?>"
                                       <?php //if LocationCityId==v.Id;?>class="selected"<?php ///if;?>><?php //v.Name;?></a>
                                <?php ///each;?>
                            <?php ///if;?>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <p class="caption">驾照类型</p>
                    <div class="options">
                        <?php //each LicenseType as v k;?>
                        <span>
                            <span class="label driving-type-label" data-id='<?php //v.Id;?>'><?php //v.Name;?></span>
                        </span>
                        <?php ///each;?>
                    </div>
                </div>

                <div class="item">
                    <p class="caption">
                        <span>班&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span>
                        <a href="javascript:void(0);" id="classTypeQA">
                            <img src="<?php //baseurl;?>/assets/website/img/icon/icon-question-mark.png" alt="">
                        </a></p>
                    <div class="options">
                        <?php //each SiteExam as v k;?>
                        <span>
                            <span class="label class-type-label" data-id='<?php //v.Id;?>'><?php //v.Name;?></span>
                        </span>
                        <?php ///each;?>
                    </div>

                </div>


                <div class="item">
                    <p class="caption">
                        <span>参考套餐</span>
                        <a href="javascript:void(0);" id="referTypeQA">
                            <img src="<?php //baseurl;?>/assets/website/img/icon/icon-question-mark.png" alt="">
                        </a></p>
                    <div class="options">
                        <?php //each SiteExam as vp kp;?>
                            <?php //each vp.Class as v k;?>
                                <span <?php //if kp!=0;?>style="display:none;"<?php ///if;?>>
                                    <span id="referType<?php //v.Id;?>-<?php //vp.Id;?>" class="label refer-type-label" data-id='<?php //v.Id;?>'><?php //v.Name;?></span>
                                </span>
                            <?php ///each;?>
                        <?php ///each;?>
                    </div>
                </div>


                <div class="item">
                    <p class="caption">
                        <span>练车区域</span>
                        <br>
                        <span style="color: #808080;">(可多选)</span>
                    </p>
                    <div class="options">
                        <?php //each Region as v k;?>
                            <span>
                                <input type="checkbox" name="area-type" id="area<?php //k;?>">
                                <span class="label area-type-label <?php //if v.Status == 1;?>non-clickable<?php ///if;?>" data-id='<?php //v.Id;?>' ><?php //v.Name;?></span>
                            </span>
                        <?php ///each;?>
                    </div>
                </div>

                <div class="item price-range-wrap">
                    <p class="caption">套餐价格</p>
                    <div class="options">
                        <span>
                            <span class="label price-range non-clickable" id="priceRange">请选择套餐</span>
                        </span>
                    </div>
                </div>
            </div>

            <button type="button" id="postPreOrder" style="width: 220px; font-size: 17px;">立即约教练</button>
        </form>
    </div>
</script>


<script type="text/html" id="SimplePopupTpl">
    <div class="content">
        <p class="title">
            <?php //title;?>
        </p>
        <?php //each content as v i;?>
        <div class="main-text">
            <p class="t"><?php //v.t;?></p>
            <p class="c"><?php //v.c;?></p>
        </div>
        <?php ///each;?>
    </div>
</script>

<div class="simple-popup">
</div>

<script>
    $(function(){

        $(".simple-popup").on("click", function (e) {
            var _this = $(this);
            var target = e.target || window.event.srcElement;
            if($(target).is(".simple-popup")){
                _this.hide();
            }
        })
    });
</script>

<script>

    $(function(){
        var body = $("body");
        var siteExamData;


        body.on("click", ".address #cityName", function(e){
            var target = e.target || window.event.srcElement;
            if($(target).is(".addresses")){
                return;
            }
            if($(".addresses").is(":hidden")){
                $(".addresses").show();
            }else{
                $(".addresses").hide();
            }
            e.stopPropagation();
        });

        body.on("click", function (e) {
            var target = e.target || window.event.srcElement;
            if($(target).is("div.addresses") || $(target).is(".addresses a")){
                return false;
            }
            if(!$(".addresses").is(":hidden")){
                $(".addresses").hide();
            }
        });

        body.on("click", ".addresses a", function(){
            var _this = $(this);
            var cityId = $(this).data("cityid");
            var cityName = $(this).data("cityname");

            var url = "http://"+window.location.host+"/trading_chain/trade/demand";
            var params = {
                CityId:cityId
            };
            $.post(url, params, function(data){
                if(data.code == 0){
                    $(".addresses a").removeClass("selected");
                    $("#cityName").text(cityName + " [切换]");
                    $("#CityId").val(cityId);
                    _this.addClass("selected");
                    $(".addresses").hide();
                    data.data.baseurl = "http://" + window.location.host;
                    if(document.getElementById('sendOrder') && $("#OrderExist").val()== 0){
                        var result = template("sendOrder", data.data);
                        $(".send-order-wrap").html(result);
                    }
                }
            }, 'json');
        });


        var url ="http://"+ window.location.host + "/trading_chain/trade/demand";
        var cityId = null;
        if($("#SiteCityId").val() == 0){
            cityId = $("#CityId").val();
        }else{
            cityId = $("#SiteCityId").val();
        }

        var params = {
            CityId:cityId
        };
        var OrderExist = $("#OrderExist").val();
        if(OrderExist == 0){
            $.post(url, params, function(data){
                if(data.code == 0){
                    siteExamData = data.data;
                    data.data.baseurl = "http://" + window.location.host;
                    data.data.showToggleCityButton = $("#showToggleCityButton").val();
                    data.data.siteCityId = $("#SiteCityId").val();
                    var result = template("sendOrder", data.data);
                    $(".send-order-wrap").html(result);
                }
            });
        }


        //点击驾照类型label
        body.on("click", ".driving-type-label", function(){

            $(".driving-type-label").removeClass("checked");

            $(this).addClass("checked");
        });

        //点击班别, 为了兼容ie8, 只能监听label, input形同虚设
        body.on("click", ".class-type-label", function(){
            var classTypeId = $(this).data("id");
            $(".class-type-label").removeClass("checked");
            $(this).addClass("checked");
            $(".refer-type-label").each(function(index, value){
                $(this).removeClass("checked");
                var referId = $(value).attr("id");
                var splitId = referId.split('-');
                if(splitId[splitId.length-1] == classTypeId){
                    $(this).parent().show();
                }else{
                    $(this).parent().hide();
                }
            })
        });

        //点击参考套餐label
        body.on("click",".refer-type-label", function(){
            $(".refer-type-label").removeClass("checked");
            $(this).addClass("checked");
        });

        //点击练车区域label
        body.on("click", ".area-type-label", function(){
            var _this = $(this);
            //不能点击的label直接退出
            if(_this.hasClass('non-clickable')){
                return false;
            }
            if($(this).hasClass("checked")){
                $(this).removeClass("checked");
            }else{
                $(this).addClass("checked");
            }
        });

        //保存最小套餐价格和最大套餐价格
        var minPrice = 0;
        var maxPrice = 0;

        var priceChangeFlag = false;
        //整个表单改变, 为了兼容ie8, 不监听change事件, 而是监听label的点击事件
        body.on("click","#sendOrderForm .label", function(){
            var _this = $(this);
            //不能点击的label直接退出
            if(_this.hasClass('non-clickable')){
                return false;
            }

            var params = getCheckedParams();
            var url = "http://"+window.location.host+"/trading_chain/trade/get_price_range";
            priceChangeFlag = true;
            $("#priceRange").parents(".item").find(".caption").css("padding-top", "5px");
            $("#priceRange").css("font-size", "18px").text("价格计算中...");
            $.post(url,params, function(data){
                priceChangeFlag = false;
                var res = data.data;
                if(data.code == 0){
                    minPrice = res.MinPrice;
                    maxPrice = res.MaxPrice;
                    if(minPrice == 0 && maxPrice == 0){
                        $("#priceRange").parents(".item").find(".caption").css("padding-top", "5px");
                        $("#priceRange").css("font-size", "18px").text("未开通, 请更换其它区域或套餐...");
                    }else{
                        $("#priceRange").parents(".item").find(".caption").css("padding-top", "10px");
                        $("#priceRange").css("font-size", "24px").html(res.MinPrice + '-' + res.MaxPrice+"<span style='font-size: 12px;'>元</span>");
                    }
                }else{
                    $("#priceRange").parents(".item").find(".caption").css("padding-top", "5px");
                    $("#priceRange").css("font-size", "18px").text("正在加载中...");
                }
            },'json');
        });

        //立即约教练
        body.on("click", "#postPreOrder",function(){

            var url = "http://"+window.location.host+"/trading_chain/trade/create_pre_order";
            var params = getCheckedParams();
            var $drivingTypeLabel = $(".driving-type-label");
            var drivingFlag = false;
            var _this=$(this);
            $drivingTypeLabel.each(function(i, v){
                if($(v).hasClass("checked")){
                    drivingFlag = true;
                }
            });
            if(!drivingFlag){
                general.alert("请选择驾照类型");
                return false;
            }
            var $ClassTypeLabel = $(".class-type-label");
            var ClassTypeFlag = false;
            $ClassTypeLabel.each(function(i, v){
                if($(v).hasClass("checked")){
                    ClassTypeFlag = true;
                }
            });

            if(!ClassTypeFlag){
                general.alert('请选择班别');
                return false;
            }

            var $referTypeLabel = $(".refer-type-label");
            var referTypeFlag = false;

            $referTypeLabel.each(function(i, v){
                if($(v).hasClass("checked")){
                    referTypeFlag = true;
                }
            });

            if(priceChangeFlag){
                general.alert("努力计算价格中, 请稍候再提交订单");
                return false;
            }

            if(!referTypeFlag){
                general.alert("请选择参考套餐");
                return false;
            }

            if(params.DistinctIdArray.length < 1){
                general.alert("请选择练车区域");
                return false;
            }

            if(minPrice == 0 && maxPrice == 0){
                general.alert("请选择有效的区域");
                return false;
            }

            //判断有没有登录
            var userId = $("#UserId").val();
            if(userId && userId != 0 ){
            }else{
                //没有登录...自动弹窗
                $("#nologin li:first-child>a").click();
                _this.addClass('flag-gologin-first');  //做个标记，先登录，再提交数据,兼容IE8,不能用data-
                return false;
            }

            var realParams = {
                UserId: params.UserId,
                IdArr: params.IdArr,
                Demand: "",
                RegionInfo: {
                    CityId: params.CityId,
                    DistinctIdArray: params.DistinctIdArray
                },
                Price: {
                    Min: minPrice,
                    Max: maxPrice
                }
            };

            $.post(url, realParams, function(data){
                if(data.code == 0){
                    //跳页面
                    window.location.href = "http://"+window.location.host+"/trading_chain/my_order";
                    general.alert(data.msg);
                }else{
                    general.alert(data.msg);
                }
            },'json');

        });

        body.on("click", "#classTypeQA", function(){
            var data = {
                title: "班别详情",
                content: [
                ]
            };
            var siteExam = siteExamData.SiteExam;

            if(siteExam){
                for( var i = 0, len = siteExam.length; i < len; i++){
                    data.content.push({
                        t: siteExam[i].Name,
                        c: siteExam[i].Desc[0]
                    })
                }
            }
            var html = template("SimplePopupTpl", data);
            $(".simple-popup").html(html).show();
        });

        body.on("click", "#referTypeQA", function(){

            var $ClassTypeLabel = $(".class-type-label");
            var ClassTypeFlag = false;
            $ClassTypeLabel.each(function(i, v){
                if($(v).hasClass("checked")){
                    ClassTypeFlag = true;
                }
            });

            if(!ClassTypeFlag){
                general.alert('请先选择班别');
                return false;
            }

            var $ClassTypeData;
            $ClassTypeLabel.each(function(i, v){
                if($(v).hasClass("checked")){
                    $ClassTypeData = $(v).data("id");
                }
            });

            var data = {
                title: "套餐详情",
                content:  [
                ]
            };

            var siteExam = siteExamData.SiteExam;

            if(siteExam){
                for(var i = 0, len = siteExam.length; i < len; i++){
                    if(siteExam[i].Id == $ClassTypeData){
                        var siteExamClass =siteExam[i].Class;
                        for(var j = 0, lenj = siteExamClass.length; j < lenj; j++){
                            var attr = siteExamClass[j].Attribute;
                            var attrStr = "";
                            for(var z = 0,lenz=attr.length; z < lenz; z++){
                                attrStr += attr[z].Name;
                                if(z!=lenz-1){
                                    attrStr += "、";
                                }
                            }
                            data.content.push({
                                t: siteExamClass[j].Name,
                                c: attrStr
                            });
                        }
                    }
                }
            }

            var html = template("SimplePopupTpl", data);
            $(".simple-popup").html(html).show();
        });


        //获取选中的参数
        function getCheckedParams(){
            var UserIdVal = $("#UserId").val();
            var CityIdVal;
            if($("#SiteCityId").val() == 0){
                CityIdVal = $("#CityId").val();
            }else{
                CityIdVal = $("#SiteCityId").val();
            }
            var params = {
                UserId: UserIdVal,
                CityId: CityIdVal,
                DistinctIdArray: [],
                IdArr: []
            };
            var $areaTypeLabel = $(".area-type-label");
            $areaTypeLabel.each(function(i, v){
                var areaTypeData = $(v).data("id");
                if($(v).hasClass("checked")){
                    params.DistinctIdArray.push(parseInt(areaTypeData));
                }
            });

            var $drivingTypeLabel = $(".driving-type-label");
            $drivingTypeLabel.each(function(i, v){
                var $drivingTypeData = $(v).data("id");
                if($(v).hasClass("checked")){
                    drivingFlag = true;
                    params.IdArr.push(parseInt($drivingTypeData));
                }
            });
            var $ClassTypeLabel = $(".class-type-label");
            $ClassTypeLabel.each(function(i, v){
                var $ClassTypeData = $(v).data("id");
                if($(v).hasClass("checked")){
                    params.IdArr.push(parseInt($ClassTypeData));
                }
            });
            var $referTypeLabel = $(".refer-type-label");
            $referTypeLabel.each(function(i, v){
                var $referTypeData = $(v).data("id");
                if($(v).hasClass("checked")){
                    params.IdArr.push(parseInt($referTypeData));
                }
            });

            return params;
        }
    });
</script>

    <!--发布订单end-->

    <!--三步拿证-->
    <!--三步拿证-->
<div class="three-step-title" style="min-height: 287px;position: relative;">
    <p><span class="big-number">3</span><span class="little-text">步</span>拿证</p>
    <p>开创中国标准化学车</p>
    <div style="position: absolute;top: 0;width: 100%;margin: 0 auto;height: 100%;background-color: #f8f8f8;">
        <img src="./bbwxindex/three-big-title.png" alt="" style="padding: 30px 0;">
    </div>
</div>
<div class="flow" style="position: relative;min-height: 1235px;padding: 0;">
    <div class="top">
        <div class="left">
            <div class="flow-steps">
                <div class="step-title">
                    <p><span class="big-number">10</span><span class="little-text">秒</span></p>
                    <p>找到满意教练</p>
                </div>
                <p class="number">1</p>
                <div class="step-content">
                    <div>
                        <p>发布抢单需求</p>
                    </div>
                </div>
            </div>
            <div class="arrow"></div>
            <div class="flow-steps">
                <div class="step-title">
                    <p><span class="big-number">1</span><span class="little-text">元</span></p>
                    <p>试学体验</p>
                </div>
                <p class="number">2</p>
                <div class="step-content">
                    <div>
                        <p>试学满意</p>
                        <p>签署「学车保」</p>
                        <p>按科目分批支付</p>
                    </div>
                </div>
            </div>
            <div class="arrow"></div>
            <div class="flow-steps">
                <div class="step-title">
                    <p><span class="big-number">1</span><span class="little-text">位</span></p>
                    <p>「学车总监」</p>
                </div>
                <p class="number">3</p>
                <div class="step-content">
                    <div>
                        <p>1对1服务学员</p>
                        <p>全程监管教练</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="arrow ctop"></div>
            <img src="./bbwxindex/xuechebao.png" alt="">
            <p><span class="little-text">91项</span>学车保障</p>
            <p>消除学车陷阱</p>
            <div class="arrow cbottom"></div>
        </div>
    </div>
    <div class="arrow"></div>
    <div class="fast">
        <p>最快<span class="big-number">33.3</span><span class="little-text" style="font-size: 50px;">天</span>拿证</p>
    </div>
    <div style="position: absolute;top: 0;background-color: #ffffff;width: 100%;margin: 0 auto;">
        <img src="./bbwxindex/three-content.png" alt="" style="padding: 50px 0; ">
    </div>

</div>

    <!--三步拿证end-->

    <!--内容 start-->

    <!-- 4张图片 -->
    <div class="image-list">
                        <a href="/kjmt">
            <img src="./bbwxindex/（首页底）组-2-拷贝11.png" alt="">
            <p>91恋车品牌升级</p>
          </a>
                  <a href="/yyxc">
            <img src="./bbwxindex/官网头图-08.png" alt="">
            <p>1元试学体验活动</p>
          </a>
                  <a href="/xcbz">
            <img src="./bbwxindex/home_img3.png" alt="">
            <p>保障金先行赔付</p>
          </a>
                  <a href="/hyyx">
            <img src="./bbwxindex/ceo jack接受央视采访.png" alt="">
            <p>CCTV专访</p>
          </a>
                  </div>
    <!-- 4张图片end -->

    

    <!-- 合作伙伴 -->
@include('footer')