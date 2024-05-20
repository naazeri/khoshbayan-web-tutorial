<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
  <title>Insert</title>
</head>

<body>
  <form method="POST">
    <h2>Create</h2>
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
  die("Connection Fail" . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $paye_tahsili = $_POST['paye_tahsili'];
  $tarikh_tavalod = $_POST['tarikh_tavalod'];

  $query = mysqli_query($con, "INSERT INTO student ( name, paye_tahsili, tarikh_tavalod ) VALUES ('$name','$paye_tahsili', '$tarikh_tavalod' )");

  if ($query) {
    echo "<p>Success</p>";
  } else {
    echo "error on insert";
  }
}
?>