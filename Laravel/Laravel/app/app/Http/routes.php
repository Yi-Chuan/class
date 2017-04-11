<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//路由文件

Route::get('/', function () {
	//解析模板 
    return view('index');
});

//p配置测试路由  lamp148.cn/ceshi
Route::get('/ceshi',function(){
	// 配置读取和设置 'app'=>指的时config文件夹中的app.php配置文件,
	//.AppName指的时该配置文件中的哪个配置项
		// echo Config::get('app.AppName');
		// Config::set('app.AppName','LAMP148官网');
		// echo Config::get('app.AppName');

	//环境配置文件 读取
		// echo env('DB_HOST');
	//维护模式
		// 启用维护模式，只需要运行 Artisan 命令 down：
		//php artisan down

		// 关闭维护模式，请使用 Artisan 命令 up：
		//php artisan up
	// 维护模式的响应模板#
	// 维护模式的默认模板放在 resources/views/errors/503.blade.php。
});


//错误请求,lamp148.cn/admin  如果出现下面的错误 证明路由问题.当前访问路径没有响应的路由
//NotFoundHttpException in RouteCollection.php line 161:
// Route::get('/admin',function(){
// 	echo 'admin';
// });//分号不能省略 FatalErrorException in routes.php line 29:

//基本路由
Route::get('/love',function(){
	echo 'iloveyou';
});
//错误 说明  访问(请求)方式错误 
//MethodNotAllowedHttpException in RouteCollection.php line 218:
Route::post('/like',function(){
	echo 'ilikeyou';
});
//在laravel中所有的post请求 都要求有_token  csrf保护 防止跨站攻击
// TokenMismatchException in VerifyCsrfToken.php line 53:

//临时关闭token验证 csrf保护
// app/http/kernel.php
	//下面注释就可以
     // \App\Http\Middleware\VerifyCsrfToken::class,
//调试工具 chrome插件 postman

//带参数的路由
Route::get('/goods/{name}-{id}',function($name,$id){
	echo $name;
	echo $id;
	//参数类型约束
})->where('id','\d+');


//别名路由
// Route::get('/admin/user/add',[
// 	'as'=>'uadd',//路由别名
// 	//uses 不能改
// 	'uses'=>function(){
// 		// echo '这时用户的添加页面';
// 		//获取路由名称  获取路由的别名
//     	echo Route::currentRouteName();
// 	}
// 	]);

// Route::get('/test',function(){
// 	//通过路由的名字来创建url
// 	// echo route('uadd');
// 	//通过路由规则创建url
// 	echo url('/admin/user/add');
// 	 //实现页面跳转
//     // return redirect()->route('uadd');
// })->middleware('login');//普通路由使用中间件

// Route::get('/test',[
// 	'middleware'=>'login',
// 	function(){
// 		echo 'hello';
// 	}
// 	]);


//路由组 配合使用中间件
Route::group(['middleware'=>'login'],function(){
	//后台用户管理列表
	// Route::get('/admin/user',function(){
	// 	echo 'admin/user';
	// });
	// //后台商品管理列表
	// Route::get('/admin/goods',function(){
	// 	echo 'admin/goods';
	// });
	// Route::get('/admin/cate',function(){});
	//后台...
});

Route::get('/login',function(){
	// echo '用户登录页面';
	//抛出404
	abort(404);

});

//csrf保护 测试
// Route::get('/user/add',function(){
// 	//显示模板
// 	// return view('add');//views/add.blade.php
// 	return view('user.add');//views/user/add.blade.php
// });

// Route::post('/user/insert',function(){
// 	echo '用户数据插入';
// });

//路由访问控制器  参数1 路由规则  参数2 控制器@方法名
// Route::get('/test/index','TestController@index');
// Route::get('/test/add','TestController@add');
// Route::get('/test/edit/{id}','TestController@edit');
// Route::post('/test/insert','TestController@insert');



//资源控制器 路由
// Route::resource('/user', 'UserController');

//隐式控制器 路由
Route::Controller('/test','TestController');

//cookie操作
Route::get('/setcookie',function(){
	//设置cookie
	// Cookie::queue('id','110',1);//单位为分钟
	return response('haha')->withCookie('uid',10,10);//单位为分钟
});
Route::get('/getcookie','TestController@cookie');
