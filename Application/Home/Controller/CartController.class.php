<?php
namespace Home\Controller;

use Think\Controller;

class CartController extends Controller {
	public function cartlist() {
		if (!session('id')) {
			$this->error('请先登录',U('Home/User/login'));
		}
		$price = I('post.price','');
		$count = I('post.count','');
		$total_price = $price*$count;
		$data = array(
			'image'			=> I('post.image',''),
			'goods_id'		=> I('post.id',''),
			'goods_name'	=> I('post.goods_name',''),
			'goods_price'	=> $price,
			'goods_num'		=> $count,
			'user_id'		=> session('id'),
			'createtime'	=> date("Y-m-d,H:i:s")
		);
		if (empty($data['image']) || empty($data['goods_id']) || empty($data['goods_name']) || empty($data['goods_price'])) {
			$this->error('参数错误');
		}
		$res = D('cart')->add($data);
		if ($res) {
			$this->success('添加成功','../Index/index');
		}
	}

	public function cart() {
		if (!session('id')) {
			$this->error('请先登录',U('Home/User/login'));
		}
		$id = session('id');
		// $user = D('User')->where(array('id'=>$id))->find();
		// var_dump($user['id']);die();
		$cartList = D('Cart')->where(array('user_id'=>$id))->select();
		// var_dump($cartList);die();
		$this->assign('list',$cartList);
		$this->display();
	}
}