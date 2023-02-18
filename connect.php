<?php

include 'db_config.php';


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * from `users` where email='$email' and password='$password'";

  $query = mysqli_query($conn, $sql);
  $qry = mysqli_fetch_array($query);
  $rows = mysqli_num_rows($query);

  if ($rows == 1) {
    session_start();
    $_SESSION['email'] = $qry['email'];
    $_SESSION['uid'] = $qry['id'];

?>
    <script>
      alert('Login Successfull..');
      window.location = "index.php";
    </script>
  <?php

  } else {
  ?>
    <script>
      alert('Please enter correct Details.');
      window.location = "login.php";
    </script>
  <?php
  }
}


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])) {


  $email = $_POST['email'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];


  $sql = "INSERT INTO `users`(`email`, `password`, `phonenumber`, `name`, `surname`) VALUES ('$email','$password','$phonenumber','$name','$surname')";

  $query = mysqli_query($conn, $sql);

  if ($query) {
  ?>
    <script>
      alert('Register Successfull..');
      window.location = "login.php";
    </script>
<?php

  } else {
    echo 'error occured';
  }
}

?>