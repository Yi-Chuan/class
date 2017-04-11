#Composer
	是 PHP 用来管理依赖（dependency）关系的工具。
	你可以在自己的项目中声明所依赖的外部工具库（libraries），
	Composer 会帮你安装这些依赖的库文件。
	
	1.	下载  www.getcomposer.org/download
			Composer-Setup.exe
	2.	双击安装
			注意选择php.exe的位置
			一路下一步
	3.	检测是否安装 
			cmd命令下 composer

####修改中文镜像   http://pkg.phpcomposer.com/
	配置中国全量镜像
	composer config -g repo.packagist composer https://packagist.phpcomposer.com

####基本使用
	packagist.org(扩展包安装地址)

	1.在指定文件夹下创建composer.json, 填写相关的配置代码
	{
	    "require": {
	        "monolog/monolog": "1.2.*",
	    }
	}
	2.在命令行下执行 composer install

	3.查看文档 使用工具包


####更新composer.json
	修改文件
		{
		    "require": {
		        "monolog/monolog": "1.2.*",
		        "curl/curl": "1.3.0"
		    }
		}
	更新
		composer update


####软件更新
	composer self-update


#Laravel
	...
####手册地址
	golaravel.com
	laravel-china.org

###简介
	....

###运行环境要求

	- PHP >= 5.5.9 
	- OpenSSL PHP 扩展 
	- PDO PHP 扩展 
	- Mbstring PHP 扩展 
	- Tokenizer PHP 扩展 
	...
###安装
	1,composer安装
		首先，使用 Composer 下载 Laravel 安装包：
			composer global require "laravel/installer"

		通过 Composer Create-Project 命令安装 Laravel
			composer create-project laravel/laravel lamp.cn --prefer-dist "5.1.*"


	2,下载 Laravel 一键安装包
	
		下载地址：http://www.golaravel.com/download/
	
	3,直接复制一份安装好的

####安装完成后请刷新目录查看应用 ---  详情请查看目录结构

	单入口文件处于 public/index.php
	访问http://localhost/Class/project/public/



###框架结构
	注：写本文时参照的是5.1.4版本
	目录或文件	说明
	｜–　app 	包含Controller、Model、路由等在内的应用目录，大部分业务将在该目录下进行
	｜　　｜–　Console 	命令行程序目录
	｜　　｜　　｜–　Commands 	包含了用于命令行执行的类，可在该目录下自定义类
	｜　　｜　　｜–　Kernel.php 	命令调用内核文件，包含commands变量(命令清单，自定义的命令需加入到这里)和schedule方法(用于任务调度，即定时任务)
	｜　　｜–　Events 	事件目录
	｜　　｜–　Exceptions 	包含了自定义错误和异常处理类
	｜　　｜–　Http 	HTTP传输层相关的类目录
	｜　　｜　　｜–　Controllers 	控制器目录
	｜　　｜　　｜–　Kernel.php 	包含http中间件和路由中间件的内核文件
	｜　　｜　　｜–　Middleware 	中间件目录
	｜　　｜　　｜–　Requests 	请求类目录
	｜　　｜　　｜–　routes.php 	强大的路由
	｜　　｜–　Jobs 	该目录下包含队列的任务类
	｜　　｜–　Listeners 	监听器目录
	｜　　｜–　Providers 	服务提供者目录
	｜　　｜–　User.php 	自带的模型实例，我们新建的Model默认也存储在该目录
	｜–　artisan 	强大的命令行接口，你可以在app/Console/Commands下编写自定义命令
	｜–　bootstrap 	框架启动载入目录
	｜　　｜–　app.php 	创建框架应用实例
	｜　　｜–　autoload.php 	自动加载
	｜　　｜–　cache 	存放框架启动缓存，web服务器需要有该目录的写入权限
	｜–　composer.json 	存放依赖关系的文件
	｜–　composer.lock 	锁文件，存放安装时依赖包的真实版本
	｜–　config 	各种配置文件的目录
	｜　　｜–　app.php 	系统级配置文件
	｜　　｜–　auth.php 	用户身份认证配置文件，指定好table和model就可以很方便地用身份认证功能了
	｜　　｜–　broadcasting.php 	事件广播配置文件
	｜　　｜–　cache.php 	缓存配置文件
	｜　　｜–　compile.php 	编译额外文件和类需要的配置文件，一般用户很少用到
	｜　　｜–　database.php 	数据库配置文件
	｜　　｜–　filesystems.php 	文件系统配置文件，这里可以配置云存储参数
	｜　　｜–　mail.php 	电子邮件配置文件
	｜　　｜–　queue.php 	消息队列配置文件
	｜　　｜–　services.php 	可存放第三方服务的配置信息
	｜　　｜–　session.php 	配置session的存储方式、生命周期等信息
	｜　　｜–　view.php 	模板文件配置文件，包含模板目录和编译目录等
	｜–　database 	数据库相关目录
	｜　　｜–　factories 	5.1版本的新特性，工厂类目录，也是用于数据填充
	｜　　｜　　｜–　ModelFactory.php 	在该文件可定义不同Model所需填充的数据类型
	｜　　｜–　migrations 	存储数据库迁移文件
	｜　　｜–　seeds 	存放数据填充类的目录
	｜　　　　　｜–　DatabaseSeeder.php 	执行php artisan db:seed命令将会调用该类的run方法。该方法可调用执行该目录下其他Seeder类，也可调用factories方法生成ModelFactory里定义的数据模型
	｜–　.env 	环境配置文件。config目录下的配置文件会使用该文件里面的参数，不同生产环境使用不同的.env文件即可。
	｜–　gulpfile.js 	gulp（一种前端构建工具）配置文件
	｜–　package.json 	gulp配置文件
	｜–　phpspec.yml 	phpspec（一种PHP测试框架）配置文件
	｜–　phpunit.xml 	phpunit（一种PHP测试框架）配置文件
	｜–　public 	网站入口，应当将ip或域名指向该目录而不是根目录。可供外部访问的css、js和图片等资源皆放置于此
	｜　　｜–　index.php 	入口文件
	｜　　｜–　.htaccess 	Apache服务器用该文件重写URL
	｜　　｜–　web.config 	IIS服务器用该文件重写URL
	｜–　resources 	资源文件目录
	｜　　｜–　assets 	可存放包含LESS、SASS、CoffeeScript在内的原始资源文件
	｜　　｜–　lang 	本地化文件目录
	｜　　｜–　views 	视图文件就放在这啦
	｜–　server.php 	PHP内置的Web服务器将把这个文件作为入口。以public/index.php为入口的可以忽略掉该文件
	｜–　storage 	存储目录。web服务器需要有该目录及所有子目录的写入权限
	｜　　｜–　app 	可用于存储应用程序所需的一些文件？待补充
	｜　　｜–　framework 	该目录下包括缓存、sessions和编译后的视图文件
	｜　　｜–　logs 	日志目录
	｜–　tests 	测试目录
	｜–　vendor 	该目录下包含Laravel源代码和第三方依赖包

###配置虚拟主机
	1,修改httpd.conf (搜索httpd-vhosts.conf)
			Include conf/extra/httpd-vhosts.conf(前面的#去掉)

	2,修改过httpd-vhosts.conf文件
		D:\wamp\bin\apache\apache2.2.22\conf\extra
			<VirtualHost *:80>
    			ServerAdmin webmaster@dummy-host2.example.com
   				DocumentRoot "D:/wamp/www/Class/project/public" 
    			ServerName   lamp.cn           
    			ErrorLog "logs/dummy-host2.example.com-error.log"
    			CustomLog "logs/dummy-host2.example.com-access.log" common
			</VirtualHost>

	3,文件hosts
		C:\Windows\System32\drivers\etc

	4,重启apache服务

		<1>apache服务器勾选模块 :rewrite_module
		
		<2>url重写文件 .htaccess

###环境配置

####开发前必须要做的
		配置虚拟主机

		storage 和 vendor 目录要让服务器有写入的权限。
			在linux下一定要注意 如果没有写权限 会出现空白页面

		程序秘钥
			这里是默认生成的  如果没有的话可以使用命令
			php artisan key:generate 
			然后将生成的随机字符串放置在 .env文件中
			如果没有key会报错
			No supported encrypter found. The cipher and / or key length are invalid.

		修改时区
			config/app.php  >>>>>  'timezone' => 'PRC',

####开发过程中要用到的
	读取和设置配置
		Config::get('app.timezone');
		Config::set('app.locale', 'cn');

	获取环境配置
		env('DB_HOST')


###维护模式
	要开启维护模式，只需简单地执行 Artisan 中的 down 命令即可：
	php artisan down
	
	要关闭维护模式，使用 up 命令即可：
	php artisan up

	在维护模式时响应请求的模板文件
	用于在维护模式时响应请求的默认模板文件位于 resources/views/errors/503.blade.php。

###美化链接(URL重写)
	Laravel 框架通过 public/.htaccess 文件来让网址不需要 index.php。
	如果你的服务器是使用 Apache，请确认是否有开启 mod_rewrite 模块。

####Apache

	Laravel 框架自带了 public/.htaccess 文件用来从网址中删除 index.php。
	如果你用的是 Apache 来运行你的 Laravel 应用，请务必启用 Apache 的 mod_rewrite 模块。
	
	如果 Laravel 自带的 .htaccess 文件在你的 Apache 中不起作用，请试一试下面的配置：
	
	Options +FollowSymLinks
	RewriteEngine On
	
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule ^ index.php [L]
	
####Nginx
	
	在 Nginx 中，将下面的指令放到站点配置文件中就可以实现美化链接的功能：
	
	location / {
	    try_files $uri $uri/ /index.php?$query_string;
	}

##Laravel路由
	访问一个页面，你可以不需要Model、View和Controller，但必然需要路由(Route)

###路由文件位置
	app/Http/routes.php     强大的路由
	....

####基本路由

	get的基本的路由
		Route::get('home', function(){
			echo 'this is home page';
		});
		
	post的基本的路由
		Route::post('insert', function(){
			echo 'this is add action';
		});

	用户的删除操作
		Route::get('/user-delete-{id}', function($id){
			echo ' 我要删除id为'.$id.'的用户';
		});

	限定参数的类型
		Route::get('article/{id}',function($id){
			echo '这是商品的详情';
		})->where('id','\d+');


	多个参数的传递
		Route::get('/list-{name}-{id}', function($name, $id){
			echo '这是一列表...'.$name.'-----'.$id;
		});

	别名的设置
		Route::get('article/goods/detail',[
		'as'=>'gd',
		function($id,$name){
			echo route('gd');
		}]);

		Route::get('/Home/Goods/show/{id}', ['as'=>'goods', function($id){
		    //普通创建url
		    // echo url('/param/hahah').'<br>';
		    //路由别名创建url
		    // echo route('goods',['id'=>11]).'<br>';
		    //实现页面跳转
		    // return redirect()->route('goods',['id'=>12]);
		    //获取路由名称
		    return Route::currentRouteName();
		}]);


####路由组
	//路由组
	Route::group([], function(){
		Route::get('/admin', function(){
			echo 'this is admin page';
		});
	});
	

	....

####404页面设置
	Route::get('/404', function(){
		abort(404);
	});
			
	abort(404,'么有找到相关的页面呀!!!');

	设置模板 -> resources/views/errors/404.blade.php

###调试工具
	debugbar安装
		composer require barryvdh/laravel-debugbar
		在config/app.php里面的providers添加
		Barryvdh\Debugbar\ServiceProvider::class,

	chrome插件postman


###临时关闭post请求Token
	app/Htpp/Requests   请求类目录



##Laravel中间件
	HTTP 中间件提供了一个方便的机制来过滤进入应用程序的 HTTP 请求，
	例如，Laravel 本身使用中间件来验证用户的身份，如果用户未通过身份验证，
	中间件将会把用户导向登录页面，反之，当用户通过了身份验证，
	中间件将会通过此请求并接着往下执行。

	当然，除了身份验证之外，中间件也可以被用来运行各式各样的任务，
	CORS 中间件负责替所有即将离开程序的响应加入适当的标头。
	而日志中间件则可以记录所有传入应用程序的请求。

	Laravel 框架已经内置了一些中间件，包括维护、身份验证、CSRF 保护，等等。
	所有的中间件都放在 app/Http/Middleware 目录内。
	...

###创建中间件

	要创建一个新的中间件，则可以使用 make:middleware 这个 Artisan 命令：

	php artisan make:middleware LoginMiddleware

	此命令将会在 app/Http/Middleware 目录内设定一个名称为 LoginMiddleware 的类。
	在这个中间件内我们只允许已经登录的用户(通过cookie中的uid判断)才能访问路由，
	否则，我们会将用户重定向到「/」这个 URI 上。

###事例
	<?php
	
	namespace App\Http\Middleware;
	
	use Closure;
	
	class LoginMiddleware
	{
	    public function handle($request, Closure $next)
	    {
	        //request变量 记录所有的请求参数
	        if(!$request->cookie('uid')) {
	            return redirect('/');
	        } 
	        return $next($request);
	    }
	}


###注册

**全局中间件**

	若是希望每个 HTTP 请求都经过一个中间件，只要将中间件的类加入到 
	app/Http/Kernel.php 的 $middleware 属性清单列表中。

	Kernel.php >>>>  $middleware成员属性
	protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \app\Http\Middleware\TestMiddleware::class
    ];



**为路由指派中间件**
	
	如果你要指派中间件给特定路由，你得先在 app/Http/Kernel.php 给中间件设置一个好记的键，
	默认情况下，这个文件内的 $routeMiddleware 属性已包含了 Laravel 目前设置的中间件，
	你只需要在清单列表中加上一组自定义的键即可。
	
	// 在 App\Http\Kernel 类内...
	
	Kernel.php >>>> $routeMiddleware成员属性

	protected $routeMiddleware = [
        'auth' => \app\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \app\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'test' => \app\Http\Middleware\TestMiddleware::class,
    ];


	
**中间件一旦在 HTTP kernel 文件内被定义，即可在路由选项内使用 middleware 键值指定：**
	

	Route::get('/middle', ['middleware'=>'test, function(){
	    return 'iloveyou';
	}]);


	
	使用一组数组为路由指定多个中间件：
	
	Route::get('/', ['middleware' => ['first', 'second'], function () {
	    //
	}]);
	
	除了使用数组之外，你也可以在路由的定义之后链式调用 middleware 方法：
	
	Route::get('/', function () {
	    //
	}])->middleware(['first', 'second']);


##Laravel控制器
	除了可以在单个的 routes.php 文件中定义所有的请求处理逻辑外，你可能还希望可以使用控制器类来组织
	此行为。
	控制器可将相关的 HTTP 请求处理逻辑组成一个类。控制器一般存放在 app/Http/Controllers 目录下。


###创建控制器
	php artisan make:controller UserController
	php artisan make:controller UserController --plain

###路由以及访问
	普通访问
		Route::get('/User/add', 'UserController@add');

	带参数访问
		Route::get('/User/edit/{id}', 'UserController@edit');

	别名
		设置  Route::get('/User/index', ['uses' => 'UserController@index','as' => 'user']);
		使用  route('user')

	中间件控制
		Route::get('/user/edit/{id}', [
			'middleware' => 'login',
			'uses' => 'TestController@edit']
			);
		Route::get('/user/edit/{id}', 'TestController@edit')->middleware('login');

	隐式控制器
		路由
			Route::controller('users', 'UserController');
		使用
			<?php
			
			namespace App\Http\Controllers;
			
			class UserController extends Controller
			{
			    /**
			     * 响应／users的GET请求
			     */
			    public function getIndex()
			    {
			        //
			    }
			
			    /**
			     * 响应／users／show／1的GET请求
			     */
			    public function getShow($id)
			    {
			        //
			    }
			}

	restful控制器



##请求

**基本信息获取**

		获取请求方法
			$request->method();
		检测方法
			$request->isMethod('post')
		请求路径
			$request->path()
		获取完整url
			$request->url();
		获取ip
			$request->ip()
		获取端口
			$request->getPort()

**提取请求参数**

		基本获取
			$name = $request->input('name');
		设置默认值
			$request->input('name', 'Sally');
		检测是否存在
			$request->has('name')
		提取所有的参数
			$input = $request->all();
		提取部分
			$request->only(['username', 'password']);
			$request->except(['credit_card']);
		获取头信息
			$request->header('Connection')

**文件操作**

		检测是否有文件上传
			$request->hasFile('photo')
		将文件移动到指定位置
			$request->file('photo')->move('./uploads/', 'iloveyou.jpg');

**cookie操作**

		设置
			\Cookie::queue('name','iloveyou',10);
			return response('haha')->withCookie('uid',10,10);
		读取
			\Cookie::get('name');
			$request->cookie('name');

**闪存信息**
	
		将所有的请求参数写入闪存中
			$request->flash()
		将部分参数写入闪存中
			$request->flashOnly('title','price')
		除去某些参数之外的参数
			$request->flashExcept('_token');
		简便使用
			return back()->withInput();


	

