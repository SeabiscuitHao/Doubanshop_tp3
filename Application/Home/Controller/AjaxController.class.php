<?php
namespace Home\Controller;

use Think\Controller;

class AjaxController extends Controller {

    public function show() {
        $this->display();
    }

    public function handlecart() {
        $res = array(
            'error_no' => 0,
            'msg'      => '',
            'data'     => array(),
            );
        $goodsId = I('post.goods_id');
        $num = I('post.num');
        if (empty($goodsId) || empty($num)) {
            $res['error_no'] = 1;
            $res['msg'] = "参数错误";
            echo json_encode($res);
            die();
        }

        //通过商品id拿商品信息
        //通过session 拿用户id
        //把数据插入购物车表


        echo json_encode($res);
        die();
    }

    public function handlepay() {
        $res = array(
            'error_no' => 0,
            'msg'      => '',
            'data'     => array(),
            );
        $goodsId = I('post.goods_id');
        $num = I('post.num');
        if (empty($goodsId) || empty($num)) {
            $res['error_no'] = 1;
            $res['msg'] = "参数错误";
            echo json_encode($res);
            die();
        }

        //通过商品id拿商品信息
        //通过session 拿用户id
        //把数据插入临时订单表
        $id = D('')->add();
        $res['data']['oid'] = $id;
        echo json_encode($res);
        die();
    }

    public function confirmOrder() {
        $oid = I('get.oid');
        //通过oid 读临时订单表
        //
        echo '123';
    }

    public function testjson() {
        // $a[2] = 'c';
        // $a[0] = 'a';
        // $a[1] = 'b';

        // foreach ($a as $key => $value) {
        //    echo $value;
        // }
        // c a b      abc
        

        $a = array('a','b','c');
        echo json_encode($a);
        unset($a[1]);
        $a = array_values($a);
        echo json_encode($a);
    }


    

}   