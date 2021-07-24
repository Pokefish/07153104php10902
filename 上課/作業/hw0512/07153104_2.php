<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0512hw.php</title>
</head>

<body>
     <h2>作業三</h2>
     <!-- 緩衝區使用 -->
     
     <?php  ob_start(); // 決定要使用 ?>
     
     <?php 
          for($i = 1;$i<=50;$i++){
               echo $i." " ;
               if ($i%2 == 0 or $i%3 ==0){
                    ob_flush();// 傳緩衝區回來
               }else{
                    ob_clean();// 清除
               }
     }
     ?>

     <h2>作業四</h2>
     
     <?php
     $id = $_POST["id"];
     $username = $_POST["username"];
     $sex = $_POST["Sex"];
     $system = $_POST["System"];

     echo "id: ".$id."<br>";
     echo "username: ".$username."<br>";
     echo "sex: ".$sex."<br>";
     echo "system: ".$system."<br>";
     ?>

     
</body>

</html>