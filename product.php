<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <?php
    $title =" Danh sach san pham";
    ?>
      <h2><?php echo $title; ?></h2>
    <a href="themsanpham.php">Thêm sản phẩm</a>

<?php
  $arr = [
    [
        "id" => "1",
        "name" => "Asus",
        "quantity" => "3",
        "price" => 300000,
        "describe" => "mau xanh nhe"
    ],
      [
          "id" => "2",
          "name" => "Nokia",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "3",
          "name" => "Asus",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "4",
          "name" => "Samsung",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "5",
          "name" => "Iphone",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "6",
          "name" => "XsMax",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "7",
          "name" => "Dell",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "8",
          "name" => "IPhone5",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "9",
          "name" => "Iphone6",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],
      [
          "id" => "10",
          "name" => "Iphone8",
          "quantity" => "3",
          "price" => "300000",
          "describe" => "mau xanh nhe"
      ],

  ];
?>

<table border="1">
        <thread>
            <tr style="background: aqua;" >
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Describe</th>

            </tr>
        </thread>

        <tbody>

        <?php foreach ($arr as $c ){ ?>  //c1
        <tr >
            <td style="width: 20px;"><?php echo $c["id"]; ?></td>
            <td style="width: 70px;"><?php echo $c["name"]; ?></td>
            <td style="text-align: center; width: 70px;"><?php echo $c["quantity"]; ?></td>
            <td style=" width: 100px; text-align: center;" ><?php echo $c["price"]; ?></td>
            <td style="width: 150px;text-align: center;"><?php echo $c["describe"]; ?></td>

        </tr>

        </tbody>

    <?php } ?>

</table>


</body>
</html>
