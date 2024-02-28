<?php  
include 'config.php';

 $st_name = $_POST['st-name'];
 $st_age = $_POST['st-age'];
 $st_email = $_POST['st-email'];
 $st_course  = $_POST['course-name'];
 $st_subject  = $_POST['course-subject-name'];
 $st_address  = $_POST['st-address'];

$sql = "INSERT INTO `student`(`std_name`, `std_age`, `std_email`, `std_course`, `std_subject`, `std_address`) VALUES ('$st_name','$st_age','$st_email','$st_course','$st_subject','$st_address')";
$run = mysqli_query($con,$sql);

if ($run) {
    echo "your data added successfully ....!";
}else {
    echo "your data not added successfully ....!";
}

?>
