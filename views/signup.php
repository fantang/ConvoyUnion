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
  <title>Sign Up</title>
</head>
<body>
  <div>
    <form id="signup-form" role="form" name="email-form" method="POST" action="connect-signup.php">

      <div class="w-container">
        <h4 align="left">Full Name:</h1>
        </div>
        <input type="text" class="form-control" name="signup-name"></input>

        <div class="w-container">
          <h4 align="left">Email:</h1>
          </div>
          <input type="text" class="form-control" name="signup-email"></input>

          <div class="w-container">
            <h4 align="left">User Name:</h1>
            </div>
            <input type="text" class="form-control" name="signup-user"></input>

            <div class="w-container">
              <h4 align="left">Password:</h1>
              </div>
              <input type="text" class="form-control" name="signup-pass"></input>

              <div class="w-container">
                <h4 align="left">Retype Password:</h1>
                </div>
                <input type="password" class="form-control" name="signup-cpass"></input>


                <div class="w-row">
                  <a href="index.php" class="myButton">Back</a>
                  <!--<div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a class="button" href="/html/main.html">Submit</a>-->
                  <input class="button" type="submit" name="signup-submit" value="Submit">
                </div>
              </form>

              <script src="https://code.jquery.com/jquery.js"></script>
              <!-- Include all compiled plugins (blelow), or include individual files as needed -->
              <script src="../public/js/bootstrap.min.js"></script>
            </body>
            </html>