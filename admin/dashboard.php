<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin-dash.css">
    <title>Admin Dashboard Panel</title>
    <style>
      
    </style>
</head>
<body class="bg-body-secondary">
  <?php include 'component/header.php' ?>
  <div class="container mt-5" >
    <h1 class="my-5"> <svg  class="h-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M11.03 2.59a1.501 1.501 0 0 1 1.94 0l7.5 6.363a1.5 1.5 0 0 1 .53 1.144V19.5a1.5 1.5 0 0 1-1.5 1.5h-5.75a.75.75 0 0 1-.75-.75V14h-2v6.25a.75.75 0 0 1-.75.75H4.5A1.5 1.5 0 0 1 3 19.5v-9.403c0-.44.194-.859.53-1.144ZM12 3.734l-7.5 6.363V19.5h5v-6.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v6.25h5v-9.403Z"></path></svg>Dashboard</h1>
  <div class="row row-cols-1 row-cols-md-5 g-4">
  <div class="col">
    <div class="card h-40">
      <div class="card-body">
        <h5 class="card-title text-center">No of students</h5>
        <h4 class="card-text fs-1 text-center">10</h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-danger text-light  h-40">
      <div class="card-body">
        <h5 class="card-title text-center">No of teacher</h5>
        <h4 class="card-text fs-1 text-center">10</h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-success text-light h-40">
      <div class="card-body">
        <h5 class="card-title text-center">No of course</h5>
        <h4 class="card-text fs-1 text-center">10</h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-warning text-light h-40">
      <div class="card-body">
        <h5 class="card-title text-center">No of subject</h5>
        <h4 class="card-text fs-1 text-center">10</h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-40">
      <div class="card-body">
        <h5 class="card-title text-center">No of users</h5>
        <h4 class="card-text fs-1 text-center">10</h4>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="container mt-5 ">
        <div class=" mb-3">
            <h2>Recent Details</h2>
        </div>
        <table class="table table-hover border-1">
            <thead class="table-dark ">
                <tr>
                  <th scope="col">SR No</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                  <th scope="col">phone</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>balakrishna</td>
                  <td>kolla</td>
                  <td>full stack developer</td>
                  <td>7600298709</td>
                </tr>
              </tbody>
          </table>
      </div>
    <script src="js/dashboard.js"></script>
</body>
</html>