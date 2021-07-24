<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>07153104黃凱琳_0603hw.php</title>
</head>

<body>
     <h2>作業二</h2>
     <?php
     

     $db = new mysqli('localhost','root','','library');
     if($db->connect_error){
          /*連線資料庫失敗，並說為什麼失敗*/
          die("Connection failed: " . $db->connect_error);
     }else{
          /*連線資料庫成功*/
          echo "SQL CONN SUCCESS!<br>";
     
     }
     
     $db->query('SET NAMES UTF8');
     
     $sql = "SELECT * FROM books";
     $result= mysqli_query($db,$sql) or die("not fire");
     
     echo "<table>";
     while ($attr = mysqli_fetch_row($result)) {
          echo "<tr>";
          for($i = 0 ;$i <= 3;$i++){
               echo "<td>" . $attr[$i] . "</td>";
          }
          echo "</tr>";
     }
     echo "</table>";
     
     
     ?>
</body>

</html>



