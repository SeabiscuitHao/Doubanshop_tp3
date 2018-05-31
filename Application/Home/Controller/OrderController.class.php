<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function lists() {
		$id = session('id');
		if (empty($id)) {
			$this->error('请先登录',U('Home/User/login'));
		}
		$lists = D('Order')->where(array('user_id'=>$id))->select();
		$res = array();
		foreach ($lists as $key => $value) {
			$res[$value['order_num']][] = $value;
		}
		$this->assign(array(
			'res'		=>	$res,
		));
		$this->display();
	}
}