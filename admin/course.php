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
  <title>Document</title>
  <!-- bootsrap css link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-body-secondary">
  <!-- header -->
  <?php include 'component/header.php'; ?>


  <!-- form  -->

  <div class="container mt-5">
    <div class="text-center mb-5 ">
      <h1>Add-Course</h1>
    </div>
    <form action="" method="post" id="course-form">
      <div class="row">
        <div class="col-4">
          <input type="text" class="form-control" id="c-name" name="c_name" placeholder="course name">
        </div>
        <div class="col-4">
          <input type="text" class="form-control" id="sem-no" name="sem_no" placeholder="semeter">
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-success">Add course</button>
        </div>
      </div>
    </form>
  </div>

  <div id="msg">

  </div>

  <!-- show student details -->
  <div class="container mt-5 ">
    <div class="text-center mb-5">
      <h2>course Details</h2>
    </div>
    <table class="table table-hover border-1">
      <thead class="table-dark ">
        <tr>
          <th scope="col">SR No</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'controls/config.php';

        $sql = "SELECT * FROM `course` ";
        $run = mysqli_query($con, $sql);

        if (mysqli_num_rows($run) > 0) {
          $a = 0;
          while ($data = mysqli_fetch_assoc($run)) {
        ?>
            <tr>
              <th scope="row"><?php echo $a += 1; ?></th>
              <td><?php echo $data['C_name'] ?></td>
              <td><?php echo $data['Sem_no'] ?></td>
              <td><a href="" class="btn btn-danger">delete</a></td>
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
    $("#course-form").submit(function(e) {
      e.preventDefault();

      var name = $("#c-name").val();
      var password = $("#sem-no").val();
      let fdata = $("#course-form").serialize()
      console.log(fdata);

      $.ajax({
        type: "POST",
        url: "controls/insert-course.php",
        data: $("#course-form").serialize(),
        success: function(data) {
          alert(data);
        }

      });



    });
  </script>
</body>

</html>