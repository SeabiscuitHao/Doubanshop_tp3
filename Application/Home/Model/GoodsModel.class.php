<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
	public function getList() {
		$res = $this->order('createtime asc')->limit(8)->select();
		return $res;
	}
	public function getInfoById($id) {
        $cache_key = "goods_info_".$id;
        $result = cache_get($cache_key);
        if (empty($result)) {
            $result = $this->where(array('id'=>$id))->find();
            cache_set($cache_key, $result, 300);
        }
		return $result;
	}

    public function setRank($goods_id) {
        $redis = new \Redis();
        $redis->connect('192.168.199.249', 6379);
        $cache_key = "goods_read_rank";
        return $redis->zincrby($cache_key, 1, $goods_id);
    }

    public function gerRank() {
        $start = 0;
        $end = 9;
        $redis = new \Redis();
        $redis->connect('192.168.199.249', 6379);
        $cache_key = "goods_read_rank";
        $ids = $redis->zrevrange($cache_key,$start,$end);
        foreach ($ids as $key => $value) {
            $result[] = $this->getInfoById($value); 
        }
        return $result;
    }
}