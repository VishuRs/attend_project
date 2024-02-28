<?php
include 'config.php';

$c_name = $_POST['c_name'];
$anadita = $_POST['sem_no'];

$sql = "INSERT INTO `course`(`C_name`, `Sem_no`) VALUES ('$c_name','$anadita')";
$run = mysqli_query($con, $sql);

if ($run) {
    echo "your data added successfully ....!";
} else {
    echo "your data not added successfully ....!";
}
