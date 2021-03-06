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
	 				Enter information to login.
	 			</label>
	 		 </div>
          <form method="POST" action="connect-login.php">
            <div align="center">
            
             <input type="text" class="form-control" name="index-user" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Username"></input>
           </div>
           <div align="center">
             <input type="password" class="form-control" name="index-pass" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Password"></input>
           </div>
           <div align="center">
            <button style="color:black;font-size:18px;width:250px;height:50px;border-radius:2%" class="btn-md btn-info green_sea_back" type="submit" name="index-submit" value="Login">
              <span class="glyphicon glyphicon-cutlery" style="color:white;"></span>
			  Login
            </button>
           </div>
           <div align="center" style="background-color:#E0EEE0;font-size:14px;margin-top:10px;padding-top:5px;padding-bottom:5px">
           	<h5 style="font-size:14px"><b>New user? </b><a href="signup.php"><b style="color:#CD853F;">Sign up</b></a></h5>
           </div>
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