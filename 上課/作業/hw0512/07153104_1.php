<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0512hw.php</title>
</head>

<body>
     <h2>作業一</h2>
     <!-- 8-1-2 伺服器的系統資訊 -->
     <?php
     $ip = $_SERVER["REMOTE_ADDR"];
     $path = $_SERVER["SCRIPT_NAME"];
     $server = $_SERVER["SERVER_SOFTWARE"];
     print $ip."<br>";
     print $path."<br>" ;
     print $server."<br>" ;
     print "======<br>";
     foreach ($_SERVER as $key=>$value) {
          echo $key.": ";
          echo $value."<br>";}
     ?>
     <h2>作業二</h2>
     <?php
          $num = random_int(1,3);
          print "num: ".$num ;
          if($num ==1){
               header("Refresh:3 ; url= https://www.google.com") ;
          }
          elseif($num ==2){
               header("Refresh:3 ; url= https://bigdata.scu.edu.tw/") ;
          }
          elseif($num ==3){
               header("Refresh:3 ; url= https://tw.yahoo.com/") ;
          }


     ?>
</body>

</html>