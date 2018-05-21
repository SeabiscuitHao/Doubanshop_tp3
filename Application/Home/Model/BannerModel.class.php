<?php
namespace Home\Model;
use Think\Model;
class BannerModel extends Model {
	public function getBanner() {
		$result = $this->select();
		return $result;
	}
}