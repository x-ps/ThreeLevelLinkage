<?php
namespace app\index\controller;

use app\common\Model\Three;

class Index
{
    public function index()
	{
       return view('three');
    } 
	
	public function province()
	{
        $model=new Three();
        $province =$model->province();
        echo json_encode($province);
    }
	
    public function cities()
	{
        $cid=$_POST['cid'];
        $model=new Three();
        $cities =$model->cities($cid);
        echo json_encode($cities);
    }
	
    public function areas()
	{
        $aid=$_POST['aid'];
        $model=new Three();
        $areas =$model->areas($aid);
        echo json_encode($areas);
    }

}
