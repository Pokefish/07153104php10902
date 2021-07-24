<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <title>07153104黃凱琳_midterm.php</title>
</head>

<body>
     
     <!-- 題目一 html -->

     <!-- html網頁建立，五個套餐的名稱、圖片、價格、說明-->

     <h1>六福村菜單</h1>
     <p>巨無霸全家福烤雞手扒堡</p>
     <a>
          <img src="set01.jpg" width="100" height="100"  title="巨無霸全家福烤雞手扒堡">
     </a>
     <p>價格：120<br>
     說明：店長推薦，不好吃還是要錢。</p>

     <p>手扒檸香脆皮雞</p>
     <a>
          <img src="set02.jpg" width="100" height="100"  title="手扒檸香脆皮雞">
     </a>
     <p>價格：150<br>
     說明：超香超脆，你想吃雞！！</p>
     

     <p>元氣大亨雞腿堡</p>
     <a>
          <img src="set03.jpg" width="100" height="100"  title="元氣大亨雞腿堡">
     </a>
     <p>價格：100<br>
     說明：想吃雞腿又想吃飽，那就來吃雞腿堡！</p>

     <p>卡拉雞貝殼堡</p>
     <a>
          <img src="set04.jpg" width="100" height="100"  title="卡拉雞貝殼堡">
     </a>
     <p>價格：80<br>
     說明：喔對，這是從隔壁偷來的餐點</p>

     <p>六福炸雞餐</p>
     <a>
          <img src="set05.jpg" width="100" height="100"  title="六福炸雞餐">
     </a>
     <p>價格：200<br>
     說明：喔對，這也是從隔壁偷來的餐點，不過很好吃</p>


     <!-- // 題目二  -->
     <h1>使用者點餐介面表單(只需介面)</h1>
     <form name="order">
     <p>桌號:<input type="text" name="Table"></p>
     <p>套餐選擇:
     <select name="Set" >
                         <option>選擇你想吃的套餐</option>
                         <option>巨無霸全家福烤雞手扒堡</option>
                         <option>手扒檸香脆皮雞</option>
                         <option>元氣大亨雞腿堡</option>
                         <option>卡拉雞貝殼堡</option>
                         <option>六福炸雞餐</option>
                    </select><br>
     </p>
     <p>店家推薦：<br>大推 >> 巨無霸全家福烤雞手扒堡<br>特推 >> 六福炸雞餐</p>
     <p>備註：<br>每個套餐裡面都有可樂呦</p>
     <input type="submit"> <br>

     <!-- // 題目三  -->
     <?php 
          $setarray = array(
               "巨無霸全家福烤雞手扒堡" => 120 ,
               "手扒檸香脆皮雞" => 150,
               "元氣大亨雞腿堡" => 100,
               "卡拉雞貝殼堡" => 80,
               "六福炸雞餐" => 200
          );
          // 套餐
          // $setarray = $_POST["Set"];
          // 桌號
          // $tablenum = $_POST["Table"];
          $tablenum = 4 ;
          // 4桌點了手扒檸香脆皮雞150\元氣大亨雞腿堡100\卡拉雞貝殼堡80
          
          print "桌號：".$tablenum."<br>";
          print "點餐資訊："."手扒檸香脆皮雞".$setarray["手扒檸香脆皮雞"]."<br>"."卡拉雞貝殼堡".$setarray["卡拉雞貝殼堡"]."<br>"."元氣大亨雞腿堡".$setarray["元氣大亨雞腿堡"]."<br>";
          $total = $setarray["手扒檸香脆皮雞"]+$setarray["卡拉雞貝殼堡"]+$setarray["元氣大亨雞腿堡"];
          print "總價：".$total;
     ?>

     <!-- // 題目四  -->
     <?php
     $warray = array(
          1 => "六","福","村"
     )
     ?>




     <!-- // 題目五  -->
     <?php 

          $ticket = 699;
          $id = "E123450789";
          
          // 0{123} {4,}
          $pattern = "/w+";
          preg_match($pattern,$idsplit,$matches);
          if (preg_match($pattern,$id,$matches)){
               echo "有";
          }else{
               echo "no";
          }
     // foreach($matches)
     /*
     switch($idsplit):
          case "有0":
               case "有1個0":
                    echo "票價:499";
                    break;
               case "有2個0":
                    echo "票價:399";
                    break;
               case "有2個0":
                    echo "票價:299";
                    break;
               case "4個以上":
                    echo "票價:免費";
                    break;
          case "無0":
               echo 0
     */
     ?>


     <!-- // 題目六 -->
     <h2>題目六</h2>
     <?php 
          print("<br>顯示 5~57之間的奇數<br>");
          for($i = 1 ; $i <=500 ; $i++){
               if(($i % 2) != 0 && $i >=5 && $i <=57){
                    print($i."\n");
               }
          }
          print("<br>顯示150~350之間的偶數<br>");
          for($i = 1 ; $i <=500 ; $i++){
               if(($i % 2) == 0 && $i >=150 && $i <=350){
                    print($i."\n");
               }
          }
     ?>

     <!-- // 題目七 -->
     <h2>題目七</h2>
     <?php 
     
     print("<br> 4 到 200，顯示 3 的倍數<br>");
     for($i = 4 ; $i <=200 ; $i++){
          if(($i % 3) == 0){
               print($i."\n");
          }
     }
     print("<br> 4 到 200，顯示 5 的倍數<br>");
     for($i = 4 ; $i <=200 ; $i++){
          if(($i % 5) == 0){
               print($i."\n");
          }
     }
     ?>


</body>

</html>