


<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0505hw.php</title>
</head>

<body>
     <?php

// 作業一
     echo "<h3>作業一</h3>";
// foreach 改寫for 迴圈
// scores 的東西印出並計算總額\
     $grade = array(88,99,100,70);
     $total = 0;
     for($i=0;$i<count($grade);$i++){
          print("分數:".$grade[$i]."<br>");
          $total += $grade[$i];
     }
     print ("總分:".$total."<br>");
// 作業二
// 陣列翻轉、加陣列
     echo "<h3>作業二</h3>";
     array_reverse($grade);
     echo "翻轉後"."<br>";
     for($i=0;$i<count($grade);$i++){
          print($grade[$i]."<br>");
     }
     
     echo "增加77"."<br>";
     $grade[]=77;
     $grade[]=77;
     for($i=0;$i<count($grade);$i++){
          print($grade[$i]."<br>");
     }
     echo "unique"."<br>";
     $kk = array_unique($grade);
     for($i=0;$i<count($kk);$i++){
          print($kk[$i]."<br>");
     }
// 作業三
     echo "<h3>作業三</h3>";
     $row1 = array(64,65);
     $row2 = array(77,81);
     $row3 = array(89,93);
     $scores = array($row1,$row2,$row3);
// 得到兩個總和230/239
     $ans1=0;
     $ans2=0;
     for($i=0;$i < count($scores);$i++){
          // echo $scores[$i][0]."<br>";
          $ans1 += $scores[$i][0];
          // echo $scores[$i][1]."<br>";
          $ans2 += $scores[$i][1];
     }
     print("ans1:".$ans1."<br>");
     print("ans2:".$ans2."<br>");
// 作業四
     // name從1開始的陣列
     echo "<h3>作業四</h3>";
     $weekday = array(
          1=>"Mon.","Tue","Wed","Thu","Fri","Sat","Sun");
     print_r($weekday);
     
// 實作題一
     // 宣告95,85,76,56.計算總分312、平均78
     echo "<h3>實作題一</h3>";
     $grades = array(95,85,76,56);
     for($i=0;$i<count($grades);$i++){
          print("分數:".$grades[$i]."<br>");
          $total0 += $grades[$i];
     }
     print ("總分:".$total0."<br>");
     $avg = $total0 / count($grades);
     print ("平均:".$avg."<br>");
// 實作題二
     
     echo "<h3>實作題二</h3>";
     /*
     請建立 PHP 程式宣告 PHP 字串變數 &str = ‘PHP Programming’，然後顯示下列字串函數的輸出結果
     strlen(&str)
     strpos(&str, “r”)
     strrev(&str)
     substr(&str, 3, 6)
     */
     $str = "PHP Programming";
     echo (">>".$str."<br>");
     echo "strlen字串長度:".strlen($str)."<br>";
     echo "strpos位置在哪（r）:".strpos($str, 'r')."<br>";
     echo "strrev反轉:".strrev($str)."<br>";
     echo "substr部分3~7:".substr($str, 3, 6)."<br>";

?>

</body>

</html>