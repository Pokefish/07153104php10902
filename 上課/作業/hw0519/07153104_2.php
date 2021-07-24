<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0519hw-2.php</title>
</head>

<body>
     <!-- <h2>作業二</h2> -->
     <h2>作業二</h2>
     <!-- 看作業一是否存在並改檔為txt -->
     
     <?php
     $file = "/Applications/XAMPP/xamppfiles/htdocs/07153104/hw0519/07153104.php";
     echo $file."<br>";
     if(file_exists($file)){
          echo "存在<br>";
     }else{
          echo "不存在，改檔名失敗<br>";
     }
     if (rename($file,"/Applications/XAMPP/xamppfiles/htdocs/07153104/hw0519/07153104.txt")){
          echo "換檔名成功<br>";
     }else{
          echo "失敗<br>";
     }

     
     echo "dir:".dirname($_SERVER["PHP_SELF"]);
     ?>
     
</body>

</html>