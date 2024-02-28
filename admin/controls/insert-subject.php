<?php
include 'config.php';

$S_name = $_POST['S_name'];

$sql = "INSERT INTO `subject`(`S_name`) VALUES ('$S_name')";
$run = mysqli_query($con, $sql);

if ($run) {
    echo "your data added successfully ....!";
} else {
    echo "your data not added successfully ....!";
}
