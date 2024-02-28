<?php
include 'config.php';

$name = $_POST['name'];
$des = $_POST['des'];

$sql = "INSERT INTO `teacher`( `name`, `design`) VALUES ('$name','$des')";
$run = mysqli_query($con, $sql);

if ($run) {
    echo "your data added successfully ....!";
} else {
    echo "your data not added successfully ....!";
}
