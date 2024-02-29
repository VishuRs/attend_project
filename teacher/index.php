<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/admin-login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Teacher Login</span></div>
      <form id="loginForm">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Email or Phone" name="username">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="password">
        </div>
        <div class="row button">
          <input type="submit" value="login">
        </div>
        <a href="../" style="text-decoration: none; color: blue">Back to main</a>

      </form>
    </div>
  </div>
  <script src="./js/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#loginForm").submit(function(e) {
        e.preventDefault();

        let fdata = $("#loginForm").serialize();

        console.log(fdata);

        $.ajax({
          type: "POST",
          url: "controls/login.php",
          data: fdata,
          success: function(response) {
            alert(response);
            window.location.href = "dashboard.php";
          }
        });

      });
    });
  </script>

</body>

</html>