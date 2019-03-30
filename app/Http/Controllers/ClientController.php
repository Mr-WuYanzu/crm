<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ClientController extends Controller
{
    //展示
    public function clientshow()
    {
        $data=DB::table('client')->paginate(2);
        return view('client.clientshow',compact('data'));
    }

    //添加
    public function clientadd(Request $request)
    {
        return view('client.clientadd');
    }

    //添加执行
    public function clientadddo(Request $request){
        $data=$request->all();
        unset($data['_token']);
//        var_dump($data);die;
        $client_model=new \App\Client;
        foreach ($data as $k=>$v) {
            $client_model->$k=$v;
        }
        $res=$client_model->save();
        if ($res){
            $arr=[
                'code'=>1,
                'font'=>'添加成功'
            ];
            return json_encode($arr);die;
        }else{
            $arr=[
                'code'=>2,
                'font'=>'添加失败'
            ];
            return json_encode($arr);die;
        }
    }

    //删除
    public function clientdel(Request $request){
        $c_id=$request->c_id;
//        echo $c_id;
        $res=DB::table('client')->where('c_id',$c_id)->delete();
//        dd($res);
        if ($res){
            $arr=[
                'font'=>'删除成功',
                'code'=>1
            ];
            echo json_encode($arr);die;
        }else{
            $arr=[
                'font'=>'删除失败',
                'code'=>2
            ];
            echo json_encode($arr);die;
        }
    }

    //修改
    public function clientupd($c_id){
        $reg="/^[0-9]{1,}$/";
        if(!$c_id){
            return redirect('/client/clientshow');
        }else if(!preg_match($reg, $c_id)){
            return redirect('/client/clientshow');
        }
        $where=[
            'c_id'=>$c_id
        ];
        $data=DB::table('client')->where($where)->first();
        return view('client.clientupd',compact('data'));
    }

    //修改执行
    public function clientupddo(Request $request){
        $data=$request->all();
//        var_dump($data);die;
        unset($data['_token']);
        $res=DB::table('client')->where('c_id',$data['c_id'])->update($data);
        if($res!==false){
            $arr=[
                'font'=>'修改成功',
                'code'=>1
            ];
            echo json_encode($arr);die;
        }else{
            $arr=[
                'font'=>'修改失败',
                'code'=>2
            ];
            echo json_encode($arr);die;
        }
    }
}
