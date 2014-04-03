<!DOCTYPE html>

<?php
session_start();
session_destroy();
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../public/css/fantang.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
  <link href="../public/css/styles.css" rel="stylesheet">
</head>
<body class="transparent index-background">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
          <div class="jumbotron transparent landing_header">
           <div>
            <h1 class="landing_header_font DKCranyonCrumble" align="center">
             Great Fantang 
           </h1>
         </div>
         <div class="container text-center">
          <form method="POST" action="connect-login.php">
            <div>
             <label style="color:black;" for="usrName">Username:</label>
             <input type="text" class="form-control" name="index-user"></input>
           </div>
           <div>
             <label style="color:black;" for="usrPassword">Password:</label>
             <input type="password" class="form-control" name="index-pass"></input>
           </div>
           <div>
            <button  class="btn-lg btn-info green_sea_back">
              <span class="glyphicon glyphicon-cutlery"></span>
              <a href="signup.php" style="color:black;">Sign Up</a>
            </button>
            <button  class="btn-lg btn-info green_sea_back">
              <span class="glyphicon glyphicon-cutlery"></span>
              <input class="button" type="submit" name="index-submit" value="Login">
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (blelow), or include individual files as needed -->
<script src="../public/js/bootstrap.min.js"></script>
</html>