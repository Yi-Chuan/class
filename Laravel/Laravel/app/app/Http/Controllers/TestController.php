<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * 测试
     */
    public function getIndex()
    {
    	echo '测试列表页';
    }
    /**
     * 测试添加表单
     */
    public function getAdd()
    {
    	//显示表单 解析模板
    	return view('user.add');
    }

    /**
     * 测试数据添加
     */
    public function postInsert(Request $request)
    {
    	//提取所有的参数
    	$data = $request->all();
    	// dd($data);
    	//检测数据
    	if($data['username'] != 'admin'){
    		//将所有的请求参数闪存
    		$request->flash();
    		//只闪存一部分参数
    		// $request->flashOnly('username');
    		//除了那一部分参数不闪存
    		// $request->flashExcept('username');
    		//在模板中提取闪存 old('username')
    		// value="{{old('username')}}"
    		//退回
    		// return back();
    		return back()->withInput(['error'=>'数据错误']);
    	}
    }


    /**
     * 上传
     */
    public function postUpload(Request $request)
    {
    	// dd($request->all());

    	//文件上传的form表单中 必须有 enctype="multipart/form-data" 
    	//检测是否有上传文件
    	if($request->hasFile('pic')){
    		//文件名称
    		$name = md5(time()+rand(111111,8999999));
    		//文件后缀名获取
    		$suffix = $request->file('pic')->getClientOriginalExtension();
    		$arr = ['jpg','png'];
    		//判断文件上传类型
    		if(!in_array($suffix,$arr)){
    			echo '上传文件不符合要求';die;
    		}
    		//将指定文件移动到指定位置
    		$request->file('pic')->move('./uploads/', $name.'.'.$suffix);
    	}
    }

 	/**
 	 * 测试修改
 	 */
 	public function getEdit(Request $request)
 	{
 		// echo '用户修改'.$request->input('id');
 		//请求的基本信息获取

 		//获取当前请求的路径
 		echo $request->path().'<br>';
 		//检测当前请求是否复合要求
 		var_dump($request->is('admin/*'));
 		echo '<br>';
 		//获取当前请求的完整url
 		echo $request->url().'<br>';
 		//获取当前请求的方法
 		echo $request->method().'<br>';
 		//检测请求方法
 		var_dump($request->isMethod('post'));
 		echo '<br>';

 		//请求参数的获取
 		//获取当前请求参数
 		echo \Input::get('id').'<br>';

 		//在当前命名空间下没有找到这个类
 		//Class 'App\Http\Controllers\Input' not found 

 		//获取当前请求参数 带默认参数
 		echo $request->input('id',120).'<br>';

 		//检测当前参数是否存在 
 		var_dump($request->has('id'));

 		//提取所有参数
 		// dd($request->all());

 		//提取部分参数 
 		//只提取哪些
 			// dd($request->only(['id','name']));
 		//除了哪些不要
 			// dd($request->except(['name','class']));

 		
 	}


    /**
     * 获取cookie
     */
    public function cookie(Request $request)
    {
        //读取cookie
        // echo Cookie::get('id');
        echo $request->cookie('uid');
    }


    /**
     * 响应
     */
    public function getText(Request $request)
    {
        //普通字符串
            // echo '222';
            // return '11111';
        //显示模板
            // return response()->view('user.add');
            // return view('user.add');
        //返回json
            // return response()->json(['a'=>100,'b'=>2000]);
        //下载文件
            // return response()->download('./uploads/iloveyou.jpg');
        //页面跳转 回退 back()
        return redirect('/getcookie');
    }


    /**
     * 视图演示
     */
    public function getShow()
    {
        $user = [
            'id'=>1,
            'username'=>'admin',
            'password'=>'123456'
        ];

        //解析模板
        return view('Test.list',[
            'name'=>'dashuaige',
            'html'=>'<div style="color:red">iloveyou</div>',
            'total'=>88,
            'users'=>$user
            ]);
        // return view('Test.index');

        //解析模板 分配变量 views/test/hobby.blade.php
        // return view('Test.hobby',[
        //     'title'=>'用户爱好',
        //     'hobby'=>'吃喝大保健'
        //     ]);
    }

    /**
     * laravel数据库操作
     */
    public function getDb()
    {
        //在当前命名空间下没有找到DB类
        //Class 'App\Http\Controllers\DB' not found

        //查询数据  
            // $res = DB::select('select * from user where id > 2 limit 5');
        //预处理
            // $res = DB::select('select * from user where id > ? limit 5',[2]);
       
        //数据插入操作
            // $res = DB::insert('insert into user(username,password,email) values("admins","123456","234567@qq.com")');
            $arr = [
                ':username'=>'adminss',
                ':password'=>'adminss',
                ':email'=>'adminss@qq.com'
                ];
            // $res = DB::insert('insert into user(username,password,email) values(:username,:password,:email)',$arr);
        
        //数据更新 修改
            // $res = DB::update('update user set username = "hhhhhh" where id = 23');
        
        //删除数据
            // $res = DB::delete('delete from user where id = 23');

        //其它语句
            // $res = DB::statement('drop table phone');

        //自动事物提交
        // DB::transaction(function () {
        //     $res = DB::update('update user set account = account-1000 where id = 20000');
        //     if($res == 0){
        //         throw new \Exception('扣钱失败',10010);
        //     }
        //     $res = DB::update('update user set account = account+1000 where id = 1');
        //     if($res == 0){
        //         throw new \Exception('加钱失败',10086);
        //     }
        // });

        //手动事物提交
            //开启事物
            // DB::beginTransaction();
            // $res1 = DB::update('update user set account = account-1000 where id = 2');
            // if($res1 == 0){
            //     //事物回滚
            //     DB::rollBack();
            //     dd('扣钱失败');
            // }
            // $res2 = DB::update('update user set account = account+1000 where id = 10000');
            //  if($res2 == 0){
            //     //事物回滚
            //     DB::rollBack();
            //     dd('加钱失败');
            // }
            // //事物提交
            // DB::commit();

        // dd($res);
        //查询构造器

            //插入操作
                //单条
                $data = ['username'=>'adminss4','password'=>'123456','email'=>'1234567@qq.com'];
                // $res = DB::table('user')->insert($data);
                //获取刚插入的数据id
                // $res = DB::table('user')->insertGetId($data);
                //多条操作
                // $data = [
                //     ['username'=>'adminss1','password'=>'123456','email'=>'1234567@qq.com'],
                //     ['username'=>'adminss2','password'=>'123456','email'=>'1234567@qq.com'],
                //     ['username'=>'adminss3','password'=>'123456','email'=>'1234567@qq.com'],
                //     ];
                // $res = DB::table('user')->insert($data);

        //修改操作
            // $res = DB::table('user')
            //     ->where('id',28)
            //     ->update($data);
        //删除操作
            // $res = DB::table('user')
            //     ->where('id',28)
            //     ->delete();

        //查询操作
            //查询所有
                // $res = DB::table('user')->get();
            //带条件
                // $res1 = DB::table('user')->where('id',1)->get();
            //查询单条
                // $res = DB::table('user')->first();

            // dd($res1,$res);
            // 查询单条结果中的某一个字段
                // $res = DB::table('user')->value('username');//默认第一条
                // $res = DB::table('user')->where('id',2)->value('username');
            
            //获取一列数据
            // $res = DB::table('user')->lists('username');

            //设置select 字段
            // $res = DB::table('user')->select('username', 'email as user_email')->get();

            //limit 只能接收一个参数
            // $res = DB::table('user')->limit(10)->get();

            //跳过几条 查几条 
            // $res = DB::table('user')->skip(10)->take(5)->get();

            //统计总条数
            // $res = DB::table('user')->count();
           //调用自定义函数
           $res = \love();
           dd($res);


         

    }

}