<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .title {
      color: red;
    }

    .image {
      width: 300px;
    }
  </style>
</head>

<body>
  <?php
  $myGame = [
    [
      "title" => "GTA V",
      "rank" => 7.8,
      "description" => "Best Open world",
      "image" => "./image/GTA-V.webp",
    ],
    [
      "title" => "Horizon",
      "rank" => 8.7,
      "description" => "Best Nustalghi game",
      "image" => "./image/horizon.jpeg",
    ],
    [
      "title" => "The last of us",
      "rank" => 9.0,
      "description" => "Best local multiplayer",
      "image" => "./image/the-last-of-us-1.jpg",
    ],
  ];

  foreach ($myGame as $item) {
    echo "
    <h2 class='title'>{$item['title']}</h2>
    <img class='image' src='{$item['image']}'></img>
    <p>{$item['description']}</p>
    <div>{$item['rank']}</div>
    ";
  }

  ?>
</body>

</html>