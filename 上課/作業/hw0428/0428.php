<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0428.php</title>
</head>


<!-- php 初始模板 -->

<body>
     <h2>實作一</h2>
     <?php
          function tt($a,$b){
                    if ($a > $b) {
                         $ans = $a + $b ;
                    }else{
                         $ans = $a*$b;
                    }
                    return $ans ; 
                    // print("參數A：".$a."<br>"."參數B：".$b."<br>");
                    // print("ANS：".$ans."<br>");
               }
          function tt2($a,$b){
               if ($b==0) {
                    $ans = -1;
               }else{
                    $ans = $a % $b;
               }
               return $ans ; 
               // print("參數A：".$a."<br>"."參數B：".$b."<br>");
               // print("ANS：".$ans);
          }
          ?>
     <?php
     
     $d = 2;
     $e = 3;
     
     print("參數A：".$d."<br>"."參數B：".$e."<br>");
     print("ANS：".tt($d,$e)."<br>");

     $a = 1;
     $b = 0;
     print("參數A：".$a."<br>"."參數B：".$b."<br>");
     print("ANS：".tt2($a,$b)."<br>");

     /*另寫
          //
          請建立 2 個 PHP 函數，擁有兩個整數參數
          在第 1 個函數中，當參數 1 大於 參數 2 時，回傳 2 個參數相加，否則回傳 2 個參數相乘
          在第 2 個函數中，回傳參數 1 除以參數 2 的結果，如果參數 2 為 0，回傳 -1
          //
          function tt($a,$b){
               if ($a > $b) {
                    $ans = $a + $b ;
               }else{
                    $ans = $a*$b;
               }
               print("參數A：".$a."<br>"."參數B：".$b."<br>");
               print("ANS：".$ans."<br>");
          }
          function tt2($a,$b){
               if ($b==0) {
                    $ans = -1;
               }else{
                    $ans = $a % $b;
               }
               print("參數A：".$a."<br>"."參數B：".$b."<br>");
               print("ANS：".$ans);
          }
          tt(2,3);
          tt2(1,0);
          */

     ?>
     
     <h2>實作二</h2>
     <?php
          /*
          請建立 PHP 函數顯示距離今年中秋節還剩下幾天
          */
          function midAutumn(){
               date_default_timezone_set('Asia/Taipei');
               $today = date('Y/m/d');
               // echo $today;
               $midAutumn = date('2021/09/21');
               // echo $midAutumn;
               $dday = (strtotime($midAutumn)-strtotime($today))/3600/24;
               return $dday;
          }
          date_default_timezone_set('Asia/Taipei');
          $today = date('Y/m/d');
          echo "今天距離今年中秋節還剩下 ".midAutumn()." 天<br>";
          echo "今天：".$today;
     ?>
</body>

</html>