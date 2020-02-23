<?php session_start();
    if ($_SESSION['usersession']==null) header("Location: login.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chu</title>
</head>
<body>
<h1>Xin chao: <?php echo $_SESSION['usersession']['email']; ?></h1>
    <h1>Đây là trang chủ</h1>
    <?php
    $title = "Danh sach sinh vien";
    ?>
    <h2><?php echo $title; ?></h2>
    <?php
    $arr = [
      [
          "name" => "Nguyen Van A",
          "age" => 15
      ],
      [
          "name" => "Nguyen Van B",
          "age" => "14"
      ]
    ];
    ?>

<ul>
    <?php foreach ($arr as $s) { ?>
       <li><?php echo $s["name"]. "---".$s["age"]; ?></li>

   <?php } ?>


</ul>
</body>
</html>
