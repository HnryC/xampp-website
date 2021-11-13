
<!DOCTYPE html>
<html>
  <head>
    <title>Conformation</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<?php
    require("connect.php");

    $dob = $conn->real_escape_string($_POST['DOB']);
    $first_name = $conn->real_escape_string($_POST['FIRST-NAME']);
    $last_name = $conn->real_escape_string($_POST['LAST-NAME']);
    $email = $conn->real_escape_string($_POST['mail']);

    $sql = "INSERT INTO attendees VALUES ('', '$dob', '$first_name', '$last_name','$email')";
    if(!mysqli_query($conn, $sql)){
        echo "ERROR: $sql. " . mysqli_error($conn);
        die();
    }

    $conn->close();
?>
  <div class="page-top">
    <img class="page-image" src="https://i1.sndcdn.com/artworks-000411119679-90ud0n-t500x500.jpg">
    <h1 class="page-title">School of Rock <a href="register.html">Register</a></h1>
  </div>
  <h1 class='contents'>You are succsesfully connected!</h1>
</body>
</html>
