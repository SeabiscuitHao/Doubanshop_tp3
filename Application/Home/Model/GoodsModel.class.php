<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
	public function getListInfo() {
		$res = $this->order('createtime asc')->limit(8)->select();
		return $res;
	}
}