<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的消息</title>
	
<link href="../css/userhome/message.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="mainbox-content">
		我的消息页面<br>
<?php
function maopao($arr){

   //一共是多少趟

   for($i = count($arr)-1; $i>0; $i--){

       $flag = 0;

       //每一趟进行相邻两个数进行比较

       for($j = 0; $j < $i; $j++){

           if($arr[$j]<$arr[$j+1]){

               $temp = $arr[$j];

               $arr[$j] = $arr[$j+1];

               $arr[$j+1] =$temp;

               $flag = 1;

           }

       }

       if($flag == 0){

           break;

       }

   }

   return $arr;

}

$arr=array(30,40,10,50,20,60);

print_r(maopao($arr));

?>
?>

	</div>
</body>
</html>