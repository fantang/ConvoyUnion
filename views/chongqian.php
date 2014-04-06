<!DOCTYPE html>

<?php
session_start();

if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
	header('Location: index.php');
}
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
					<div class="container jiaoyiFormPane" style="width:300px">
						<div align="center">
							<label style="font-size:17px;color:black;">
								Deposit into account
							</label>
						</div>
						<form method="POST" action="connect-chongqian.php">
						<div align="center">
							<input type="text" class="form-control" name="chongqian-user" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Username"></input>
						</div>
						<div align="center">
							<input type="password" class="form-control" name="chongqian-pass" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Password"></input>
						</div>
						<br>
						<div align="center">
							<input type="password" class="form-control" name="chongqian-code" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Prepaid Code"></input>
						</div>
						<div align="center">
							<input type="text" class="form-control" name="chongqian-amount" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Deposit Amount ($)"></input>
						</div>

           				<div align="center">
			   				<button style="color:black;font-size:18px;width:250px;height:50px;border-radius:2%" class="btn-md btn-info green_sea_back" type="submit" name="chongqian-submit" value="Deposit">
			   					<span class="glyphicon glyphicon-check" style="color:white;"></span>
			   						Submit
			   				</button>
			   			</div>
						</form>
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