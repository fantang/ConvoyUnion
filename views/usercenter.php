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

<body class="transparent index-background">

  <div class="row" align="right">
    <form method="POST" action="usercenter.php">
      <input type="submit" value="Back">
    </form>
  </div>
  
  <div class="row">
    <h1 class="landing_header_font DKCranyonCrumble" align="center" style="color:black;">
     Great Fantang
   </h1>
 </div>


 <div class="container shangjiaButtonPane" style="width:350px" align="center">
 	<div align="center">
		<label style="font-size:17px;color:black;">
			User Center
		</label>
	</div>
     <div class="row shangjiaRow">
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/shangjia.png" style="width:100px;"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;">Merchants</button>
       </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/chongqian.png" style="width:100px;"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;">Deposit</button>
       </div>
      </div>
     </div>
     
     <div class="row shangjiaRow">
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class=" shangjiaRoundButton" src="../public/images/jiaoyi.png" style="width:100px;"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;">Transaction</button>
       </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class=" shangjiaRoundButton" src="../public/images/lishi.png" style="width:100px;"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;">History</button>
       </div>
      </div>
     </div>

     <div class="row shangjiaRow">
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div class="shangjiaLeftDiv">
        <a><img class=" shangjiaRoundButton" src="../public/images/guanyu.png" style="width:100px;"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;">About Us</button>
       </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div class="shangjiaRightDiv">
        <a><img class=" shangjiaRoundButton" src="../public/images/wenti.png" style="width:100px;"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;">Questions</button>
       </div>
      </div>
     </div><!-- item active tag -->
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
