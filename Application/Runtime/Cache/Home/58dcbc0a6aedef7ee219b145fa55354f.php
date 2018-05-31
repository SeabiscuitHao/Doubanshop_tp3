<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>详情</title>
	<link rel="stylesheet" href="/Public/Home/css/info.css">
	<link rel="stylesheet" href="/Public/Home/css/iconfont.css">
	<script src="/Public/Home/js/jquery-3.2.0.min.js"></script>
</head>
<body>
	<div class="info-tal">
		<img src="http://dbshop.com/<?php echo ($lists["image"]); ?>" alt="">
		<div class="tal-content">
			<img src="/Public/Home/images/e744caf891a279a.jpg" alt="">
		</div>
	</div>
	<div class="info-list">
		<div>
			<img src="/Public/Home/images/file-1499333010-0.jpg" alt="">
		</div>
		<div>
			<img src="/Public/Home/images/file-1519880512-2.jpg" alt="">
		</div>
	</div>

	<form action="<?php echo U('Home/Cart/cartlist');?>" method="post">
		<div class="new-buy">
			<div class="box-buy">
				<div class="buy-list clearfix">
					<img src="http://dbshop.com/<?php echo ($lists["image"]); ?>" alt="">
					<div class="buy-info">
						<p class="buy-title"><?php echo ($lists["goods_name"]); ?></p>
						<p class="buy-price">￥<?php echo $p = sprintf("%0.2f",$lists['price']/100); ?></p>
						<p class="buy-wrap">满88.0包邮</p>
						<p class="buy-select">已选第一个</p>
					</div>
				</div>

				<input type="hidden" name="id" value="<?php echo ($lists["id"]); ?>">
				<input type="hidden" name="goods_name" value="<?php echo ($lists["goods_name"]); ?>">
				<input type="hidden" name="price" value="<?php echo ($p); ?>">
				<input type="hidden" name="image" value="<?php echo ($lists["image"]); ?>">
				<div class="style-list">
					<p>款式：</p>
					<div>
						<a href="javascript:void(0)" class="bg-green">舍离那里</a>
						<a href="javascript:void(0)">涉林绿</a>
						<a href="javascript:void(0)">涉林绿</a>
						<a href="javascript:void(0)">涉林绿</a>
						<a href="javascript:void(0)">哈哈-你不得哈哈</a>
						<a href="javascript:void(0)">咔咔咔</a>
						<a href="javascript:void(0)">啦啦</a>
						<a href="javascript:void(0)">爱南京市</a>
						<a href="javascript:void(0)">阿家具啊</a>
					</div>
				</div>
				<div class="style-list">
					<p>数量：</p>
					<div class="intro-jinumber">
						<input id="min" name="" type="button" value="-" / style="border: none; background-color: #f7f7f7;"> 
						<input id="text_box" name="count" type="text" value="1" style="width:30px;text-align: center;border:none"/> 
						<input id="add" name="" type="button" value="+" / style="border: none; background-color: #f7f7f7;"> 
					</div>
				</div>
			</div>
			<div class="buy-footer">
				<div><a href="javascript:void(0)">
					<i class="iconfont">&#xe647;</i><sup>0</sup>
				</a></div>
				<input type="submit" name="" value="加入购物车">
				<a href="javascript:void(0)" >立即购买</a>
			</div>
		</div>
	</form>

	<div class="box-fixed">
		<div class="make-show clearfix doun">
			<div>
				<img src="/Public/Home/images/7ea87c990023ad7.jpg" alt="">
			</div>
			<div>
				<a href="javascript:void(0)" class="now-buy">
					立即购买
				</a>
			</div>
		</div>
	</div>
	<script src="/Public/Home/js/info.js"></script>
	<script>
     $(window).scroll(function(){
      	var scrollHeight = $(window).scrollTop();
        var windowHeight = $(window).height();
      	var bodyHeight = $("body").height();
	    var textHeight = $(".info-tal").height();        
        console.log(scrollHeight+windowHeight)//400
        console.log(bodyHeight-textHeight)//1389
        if((scrollHeight+windowHeight) >= (bodyHeight-textHeight)){
           $(".doun").addClass("makeshow");
        }else{
        	$(".doun").removeClass("makeshow");
        }
      })
	</script>
</body>
</html>