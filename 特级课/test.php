<?php 
//1.冒泡排序
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

	//  `dir >root.php`
	
	
	
$arr = array(20,13,11,48,9,25,50);
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

 ?>