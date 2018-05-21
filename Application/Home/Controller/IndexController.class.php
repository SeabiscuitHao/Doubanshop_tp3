<?php
namespace Home\Controller;
use Think\Controller;
use app\Home\Modle\BannerModel;
class IndexController extends Controller {
	public function index () {
		$goods  = D('goods')->getListInfo();
		$banner = D('banner')->getBanner();
		$this->assign(array(
			'goods'		=> $goods,
			'banner'	=> $banner
		));
		$this->display();
	}
	
}