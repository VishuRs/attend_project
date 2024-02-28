<?php
include 'controls/config.php';

session_start();
if (!isset($_SESSION['uname'])) {
  header("location: admin-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login - Attendance </title>
    <!-- bootsrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-body-secondary">
    <!-- header -->
    <?php include 'component/header.php'; ?>
      <!-- form  -->

      <div class="container mt-5">
        <div class="text-center mb-5 ">
            <h1>Add-Students</h1>
        </div>
        <form   id="student-form">
        <div class="row">
            <div class="col-4 mb-3">
                <label for="exampleFormControlInput1" class="form-label text-success fw-bold "> Student Full name</label>
                <input type="text" class="form-control" id="std_name" name="st-name" placeholder=" Enter Fullname">
              </div>
            <div class="col-4 mb-3">
                <label for="exampleFormControlInput1" class="form-label text-success text-success fw-bold">Student Age</label>
                <input type="text" class="form-control" id="std_rollno" name="st-age" placeholder="Enter Age">
              </div>
            <div class="col-4 mb-3">
                <label for="exampleFormControlInput1" class="form-label text-success text-success fw-bold">Student Email</label>
                <input type="text" class="form-control" id="std_subject" name="st-email" placeholder=" Enter subjectname">
              </div>
              <div class="col-4">
              <label for="exampleFormControlTextarea1" class="form-label  text-success text-success fw-bold">Student course </label>
                  <select class="form-select form-control" name="course-name" aria-label="Default select example">
                    <option selected disabled> Select course</option>
                    <?php 
                      include 'controls/config.php';
                      $sql = "SELECT * FROM `course`";
                      $result = mysqli_query($con,$sql);

                      if (mysqli_num_rows($result) > 0) {
                          while($data = mysqli_fetch_assoc($result)){
                            ?>
                              <option value="<?php echo $data['C_name']; ?>"><?php echo $data['C_name']; ?></option>
                            <?php
                          }
                      }
                    ?>
                  </select>
                  </div>
                  <div class="col-4">
                <label for="exampleFormControlTextarea1" class="form-label  text-success text-success fw-bold">Student course subject</label>
                  <select class="form-select form-control" name="course-subject-name" aria-label="Default select example">
                    <option  selected disabled> Select course</option>
                    <?php 
                      include 'controls/config.php';
                      $sql = "SELECT * FROM `subject`";
                      $result = mysqli_query($con,$sql);

                      if (mysqli_num_rows($result) > 0) {
                          while($data = mysqli_fetch_assoc($result)){
                            ?>
                              <option value="<?php echo $data['S_name']; ?>"><?php echo $data['S_name']; ?></option>
                            <?php
                          }
                      }
                    ?>
                  </select>
                  </div>
              <div class=" col-4 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label  text-success text-success fw-bold">Student Address </label>
                <textarea class="form-control" id="std_add" name="st-address" rows="3"></textarea>
              </div>
              <div class="mb-3">
              <button type="submit" class="btn btn-success">Add Student</button>
              </div>
           </div>
        </form>
      
        <div id="msg">
      </div>
      <!-- show student details -->
      <div class="container">
        <div class="text-center mb-5">
            <h2>Students Details</h2>
        </div>
        <table class="table table-hover border-1">
            <thead class="table-dark ">
                <tr>
                  <th scope="col">Sr.no</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Age</th>
                  <th scope="col">Email</th>
                  <th scope="col">Course</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
              <?php 
                include 'controls/config.php';

                $sql = "SELECT * FROM `student`";
                $run = mysqli_query($con,$sql);

                if (mysqli_num_rows($run) > 0) {
                  $a = 0;
                  while( $data = mysqli_fetch_assoc($run)){
                    ?>
                    <tr>
                  <th scope="row"><?php echo $a+=1; ?></th>
                  <td><?php echo $data['std_name']?></td>
                  <td><?php echo $data['std_age']?></td>
                  <td><?php echo $data['std_email']?></td>
                  <td><?php echo $data['std_course']?></td>
                  <td><?php echo $data['std_subject']?></td>
                  <td><a href="" class="btn btn-danger">delete</a> <a href="" class="btn btn-success">update</a></td>
                </tr>
                <?php
                  }
                }
                ?>
                
              </tbody>
          </table>
      </div>
      <script src="./js/jquery.min.js"></script>
      <script>
              $("#student-form").submit(function(e){
          e.preventDefault();

        //  let fdata = new FormData();
        let fdata = $("#student-form").serialize();

          console.log(fdata);
          
          $.ajax({
            type: "POST",
                    url: "controls/insert-student.php",
                    data: $("#student-form").serialize(),
                    success: function(data) {
                       alert(data);
                    }
            
            });



        });
      </script>
    

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>