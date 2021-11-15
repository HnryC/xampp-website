<!DOCTYPE html>
<html>
  <head>
    <title>Conformation</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<?php
require("connect.php");

$rating = $conn->real_escape_string($_POST['rating']);
$first_name = $conn->real_escape_string($_POST['first-name']);
$last_name = $conn->real_escape_string($_POST['last-name']);
$review = $conn->real_escape_string($_POST['quote']);

$sql = "INSERT INTO quotes VALUES (uuid(), '$rating', '$review', '$first_name', '$last_name')";
if(!mysqli_query($conn, $sql)){
    echo "ERROR: $sql. " . mysqli_error($conn);
    die();
}

$conn->close();
?>
<meta http-equiv = "refresh" content = "3; url = index.php" />
</body>
</html>
