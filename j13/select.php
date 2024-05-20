<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
  <title>Select</title>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost", "root", "root", "school");

  if (mysqli_connect_errno()) {
    die("Connection Fail" . mysqli_connect_error());
  }

  $query = mysqli_query($con, "SELECT * FROM student");

  echo "<table border='1'>";
  echo "<tr><th>ID</th><th>نام</th><th>پایه تحصیلی</th><th>تاریخ تولد</th><th>حذف</th><th>ویرایش</th></tr>";

  while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['paye_tahsili'] . "</td>";
    echo "<td>" . $row['tarikh_tavalod'] . "</td>";
    echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Update</a></td>";
    echo "</tr>";
  }

  echo "</table>";
  ?>
</body>

</html>