<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
  <title>Document</title>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost", "root", "root", "school");

  if (mysqli_connect_errno()) {
    die("Connection Fail" . mysqli_connect_error());
  }

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM student WHERE id = $id");
    echo "Row with ID $id deleted successfully.";
  } else {
    echo "No ID provided.";
  }
  ?>
</body>

</html>