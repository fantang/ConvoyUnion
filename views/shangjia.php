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
  <link rel="stylesheet" type="text/css" href="../public/css/styles.css">  
  <script>
// Load this when the DOM is ready
$(function(){
  // You used .myCarousel here. 
  // That's the class selector not the id selector,
  // which is #myCarousel
  $('#myCarousel').carousel();
});
</script>
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
			Discountable Merchants
		</label>
	</div>
     <div class="row shangjiaRow">
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/rawLogo.png" style="width:100px;" data-toggle="modal" data-target="#MHPModal"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" data-toggle="modal" data-target="#MHPModal" style="width:100px;">Little Sheep</button>
       </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/rawLogo.png" style="width:100px;" data-toggle="modal" data-target="#CCIIModal"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;" data-toggle="modal" data-target="#CCIIModal">China Chef II</button>
       </div>
      </div>
     </div>

     <div class="row shangjiaRow">
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/rawLogo.png" style="width:100px;" data-toggle="modal" data-target="#SpotModal"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;" data-toggle="modal" data-target="#SpotModal">Spot KTV</button>
       </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div class="shangjiaRightDiv">
        <a><img class="shangjiaRoundButton" src="../public/images/rawLogo.png" style="width:100px;" data-toggle="modal" data-target="#FAGModal"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;" data-toggle="modal" data-target="#FAGModal">FuAn Garden</button>
       </div>
      </div>
     </div>

     <div class="row shangjiaRow">
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/rawLogo.png" style="width:100px;" data-toggle="modal" data-target="#EmeModal"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;" data-toggle="modal" data-target="#EmeModal">Emerald</button>
       </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
       <div>
        <a><img class="shangjiaRoundButton" src="../public/images/rawLogo.png" style="width:100px;" data-toggle="modal" data-target="#JasModal"></a>
       </div>
       <div>
        <button class="btn btn-info shangjiaPrimaryButton" style="width:100px;" data-toggle="modal" data-target="#JasModal">Jasmine</button>
       </div>
      </div>
     </div><!-- item active tag -->

   </div><!-- carousel-inner tag -->
 </div><! myCarousel carousel slide tag -->





<div class="modal fade" id="MHPModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Mongolian Hot Pot/小肥羊 - info</h4>
      </div>
      <div class="modal-body">
        4718 Clairemont Mesa Blvd<br>
        San Diego, CA 92117<br>
        (858) 274-2040<br>
        <a href="http://littlesheephotpot.com">littlesheephotpot.com</a><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CCIIModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">China Chef II/天厨 - info</h4>
      </div>
      <div class="modal-body">
        9225 Mira Mesa Blvd<br>
        Ste 110<br>
        San Diego, CA 92126<br>
        (858) 536-1886<br>	
        <a href="http://www.chinachef2sandiego.com/home-page/">
         http://www.chinachef2sandiego.com/home-page/
       </a><br>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
   </div>
 </div>
</div>


<div class="modal fade" id="SpotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Spot KTV&Restaurant/星点 - info</h4>
      </div>
      <div class="modal-body">
        7327 Clairemont Mesa Blvd<br>
        San Diego, CA 92111<br>
        (858) 268-1588<br>
        <a href="http://spotktv.com">
         http://spotktv.com
       </a><br>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="FAGModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">FuAn Garden/福香楼 - info</h4>
      </div>
      <div class="modal-body">
        4768 Convoy St<br>
        San Diego, CA 92111<br>
        (858) 650-6999<br>
        <a href="http://fuangarden.com">
         fuangarden.com
       </a><br>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="EmeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Emerald/福临门 - info</h4>
      </div>
      <div class="modal-body">
        3709 Convoy St<br>
        Ste 101<br>
        San Diego, CA 92111<br>
        (858) 565-6888<br>
        <a href="http://emeraldrestaurant.com">
         emeraldrestaurant.com
       </a><br>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="JasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Jasmine/新乐宫 - info</h4>
      </div>
      <div class="modal-body">
        4609 Convoy St<br>
        Ste A<br>
        San Diego, CA 92111<br>
        (858) 268-0888<br>
        <a href="http://jasmineseafood.com">
         jasmineseafood.com
       </a><br>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>




<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (blelow), or include individual files as needed -->
<script src="../public/js/bootstrap.min.js"></script>
</body>
</html>

