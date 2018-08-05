<?php
session_start();
if (isset($_SESSION["username"])) {
  header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="text-align: center;">Recruitment Portal Login</h1><br>
  <form class="form-horizontal" action="check.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username : </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="name">
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password : </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
