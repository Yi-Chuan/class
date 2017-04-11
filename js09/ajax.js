var $ = {
	//get方法
	get: function(url,data,func){
		//创建ajax对象
		var x = new XMLHttpRequest();
		//事件函数
		x.onreadystatechange = function(){
			if(x.readyState == 4 && x.status == 200){
				//服务器返回的数据
				var res = x.responseText;
				func(res);
			}
		}
		//{a:100,b:200} => a=100&b=200&c=300&
		//遍历 for in
		var str = '';
		for(var i in data){
			str += i+'='+data[i]+'&';
		}
		//初始化
		x.open('GET',url+'?'+str,true);
		//发送
		x.send();
	},

	//post
	post:function(url,data,func){
		//创建ajax对象
		var x = new XMLHttpRequest();
		//事件函数
		x.onreadystatechange = function(){
			if(x.readyState == 4 && x.status == 200){
				//服务器返回的数据
				var res = x.responseText;
				func(res);
			}
		}
		//{a:100,b:200} => a=100&b=200&c=300&
		//遍历 for in
		var str = '';
		for(var i in data){
			str += i+'='+data[i]+'&';
		}
		//初始化
		x.open('POST',url,true);
		//设置头信息
		x.setRequestHeader('content-type','application/x-www-form-urlencoded');
		//发送
		x.send(str);
	}

}