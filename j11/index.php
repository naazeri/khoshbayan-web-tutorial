<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .title {
      color: orange;
    }

    .price {
      color: aquamarine;
    }
  </style>
</head>

<body>
  <?php
  $products = [
    [
      "title" => "Surface 3",
      "price" => 900,
      "off" => 0,
      "image" => "./image/1.webp",
    ],
    [
      "title" => "Macbook Pro",
      "price" => 2000,
      "off" => 20,
      "image" => "./image/2.webp",
    ],
    [
      "title" => "Asus",
      "price" => 1200,
      "off" => 80,
      "image" => "./image/3.webp",
    ],
  ];

  foreach ($products as $item) {
    $basePrice = $item['price'];
    $off = $item['off'];
    $afterPrice = $basePrice -  $basePrice * $off / 100;
  ?>

    <h1 class='title'><?php echo $item['title'] ?></h1>
    <img src="<?php echo $item['image'] ?>" alt=''>
    <h3 class="price"><?php echo $item['price'] ?>$</h3>
    <h3><?php echo $afterPrice ?></h3>
    <h3><?php echo $item['off'] ?>%</h3>
    <hr>

  <?php
  }
  ?>

</body>

</html>