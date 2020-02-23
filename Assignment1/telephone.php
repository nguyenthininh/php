<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="telephone.css" type="text/css">
    <title>Assignment 1</title>
</head>
<body>

<?php

    $title = "products";
    $products = [
      [
              "image" => "images/vsmart-active-3-6gb-ram-1_6_2.jpg",
          "promotion" => "Lì xì 400.000 đ",
          "info" =>
          [
              "name" => "Vsmart Active 3 6GB-64GB",
              "price" => "4.999.000 đ",
              "rate" => "51"
          ],
          "details" =>
          [
              "screen" => "1080 x 2340 Pixels 6.39 i ...",
              "camera" => "48MB f/1.7 +8MP f/2.2 +...",
              "pin" => "4.020 mAh",
              "ram" => "6 GB",
              "cpu" => "MediaTek Helio P60 8 nhân",
              "hdh" => "Android 9"
          ]
      ],
        [
            "image" => "images/vsmart-active-3-6gb-ram-1_6_2.jpg",
            "promotion" => "Lì xì 400.000 đ",
            "info" =>
                [
                    "name" => "Vsmart Active 3 6GB-64GB",
                    "price" => "4.999.000 đ",
                    "rate" => "51 "
                ],
            "details" =>
                [
                    "screen" => "1080 x 2340 Pixels 6.39 i ...",
                    "camera" => "48MB f/1.7 +8MP f/2.2 +...",
                    "pin" => "4.020 mAh",
                    "ram" => "6 GB",
                    "cpu" => "MediaTek Helio P60 8 nhân",
                    "hdh" => "Android 9"
                ]
        ],
        [
            "image" => "images/vsmart-live-xanh_1.jpg",
            "promotion" => "Trả góp 0%",
            "info" =>
                [
                    "name" => "Vsmart Live 6GB-64GB",
                    "price" => "3.790.000 đ",
                    "rate" => "157 "
                ],
            "details" =>
                [
                    "screen" => "1080 x 2232 pixel 6.2 inchs",
                    "camera" => "48MP f/1.7 + 5MP f/1.9+8 MP f/22 20.0 MP",
                    "pin" => "4000 mAh",
                    "ram" => "6 GB",
                    "cpu" => "Qualcomm®  Snapdragon™  675",
                    "hdh" => "Android 9"
                ]
        ],
        [
            "image" => "images/vsmart-live-6g.jpg",
            "promotion"=>"Lì xì 1.000.000đ",
            "info" =>
                [
                    "name" => "Vsmart Active 1+",
                    "price" => "3.590.000",
                    "rate" => "216"
                ],

            "details" =>
                [
                    "screen" => "1080 x 2280 Pixels 6.18 inches",
                    "camera" => "24.0 MP + 12.0 MP 20.0 MP",
                    "pin" => "3650 mAh",
                    "ram" => "6 GB",
                    "cpu" => "Qualcomm Snapdragon 660",
                    "hdh" => "VOS (Based on Android 8.1)"
                ]
        ],
        [
            "image" => "images/4ba2vt.jpg",
            "promotion"=>"Lì xì 400.000đ",
            "info" =>
                [
                    "name" => "Vsmart Active 3 6GB-64GB",
                    "price" => "4.990.000",
                    "rate" => "51"
                ],

            "details" =>
                [
                    "screen" => "1080 x 2340 Pixels 6.39 inchs",
                    "camera" => "48 MP f/1.7 + 8MP f/2.2 + 2MP 16.0 MP",
                    "pin" => "4.020 mAh",
                    "ram" => "6 GB",
                    "cpu" => "MediaTek Helio P60 8 nhân",
                    "hdh" => "Android 9"
                ]
        ],
        [
            "image" => "images/vsmart-live-den.jpg",
            "promotion"=>"Lì xì 300.000đ",
            "info" =>
                [
                    "name" => "Vsmart Active 3 4GB-64GB",
                    "price" => "4.490.000",
                    "rate" => "33"
                ],

            "details" =>
                [
                    "screen" => "1080 x 2340 Pixels 6.39 inchs",
                    "camera" => "48 MP f/1.7 + 8MP f/2.2 + 2MP 16.0 MP",
                    "pin" => "4.020 mAh",
                    "ram" => "4 GB",
                    "cpu" => "MediaTek Helio P60 8 nhân",
                    "hdh" => "Android 9"
                ]
        ],
        [
            "image" => "images/vsmart-active1-plus.jpg",
            "promotion"=>"Trả góp 0%",
            "info" =>
                [
                    "name" => "Vsmart Live 6GB-64GB",
                    "price" => "3.790.000",
                    "rate" => "157"
                ],

            "details" =>
                [
                    "screen" => "1080 x 2232 pixel 6.2 inchs",
                    "camera" => "48MP f/1.7 + 5MP f/1.9+8 MP f/22 20.0 MP",
                    "pin" => "4000mAh",
                    "ram" => "6 GB",
                    "cpu" => "Qualcomm®  Snapdragon™  675",
                    "hdh" => "Android 9"
                ]

        ],
        [
            "image" => "images/vsmart-live-6g.jpg",
            "promotion"=>"Lì xì 1.000.000đ",
            "info" =>
                [
                    "name" => "Vsmart Active 1+",
                    "price" => "3.590.000",
                    "rate" => "216"
                ],

            "details" =>
                [
                    "screen" => "1080 x 2280 Pixels 6.18 inches",
                    "camera" => "24.0 MP + 12.0 MP 20.0 MP",
                    "pin" => "3650 mAh",
                    "ram" => "6 GB",
                    "cpu" => "Qualcomm Snapdragon 660",
                    "hdh" => "VOS (Based on Android 8.1)"
                ]
        ]

    ];
?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-3 product">
                <div class="images-product">
                    <img src="<?php echo $product['image'];?>">
                    <label class="sale"><?php echo $product['promotion'];?></label>
                </div>
                <div class="info-product">
                    <div class="name-product"><?php echo $product['info']['name'];?></div>
                    <div class="price-product"><?php echo $product['info']['price'];?>đ</div>
                    <div class="vote-rate-product">
                        <div class="vote-product">

                        </div>
                        <div class="rate-product">(<?php echo $product['info']['rate'];?>đánh giá)</div>
                    </div>
                </div>
                <div class="details-product">
                    <div class="screen-product">
                        <span>Màn hình :</span><?php echo $product['details']['screen'];?></div>
                    <div class="camera-product">
                        <span>Camera :</span><?php echo $product['details']['camera'];?></div>
                    <div class="battery-product">
                        <span>Pin:</span><?php echo $product['details']['pin'];?></div>
                    <div class="ram-product">
                        <span>Ram:</span>6 GB</div>
                    <div class="cpu-product">
                        <span>CPU:</span><?php echo  $product['details']['cpu'];?></div>
                    <div class="hdh-product">
                        <span>HDH:</span><?php echo $product['details']['hdh'];?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
