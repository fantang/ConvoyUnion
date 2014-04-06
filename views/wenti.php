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
         <div class="container jiaoyiFormPane" style="width:300px">
			 <div align="center">
				<label style="font-size:17px;color:black;">
	 				Frequently Asked Questions
	 			</label>
	 		 </div>
			 <div class="panel-group" id="accordion">
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			          1. Who is the most mighty?
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse">
			      <div class="panel-body">
					  Li, Si is the most mighty.
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			          2. What is the most mighty's name?
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse">
			      <div class="panel-body">
					  Li, Si is the most mighty's name.
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
			          3. What name is possessed by the most mighty? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse">
			      <div class="panel-body">
					  "Li, Si", a name, is possessed by the most mighty.
			      </div>
			    </div>
			  </div>
			</div>
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