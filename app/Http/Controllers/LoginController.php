<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
	//登录视图
    public function login(){
    	return view('login.login');
    }
    //登录执行
    public function logindo(Request $request){
        $user_name=$request->user_name;
        $user_pwd=$request->user_pwd;
        $res=DB::table('user')->where('user_name',$user_name)->first();
        if(!$res){
            return json_encode(['font'=>'账户名或密码错误','code'=>2]);
        }else{
            if(decrypt($res->user_pwd)!=$user_pwd){
                return json_encode(['font'=>'账户名或密码错误','code'=>2]);
            }else{
                session(['user'=>['user_name'=>$user_name,'user_id'=>$res->user_id]]);
                return json_encode(['font'=>'登录成功','code'=>1]);
            }
           

        }
        
    }
    //管理员添加
    public function admin(){
        return view('login/admin');
    }
    //管理员添加执行
    public function adminAdd(Request $request){
        $data=$request->all();
        unset($data['_token']);
        $data['user_pwd']=encrypt($data['user_pwd']);
        $res=DB::table('user')->insert($data);
        if($res!==false){
            return json_encode(['font'=>'添加成功','code'=>1]);
        }else{
            return json_encode(['font'=>'添加失败','code'=>2]);

        }
    }
    //管理员列表
    public function adminlist(){
        $data=DB::table('user')->get();
        return view('user.userlist',compact('data'));
    }
    //退出
    public function quit(Request $request){
        $request->session()->forget('user');
    }

}
