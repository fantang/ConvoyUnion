<!doctype html>

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../public/css/fantang.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
  <link href="../public/css/styles.css" rel="stylesheet">
</head>

<body class="transparent index-background" style>
<div class="row" align="right">
  <form method="POST" action="index.php">
    <input type="submit" value="Logout">
  </form>
</div>

<h1 class="landing_header_font DKCranyonCrumble" align="center" style="color:black;">
	Great Fantang 
</h1>

<div class="row">
 <div class="col-xs-6 col-md-6">
  <div class="thumbnail">
    <a href="shangjia.php">
      <img src="../public/images/shangjia.png">
    </a>
  </div>
 </div>
 <div class="col-xs-6 col-md-6">
  <div class="thumbnail">
    <a href="chongqian.html">
      <img src="../public/images/chongqian.png">
    </a>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-xs-6 col-md-6">
  <div class="thumbnail">
    <a href="jiaoyi.php">
      <img src="../public/images/jiaoyi.png">
    </a>
  </div>
 </div>
 <div class="col-xs-6 col-md-6">
  <div class="thumbnail">
    <a href="lishi.html">
      <img src="../public/images/lishi.png">
    </a>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-xs-6 col-md-6">
  <div class="thumbnail">
    <a href="guanyu.html">
      <img src="../public/images/guanyu.png">
    </a>
  </div>
 </div>
 <div class="col-xs-6 col-md-6">
  <div class="thumbnail">
    <a href="wenti.html">
      <img src="../public/images/wenti.png">
    </a>
  </div>
 </div>
</div>
</body>
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (blelow), or include individual files as needed -->
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/jquery-2.0.3.js"></script>
</html>








<!--
圆圈效果代码
<div class="container">
	<div class="col-lg-12">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="container moments center-block blurr">
            	<h1 class="landing_header_font DKCranyonCrumble" align="center" style="color:black;">
					Great Fantang 
				</h1>
                <div class="row" align="center">
                    <a href="shangjia.html">
                      <img class="img-circle round" src="../public/images/shangjia.png">
                    </a>
                </div>
                <div class="row" align="center">
                	<label style="color:grey;font-size:20px;">Discountable Places</label>
                </div>
                <div class="row" align="center">
                    <a href="zhanghu.html">
                      <img class="img-circle round" src="../public/images/zhanghu.png">
                    </a>
                 </div>
                 <div class="row" align="center">
                	<label style="color:grey;font-size:20px">My Account</label>
                </div>
		    </div>
         </div>
     </div>
</div>
-->
