<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0414hw.php</title>
</head>

<body>
     <?php

/*
switch作業一
110以下免費、110~120半價、121以上全票
A = 170 ; 
B = 118 ;
所以Ａ跟Ｂ的票價為何？
*/


echo "<h3>作業一</h3>";
$ab = array(
     "A" => 170,
     "B" => 118
);
//打印
foreach($ab as $key => $vul){
     echo $key.":".$vul."<br>";
}
//確認票價
foreach($ab as $key => $vul){
     switch($vul < 110){
          case 1:
               print($key.":"."免費<br>");
               break;
          case 0:
               switch($vul >= 120){
                    case 1:
                         print($key.":"."全票<br>");
                         break;
                    case 0:
                         print($key.":"."半票<br>");
                         break;}
          break;}
     
}

/*
作業二
1~100內，35~58的奇數總和為多少
*/ 
echo "<h3>作業二</h3>";

$total = 0;
$i = 1;

for($i = 35 ; $i <58 ; $i=$i+2){
     if(($i % 2) != 0){
          print($i.",<br>");
          $total += $i ;
     }
}
print("total:".$total)

     ?>
</body>

</html>