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
                <h1>Add-subject</h1>
            </div>
            <form action="" method="post" id="subject-form">
               <div class="row">
                <div class="col-4">
                  <select class="form-select form-control" name="course_name" aria-label="Default select example">
                    <option selected> Select course</option>
                    <?php 
                      include 'controls/config.php';
                      $sql = "SELECT * FROM `course`";
                      $result = mysqli_query($con,$sql);

                      if (mysqli_num_rows($result) > 0) {
                          while($data = mysqli_fetch_assoc($result)){
                            ?>
                              <option value="3"><?php echo $data['C_name']; ?></option>
                            <?php
                          }
                      }
                    ?>
                  </select>
                  </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="S_name" name="S_name" placeholder="subject name">
                  </div>
                  <div class="col-4">
                     <button type="submit" class="btn btn-success">Add subject</button>
                  </div>
               </div>
            </form>
          </div>
          <div id="msg">

      
           </div>


              <!-- show student details -->
      <div class="container mt-5 ">
        <div class="text-center mb-5">
            <h2>subject Details</h2>
        </div>
        <table class="table table-hover border-1">
            <thead class="table-dark ">
                <tr>
                  <th scope="col">SR NO</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                include 'controls/config.php';

                $sql = "SELECT * FROM `subject`";
                $run = mysqli_query($con,$sql);

                if (mysqli_num_rows($run) > 0) {
                  while( $data = mysqli_fetch_assoc($run)){
                    ?>
                    <tr>
                  <th scope="row">1</th>
                  <td><?php echo $data['S_name']?></td>
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
        $("#subject-form").submit(function(e){
          e.preventDefault();

          var name= $("#S_name").val();
         let fdata = $("#subject-form").serialize()
          console.log(fdata);
          
          $.ajax({
            type: "POST",
                    url: "controls/insert-subject.php",
                    data: $("#subject-form").serialize(),
                    success: function(data) {
                       alert(data);
                    }
            
            });



        });
      </script>
</body>
</html>