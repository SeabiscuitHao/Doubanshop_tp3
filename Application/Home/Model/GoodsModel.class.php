<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
	public function getList() {
		$res = $this->order('createtime asc')->limit(8)->select();
		return $res;
	}
	public function getInfoById($id) {
		return $this->where(array('id'=>$id))->find();
	}
}