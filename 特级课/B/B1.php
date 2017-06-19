<?php 

// 函数考试（80分） 
// 1．array_values（）
// 2．array_keys（）
// 3．array_flip（）
// 4．in_array（）
// 5．array_search（）
// 6．array_key_exists（）
// 7．trim
// 8．rtrim()
// 9．htmlspecialchars()
// 10．htmlspecialchars_decode() 
// 11．strip_tags()
// 12．pathinfo()
// 13．dirname（）
// 14．str_pad（）
// 15．str_repeat()
// 16．strrev()
// 17．array_combine()
// 18．array_unique（）
// 19．shuffle（）
// 20．array_rand（）
// 21．compact()
// 22．substr_count() 
// 23．range()
// 24．array_chunk()
// 25．abs()
// 26．ceil()
// 27．floor()
// 28．fmod()
// 29．pow()
// 30．round()
// 31．array_push（）
// 32．array_pop（）
// 33．array_shift（）
// 34．array_unshift（）
// 35．sqrt()
// 36．max()
// 37．mt_rand()
// 38．array_slice（）
// 39．array_splice（）
// 40．array_pad（）

// 41．intval()
// 42．str_shuffle()
// 43．parse_str（）
// 44．parse_url()
// 45．chr()
// 46．ord()
// 47．strtolower()
// 48．strtoupper()
// 49．ucfirst()
// 50．ucwords()
// 51．current（）
// 52．next（）
// 53．prev（）
// 54．end（）
// 55．reset（）
// 56．key（）
// 57．explode()
// 58．implode()
// 59．str_replace()
// 60．substr()
// 61．substr_replace()
// 62．strstr()
// 63．array_sum（）
// 64．array_merge（）
// 65．array_diff（）
// 66．array_diff_assoc（）
// 67．array_intersect（）
// 68．array_intersect_assoc（）
// 69．strrchr()
// 70．strpos()
// 71．strrpos()
// 72．strlen()
// 73．sort（）
// 74．rsort（）
// 75．asort（）
// 76．arsort（）
// 77．ksort（）
// 78．krsort（）
// 79．natsort（）
// 80．natcasesort（）
 


// 编程题：
// 1.	请对下列数组用冒泡排序法进行排序（5分）
// Array（10,2,36,14,10,25,23,85,99,45）;
	
// 冒泡排序
function paixu($arr){
// $num=0;
//冒泡排序	
for($i=0;$i<count($arr)-1;$i++){
	for($j=0;$j<count($arr)-$i-1;$j++){
		// echo $arr[$j].'---'.$arr[$j+1].'<br>';
		if($arr[$j]>$arr[$j+1]){
			//位置对调
			$tmp=$arr[$j];
			$arr[$j]=$arr[$j+1];
			$arr[$j+1]=$tmp;
			
		}
		$num++;	
	}
	// echo '<hr>';
}
// echo $num;
return $arr;			
}
	
// 2.	请对下列数组用二分法排序法进行排序（5分）
// Array（0,2,10,9,19,23,89,112,321,234）;
	$arr = array(0,2,10,9,19,23,89,112,321,234);
	//快速排序
	// $num=0;	
	function paixu($arr){
		// 	global $num;
		// 	$num++;	
		if(count($arr)<=1){
			return $arr;
		}	
		//快速排序
		$base[]= $arr[0];
		$left =[];
		$right=[];	
		for($i=1;$i<count($arr);$i++){
			// echo $base.'---'.$arr[$i].'<br>';
			if($arr[$i]<$base[0]){
				$left[]=$arr[$i];
			}else{
				$right[]=$arr[$i];
			}
		}
		//递归调用分别排序
		$left  = paixu($left);
		$right = paixu($right);	

		return array_merge($left,$base,$right);			
	}
	// echo $num;

// 3.	写出匹配邮箱的正则表达式（3分）
// 4.	写出匹配手机号码的正则表达式（2分）
// 5.	写出匹配网址的正则表达式（3分）
// 6.	写出匹配IP的正则表达式（2分）
// $ip = '255.123.8.8';

// $reg = '/^(([01]?\d?\d|2[0-4]\d|25[0-5])\.){3}([01]?\d?\d|2[0-4]\d|25[0-5])$/';
// $reg = '/^((?:(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d)))\.){3}(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d))))$/';
$reg = '/^((1\d?\d?|[1-9]\d?|2[0-4]\d|25[0-5]))(\.([01]?\d?\d|2[0-4]\d|25[0-5])){3}$/';

// preg_match($reg,$ip,$mpt);
// var_dump($mpt);



 ?>