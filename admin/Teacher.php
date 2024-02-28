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
  <title>TEACHER </title>
  <!-- bootsrap css link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- header -->
  <?php include './component/header.php'; ?>
  <!-- dashboard view -->
  <div class="container mt-5">
    <div class="text-center mb-5 ">
      <h1>TEACHER REGISTER</h1>
    </div>
    <form action="" method="post" id="teacher-form">
      <div class="row">
        <div class="col-4">
          <input type="text" class="form-control" name="name" placeholder=" name">
        </div>
        <div class="col-4">
          <input type="text" class="form-control" id="des" name="des" placeholder="designation">
        </div>
        <br><br><br>
        <label for="course">COURSE :</label>
        <div class="row">
          <div class="col-4">
            <select class="form-select form-control" aria-label="Default select example">
              <option selected> Select course</option>
              <option value="1">MCA</option>
              <option value="2">BCA</option>
              <option value="3">BBA</option>
            </select>
          </div>
          <label for="course">SUBJECT:</label>
          <div class="row">
            <div class="col-4">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected> Select subject</option>
                <option value="1">OS</option>
                <option value="2">ASP</option>
                <option value="3">UNIX</option>
              </select>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-success">Register</button>
            </div>
          </div>
    </form>
  </div>
  <div id="msg">
  </div>
  <br><br><br>
  <br><br><br>
  <br><br><br>
  <table class="table table-hover border-1">
    <thead class="table-dark ">
      <tr>

        <th scope="col">SR NO</th>
        <th scope="col">NAME</th>
        <th scope="col">DESIGNATION</th>


      </tr>
    </thead>
    <tbody>
      <?php
      include 'controls/config.php';

      $sql = "SELECT * FROM `teacher`";
      $run = mysqli_query($con, $sql);

      if (mysqli_num_rows($run) > 0) {
        while ($data = mysqli_fetch_assoc($run)) {
      ?>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['design'] ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
  <script src="./js/jquery.min.js"></script>
  <script>
    $("#teacher-form").submit(function(e) {
      e.preventDefault();

      let fdata = $("#teacher-form").serialize()
      console.log(fdata);

      $.ajax({
        type: "POST",
        url: "controls/insert-teacher.php",
        data: $("#teacher-form").serialize(),
        success: function(data) {
          alert(data);
        }

      });
    });
  </script>
</body>

</html>