<?php

namespace app\common\Model;
use think\Model;
use think\Db;
class Three extends Model {
    public function province(){
        return  Db::table('mq_sys_provinces')->select();
    }
    public function cities($cid){
        return  Db::table('mq_sys_cities')->where('provinceid',$cid)->select();
    }
    public function areas($aid){
        return  Db::table('mq_sys_areas')->where('cityid',$aid)->select();
    }
}