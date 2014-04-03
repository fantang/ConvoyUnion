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
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
					<div class="jumbotron transparent landing_header">
						<div>
							<h1 class="landing_header_font DKCranyonCrumble" align="center">
								Use Deductive
							</h1>
						</div>
						<div class="container text-center">

							<form>
								<div>
									<label style="color:black;" for="purchaseLocation">Merchant</label>
								</div>
								<div>
									<select>
										<option value="volvo" font-size: 20px>Spicy City</option>
										<option value="saab">Spicy House</option>
										<option value="opel">Melody KTV</option>
										<option value="audi">Spot KTV</option>
									</select>
								</div>

								<div>
									<label style="color:black;" for="purchaseAmount">Username</label>
									<input type="text" class="form-control"></input>
								</div>

								<div>
									<label style="color:black;" for="purchaseAmount">Password</label>
									<input type="text" class="form-control"></input>
								</div>

								<div>
									<label style="color:black;" for="customerSignture">Merchant Confirmation</label>
								</div>

								<div>
									<select>
										<option value="SELECT">SELECT</option>
										<option value="YES">YES</option>
										<option value="NO">NO</option>
									</select>
								</div>

								<div>
									<label style="color:black;" for="merchantSignature">Amount</label>
									<input type="text" class="form-control"></input>
								</div>

								<div class="w-row">
									<button  class="btn-lg btn-info green_sea_back">
										<span class="glyphicon glyphicon-cutlery"></span>
										<a href="main.html">Submit</a>
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