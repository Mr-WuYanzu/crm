<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LinkmanController extends Controller
{
	//主页
	public function index(){
		return view('index.index');
	}
	//添加视图
    public function linkman(){
    	return view('linkman.linkman');
    }
    //添加执行
    public function linkmanAdd(Request $request){
    	$data=$request->all();
    	unset($data['_token']);
    	// dd($data);
    	$res=DB::table('linkman')->insert($data);
    	if($res!==false){
    		return json_encode(['font'=>'添加成功','code'=>1]);
    	}else{
    		return json_encode(['font'=>'添加失败','code'=>2]);
    	}
    }	
    //联系人列表
    public function linkmanList(){
    	$data=DB::table('linkman')->paginate(5);
    	return view('linkman.linkmanlist',compact('data'));
    }	
    //联系人详细信息
    public function linkmandetail($id){
    	$reg="/^[0-9]{1,}$/";
    	if(!preg_match($reg, $id)){
    		return redirect('/linkman/linkmanList');
    	}
    	if($id){	
    		$where=[
    			'l_id'=>$id
    		];
    		$data=DB::table('linkman')->where($where)->first();
    		if(!$data){
    			return redirect('/linkman/linkmanList');
    		}
    		return view('linkman.linkmandetail',compact('data'));
    	}else{
    		return redirect('/linkman/linkmanList');
    	}
    }
    //联系人删除
    public function linkmandel(Request $request){
    	$l_id=$request->l_id;
    	$res=DB::table('linkman')->where('l_id',$l_id)->delete();
    	if($res){
    		return json_encode(['font'=>'删除成功','code'=>1]);
    	}else{
    		return json_encode(['font'=>'删除失败','code'=>2]);

    	}
    }	
    //联系人修改页面
    public function linkmanupd($id){
    	$reg="/^[0-9]{1,}$/";
    	if(!$id){
    		return redirect('/linkman/linkmanList');
    	}else if(!preg_match($reg, $id)){
    		return redirect('/linkman/linkmanList');
    	}
    	$data=DB::table('linkman')->where('l_id',$id)->first();

    	return view('linkman.linkmanupd',compact('data'));
    }
    //联系人修改执行
    public function linkmanupdadd(Request $request){
    	$data=$request->all();
    	$reg="/^[0-9]{1,}$/";
    	if(!preg_match($reg, $data['l_id'])){
    		return json_encode(['font'=>'修改失败','code'=>2]);exit;
    	}
    	unset($data['_token']);
    	$res=DB::table('linkman')->where('l_id',$data['l_id'])->update($data);
    	if($res!==false){
    		return json_encode(['font'=>'修改成功','code'=>1]);exit;
    	}else{
    		return json_encode(['font'=>'修改失败','code'=>2]);exit;
    	}
    }
}

