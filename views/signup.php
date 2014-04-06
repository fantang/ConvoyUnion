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
  <link href="../public/css/fantang.css" rel="stylesheet">
  <title>Sign Up</title>
</head>
<body class="transparent index-background">

  <div>
    <div class="row">
      <div class="col-lg-12">
        <div>
          <div class="jumbotron transparent landing_header">
           <div>
            <h1 class="landing_header_font DKCranyonCrumble" align="center">
             Great Fantang
           </h1>
           </div>
          </div>
		  <div class="container indexFormPane" style="width:300px">
		  	<div align="center">
				<label style="font-size:17px;color:black;">
					Enter information to signup.
				</label>
			</div>
          <form id="signup-form" role="form" name="email-form" method="POST" action="connect-signup.php">
		<div align="center">
          <input type="text" class="form-control" name="signup-name" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Full Name"></input>
		</div>
        <div align="center">
          <input type="text" class="form-control" name="signup-email" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Email"></input>
		</div>
		<br>
        <div align="center">
		  <input type="text" class="form-control" name="signup-user" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Username"></input>
		</div>
		<br>
        <div align="center">
          <input type="password" class="form-control" name="signup-pass" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Password"></input>
		</div>
        <div align="center">
          <input type="password" class="form-control" name="signup-cpass" style="width:250px;margin-bottom:4%;height:50px;background-color:#FFF8DC;" placeholder="Retype password"></input>
        </div>
        <div align="center">
            <button style="color:black;font-size:18px;width:250px;height:50px;" class="btn-md btn-info green_sea_back" type="submit" name="signup-submit" value="Submit">
             <span class="glyphicon glyphicon-log-in" style="color:white;"></span>
             Submit
            </button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
              <script src="https://code.jquery.com/jquery.js"></script>
              <!-- Include all compiled plugins (blelow), or include individual files as needed -->
              <script src="../public/js/bootstrap.min.js"></script>
            </body>
            </html>