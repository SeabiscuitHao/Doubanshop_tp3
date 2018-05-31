<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>订单管理</title>
	<link rel="stylesheet" href="/Public/Home/css/people.css">
	<link rel="stylesheet" href="/Public/Home/css/address.css">
	<link rel="stylesheet" href="/Public/Home/css/order.css">
	<link rel="stylesheet" href="/Public/Home/css/iconfont.css">
	<script src="/Public/Home/js/jquery-3.2.0.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="people-header clearfix">
	    <a href="javascript:void(0)" class="address"  onclick="javascript:history.back(-1);">
	    	<i class="iconfont">&#xe63b;</i>
	    </a>
		<h3>收货地址管理</h3>
		<a href="javascript:void(0)" class="address-home">
			<i class="iconfont">&#xe6d3;</i>
		</a>
	</div>
	<div class="box-order">
		<a href="javascript:void(0)" class="order-bg">
			<span>全部</span>
		</a>
		<a href="javascript:void(0)">
			<span>待付款</span>
		</a>
		<a href="javascript:void(0)">
			<span>待发货</span>
		</a>
		<a href="javascript:void(0)">
			<span>待收货</span>
		</a>
	</div>
	<div class="box-tab">
		<div class="tab-list">
			<?php foreach ($res as $key => $value) { ?>
			    <div class="list-content haha">
			        <div class="list-head clearfix list-border">
			    		<span>订单号：<?php echo ($key); ?></span>
			    		<span>交易关闭</span>
			    	</div>
			    	<?php foreach($value as $k => $v) { ?>
				    	<div class="list-img clearfix list-border">
				    		<img src="http://dbshop.com/<?php echo ($v['goods_image']); ?>" alt="">
				    		<div class="img-about">
				    			<p><?php echo ($v['goods_id']); ?></p>
				    			<p>
				    				<span><?php echo ($v['goods_info']); ?></span>
				    				<span>￥
									<?php $v['goods_price'] /= 100; echo sprintf("%0.2f",$v['goods_price']); ?> * <?php echo ($v['goods_count']); ?></span>
				    			</p>
				    		</div>
				    	</div>
				    <?php } ?>
			    	<div class="list-num clearfix list-border">
			    		<p>
			    			<span>共1件商品</span>
			    			<span>运费： 0.00</span>
			    			<span>总计：<b>￥
								<?php $value['goods_price'] *= $value['goods_count']; echo sprintf("%0.2f",$value['goods_price']); ?></b></span>
			    		</p>
			    	</div>
			    	<div class="list-num clearfix list-border">
			    		<p>
			    			<a href="javascript:void(0)" class="delete-click">删除订单</a>
			    		</p>
			    	</div>
			    </div>
			    <div style="height: 10px">
			    	
			    </div>
		    <?php } ?>

	    	<div class="no-more">没有更多了</div>

			<div class="list-about">
			    <img src="./Public/Home/images/aaa.png" alt="">
			    <p>这里什么都没有</p>
				<a href="./douban.html" class="list-none">去逛逛</a>
			</div>
		</div>
		<div class="tab-list hide">
			<div class="list-content"></div>
			<div class="list-about">
			    <img src="./Public/Home/images/aaa.png" alt="">
			    <p>这里什么都没有</p>
				<a href="./douban.html" class="list-none">去逛逛</a>
			</div>
		</div>
		<div class="tab-list hide">
			<div class="list-content"></div>
			<div class="list-about">
			    <img src="./Public/Home/images/aaa.png" alt="">
			    <p>这里什么都没有</p>
				<a href="./douban.html" class="list-none">去逛逛</a>
			</div>
		</div>
		<div class="tab-list hide">
			<div class="list-content"></div>
			<div class="list-about">
			    <img src="./Public/Home/images/aaa.png" alt="">
			    <p>这里什么都没有</p>
				<a href="./douban.html" class="list-none">去逛逛</a>
			</div>
		</div>
	</div>
	<div class="make-hide">
		<div>
			<p>删除此订单吗？</p>
			<p>
				<a href="javascript:void(0)" class="make-no">取消</a>
				<a href="javascript:void(0)" class="make-true">确定</a>
			</p>
		</div>
	</div>
	<script src="/Public/Home/js/order.js"></script>
</body>
</html>