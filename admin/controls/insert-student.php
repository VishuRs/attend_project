<?php
include 'config.php';

$st_name = $_POST['std_name'];
$st_rollno = $_POST['std_rollno'];
$st_subject = $_POST['std_subject'];
$st_add  = $_POST['std_add'];

$sql = "INSERT INTO `student`(`std_name`, `std_rollno`,'std_subject','std_add') VALUES ('$st_name','$st_rollno','$st_subject','$st_add')";
$run = mysqli_query($con, $sql);

if ($run) {
    echo "your data added successfully ....!";
} else {
    echo "your data not added successfully ....!";
}
