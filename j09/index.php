<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>
  <?php
  $myList = [
    [
      "title" => "The last of us",
      "description" => "lorem lorem lorem",
      "rank" => 8.4,
    ],
    [
      "title" => "Horizon",
      "description" => "lorem lorem lorem",
      "rank" => 9.4,
    ],
  ];

  foreach ($myList as $item) {
    echo "
    <dev>
      <h1>{$item['title']}</h1>
      <p>{$item['description']}</p>
      <div>Rank: {$item['rank']} / 10</div>
    </dev>";
  }

  ?>
</body>

</html>