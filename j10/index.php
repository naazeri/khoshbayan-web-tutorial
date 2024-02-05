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
  </style>
</head>

<body>
  <?php
  $products = [
    [
      "title" => "Surface 3",
      "price" => 900,
      "off" => 10,
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

    echo "
    <h1 class='title'>{$item['title']}</h1>
    <img src='{$item['image']}' alt=''>
    <h3>{$item['price']}$</h3>
    <h3>$afterPrice</h3>
    <h3>{$item['off']}%</h3>
    <hr>
  ";
  }
  ?>



</body>

</html>