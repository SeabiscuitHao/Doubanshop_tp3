<?php
namespace Home\Controller;

use Think\Controller;

class AddressController extends Controller {

	public function address() {
		$this->display();
	}

	public function addAddress() {
		$data = array(
			'user_id'		=> session('id'),
			'username'		=> I('username',''),
			'phone'			=> I('phone',''),
			'province'		=> I('province',''),
			'city'			=> I('city',''),
			'area'			=> I('area',''),
			'info'			=> I('info',''), 
			'createtime'	=> date('Y-m-d,H:i:s'),
		);
		if (empty($data['user_id'])) {
			$this->error('请先登录',U('Home/User/login'));
		}
		$res = D('Address')->add($data);
		if ($res) {
			$this->success('地址添加成功','address');
		} else {
		 	$this->error('添加地址失败');
		}
	}
}