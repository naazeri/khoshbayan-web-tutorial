<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
  <title>Update</title>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost", "root", "root", "school");

  if (mysqli_connect_errno()) {
    die("Connection Fail" . mysqli_connect_error());
  }

  if (!isset($_GET['id'])) {
    die("need id");
  }

  $id = $_GET['id'];

  $query = mysqli_query($con, "SELECT * FROM student WHERE id = $id");

  echo "<table border='1'>";
  echo "<tr><th>ID</th><th>Name</th><th>Paye Tahsili</th><th>Tarikh Tavalod</th></tr>";

  while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['paye_tahsili'] . "</td>";
    echo "<td>" . $row['tarikh_tavalod'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";

  ?>

  <form method="POST">
    <h2>Update</h2>
    <div>
      <input type="text" name="name" placeholder="نام" required>
    </div>

    <div>
      <input type="number" name="paye_tahsili" placeholder="پایه تحصیلی" required>
    </div>

    <div>
      <input type="date" name="tarikh_tavalod" placeholder="تاریخ تولد" required>
    </div>

    <div>
      <button type="submit" name="submit">ثبت</button>
    </div>
  </form>
</body>

</html>

<?php
//                    server address, username, password, db name
$con = mysqli_connect("localhost",    "root",   "root",   "school");

if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
} else {
  echo "<p>Connected</p>";
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $paye_tahsili = $_POST['paye_tahsili'];
  $tarikh_tavalod = $_POST['tarikh_tavalod'];

  $query = mysqli_query($con, "UPDATE student SET name = '$name', paye_tahsili = '$paye_tahsili', tarikh_tavalod = '$tarikh_tavalod' WHERE id = $id");

  if ($query) {
    echo "<p>Update Success</p>";
    header("Location: update.php?id=$id");
    exit;
  } else {
    echo "error on insert";
  }
}

$con->close();

?>