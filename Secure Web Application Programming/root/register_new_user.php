 <html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h1>Please Register!</h1>

<?php

include "db_connect.php";

?>


<form class="form-horizontal" action="process_new_user.php">
<fieldset>

<!-- Form Name -->
<legend>Register a new User</legend>

<!-- Text Entry -->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>
  <div class="col-md-5">
    <input id="username" name="username" type="text" placeholder="e.g. Ryan Scott" class="form-control input-md" required="">
    <p class="help-block">Enter your username!</p>
  </div>
</div>

<!-- Password Entry -->
<div class="form-group">
  <label class="col-md-4 control-label" for="password1">Password</label>
  <div class="col-md-5">
    <input id="password1" name="password1" type="password" placeholder="" class="form-control input-md" required="">
    <p class="help-block">Enter your password!</p>
  </div>
</div>

<!-- Password Confirmation Entry -->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Confirm Password</label>
  <div class="col-md-5">
    <input id="password2" name="password2" type="password" placeholder="" class="form-control input-md" required="">
    <p class="help-block">Confirm your password!</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Create new User</button>
  </div>
</div>

</fieldset>
</form>


<?php
//include "search_keyword.php";


$mysqli->close();
?>

</body>

</html>