<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Document</title>

  <style>
    .scale-up-center {
      -webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
      animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
    }

    @-webkit-keyframes scale-up-center {
      0% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes scale-up-center {
      0% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }
  </style>
</head>

<body>
  <h1>HTML</h1>
  <h1 class="animate__animated animate__bounce">
    <?php
    echo "Reza<br>";
    echo "Nazeri";
    ?>
  </h1>

  <?php
  echo "<h1>School</h1>"
  ?>

  <h2 class="scale-up-center">Result: <?php echo 4 * 5; ?></h2>

</body>

</html>