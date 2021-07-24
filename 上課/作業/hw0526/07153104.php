<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0525hw.php</title>
</head>

<body>
     <h2>作業一</h2>
     <?php
     // 9-3-1
     // 9-2-1
     
     if (!file_exists("./students.txt")){
          echo "不存在，建立中<br>";
          $file = fopen("./students.txt","w");
          if (!$file){
               echo "打不開";
          }
          fputs($file, "07153104 黃凱琳 第9組 ReadCycle");
          fclose($file);
          
     }else{
          echo "存在<br>";
          echo "檔案內容: <br>";
          $file = "./students.txt";
          $fp = fopen($file, "r");
          $contents = fread($fp, filesize($file));
          echo nl2br($contents);
          fclose($fp);
     }
     ?>
     
</body>

</html>