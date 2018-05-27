<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>地址管理</title>
	<link rel="stylesheet" href="/Public/Home/css/people.css">
	<link rel="stylesheet" href="/Public/Home/css/address.css">
	<link rel="stylesheet" href="/Public/Home/css/iconfont.css">
	<script src="/Public/Home/js/jquery-3.2.0.min.js" type="text/javascript"></script>
	<script src="/Public/Home/js/distpicker.data.js"></script>
	<script src="/Public/Home/js/distpicker.js"></script>
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
	<div class="address-add">
		<img src="/Public/Home/images/0525204013.jpg" alt="">
		<p>新建地址</p>
	</div>
	<div class="click-box">
		<div class="add-head">
			<span>新建地址</span>
			<a href="javascript:void(0)">取消</a>
		</div>
		<form class="form-inline clearfix" method="post" action="addAddress">
			<div class="add-input">
				<input type="text" placeholder="收货人姓名" class="name" name="username">
			</div>
			<div class="add-input">
				<input type="text" placeholder="收货人电话号码" class='phone' name="phone">
			</div>
			<div class="add-input clearfix">
				<div class="intro-makecity">
				    <div data-toggle="distpicker" class="new-add">
				        <div class="form-group ">
				          <label class="sr-only" for="province1"></label>
				          <select class="form-control " id="province1" name="province"></select>
				        </div>
				        <div class="form-group">
				          <label class="sr-only" for="city1"></label>
				          <select class="form-control" id="city1" name="city"></select>
				        </div>
				        <div class="form-group">
				          <label class="sr-only" for="district1"></label>
				          <select class="form-control" id="district1" name="area"></select>
				        </div>
				    </div>
				</div>
			</div>
			<div class="add-input">
				<input type="text" placeholder="请输入详细地址，例街道号码，楼牌号" class="city-more" name="info">
			</div>
			<div class="add-button">
				<input type="submit" name="" value="保存">
			</div>
		</form>
	</div>
	<script src="/Public/Home/js/main.js"></script>
</body> 
</html>