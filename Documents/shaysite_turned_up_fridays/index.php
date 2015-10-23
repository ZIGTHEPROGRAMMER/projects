<?php require "subscription.php"; ?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TURNED UP! FRIDAYS | coming soon!</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/turnedup.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://djomajor.com/js/main.js"></script>
<script src="http://djomajor.com/js/ajax.js"></script>
<script src="emailcheck.js"></script>

<script>
img1 = new Image();		
img1.src = "../images/party1.jpg";
</script>

</head>

<body>
<div id = "heading" align="center">
<img src="images/turnedup_white.svg" width="35%"/>
</div>
<div class="container-fluid">
 <div id="form_container">
 <div id="form_container">
 <div id="subscribe" align="center"><img src="images/subscribeto.svg"/></div>
 <div id="status" align="center"></div>

 <form name="signup_form" id="signup_form" enctype="multipart/form-data" onsubmit="return false;">
 <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" autofocus required class="form-control" name="firstname" id="firstname" placeholder="First Name" onkeyup="restrict('username')" maxlength="25">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" onkeyup="restrict('username')" maxlength="25">
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" required class="form-control" name="email" id="email" placeholder="Email" onfocus="emptyElement('status')" onblur="checkemail()" onkeyup="restrict('email')" maxlength="25">
  </div>
  <span id="emailstatus"></span>
  <div class="form-group">
    <label for="phonenumber">Phone Number</label>
    <input type="tel" required class="form-control" id="phonenumber" placeholder="000-000-0000">
  </div>
   <div class="form-group">
    <label for="birthday">Birthday</label>
    <input name="birthday" type="date" required class="form-control" id="birthday" placeholder="mm/dd/yyyy">
  </div>
  <button id="submitbtn" onclick="signup()" class="btn btn-default">Submit</button>
</form>
 </div>
</div>
</body>
</html>
