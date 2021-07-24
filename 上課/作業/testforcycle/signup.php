<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>註冊</title>
<link rel="stylesheet" type="text/css" href="signup.css"/>
</head>
<body>
     <!-- Ｋ：還是要改id（另種框架） -->
     <div id="signup_frame">


<!-- 上傳照片  form input -->
<!-- 
上傳後，確認送出。
換檔名，從上傳暫存移到現有目錄
-->
<?php
     if(isset($_FILES["pic"])){
          echo "名稱".$_FILES["pic"]['name']."<br>";
          echo "暫存黨名".$_FILES["pic"]['tmp_name']."<br>";
          if(copy($_FILES["pic"]['tmp_name'],$_FILES["pic"]['name'])){
               echo "上傳成功";
               unlink($_FILES["pic"]['tmp_name']);
          }
     }
          
     ?>
     
     <form method="post" action="signup.php" enctype="multipart/form-data"> 
          <input type= "file"  name = "pic">
          <input type="submit" >上傳
     </form>
     
     </div>
</body>
</html>