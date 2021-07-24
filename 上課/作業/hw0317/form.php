<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>form.php</title>
</head>

<body>
     <?php
     $username = $_POST["User"];
     $password = $_POST["Sex"];
     print "姓名: " . $username . "<br/>";
     print "生理性別: " . $password . "<br/>";
     $address = $_POST["Address"];
     print "地址: <br/>" . nl2br($address) . "<br/>";
     $type = $_POST["Type"];
     print "種類: " . $type . "<br/>";
     $education = $_POST["Education"];
     print "學歷: <br/>" . $education . "<br/>";
     $salary = $_POST["Yearsalary"];
     print "年收入: <br/>" . $salary . "<br/>";
     ?>
</body>

</html>