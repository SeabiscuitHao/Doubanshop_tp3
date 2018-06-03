<?php
namespace Home\Model;
use Think\Model;
class CartModel extends Model {

	public function getList($where) {
		$res = $this->where($where)->select();
		return $res;
	}

}