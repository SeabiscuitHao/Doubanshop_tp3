<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	public function getUserInfoByPhone($phone) {
		$res = $this->find($phone);
		if ($res) {
			return $res;
		} else {
			return false;
		}
	}
}