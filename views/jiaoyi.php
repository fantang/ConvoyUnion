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
			<div class="col-lg-4">
				<div>
          <div class="jumbotron transparent landing_header">
           <div>
            <h1 class="landing_header_font DKCranyonCrumble" align="center">
             Great Fantang 
           </h1>
           </div>
          </div>
						<div class="container jiaoyiFormPane" style="width:300px">
								<div align="center">
									<label style="font-size:17px;color:black;">
										Enter transaction information
									</label>
								</div>
							<form align="center">
								<div align="center">
									<input type="text" class="form-control" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="User Name"></input>
								</div>

								<div align="center">
									<input type="password" class="form-control" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" placeholder="Password"></input>
								</div>
								<br>
								<div align="center">
									<select align="center" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;"class="form-control">
										<option value="lisi">Merchant Name</option>
										<option value="volvo">Spicy City</option>
										<option value="saab">Spicy House</option>
										<option value="opel">Melody KTV</option>
										<option value="audi">Spot KTV</option>
									</select>
								</div>

								<div align="center">
									<select align="center" style="width:250px;margin-bottom:2%;height:50px;background-color:#FFF8DC;" class="form-control">
										<option value="SELECT">Merchant Confirmation</option>
										<option value="YES">YES</option>
										<option value="NO">NO</option>
									</select>
								</div>
								<br>
								<div align="center">
									<input type="text" class="form-control" style="width:250px;margin-bottom:4%;height:50px;background-color:#FFF8DC;" placeholder="Transaction Amount ($)"></input>
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
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (blelow), or include individual files as needed -->
<script src="../public/js/bootstrap.min.js"></script>
</html>