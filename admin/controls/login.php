<?php

include 'config.php';

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if ($username != "" and $password != "") {
  $sql = "SELECT * FROM `admin` WHERE `username` = '{$username}' AND `password` = '{$password}'";
  $run = mysqli_query($con, $sql);

  if (mysqli_num_rows($run)) {
    session_start();
    $_SESSION["uname"] = "$username";
    echo "you loged in";
  } else {
    echo 'Incoreect username and password !';
  }
} else {
  echo " please enter username and password";
}
