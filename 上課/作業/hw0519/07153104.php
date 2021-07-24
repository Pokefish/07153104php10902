<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0519hw.php</title>
</head>

<body>
     <h2>作業一</h2>
     <!-- 驗證有哪些資料沒有撰寫 -->
     
     <?php
     // $idErr = $usernameErr = $sexErr = $systemErr = "";
     $id = $username = $sex = $system = "";
     // 測試是否有拿到
     if ($_SERVER["REQUEST_METHOD"]=="POST"){
          if (empty($_POST["id"])){
               echo '請輸入帳號<br>';
          }else{
               $id = $_POST["id"];
               echo "id: ".$id."<br>";
          }
          if (empty($_POST["username"])){
               echo "請輸入名字<br>";
          }else{
               $username = $_POST["username"];
               echo "username: ".$username."<br>";
          }
          if (empty($_POST["Sex"])){
               echo "請選擇性別<br>";
          }else{
               $sex = $_POST["Sex"];
               echo "sex: ".$sex."<br>";
          }
          if ($_POST["System"]==0){
               echo "請選擇系統<br>";
          }else{
               $System = $_POST["System"];
               echo "system: ".$system."<br>";
          }
     }
     ?>
     
</body>

</html>