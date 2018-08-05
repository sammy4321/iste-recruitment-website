<?php
session_start();
if (isset($_SESSION["username"])) {
  
}
else{
  header("Location: login.php");
}
if($_SESSION["type"] == "normal")
    {
      header("Location: login.php");
    }
#echo "results";
?>
<?php

$servername = "localhost";
$username = "iste";
$password = "iste@nitk";
$dbname = "iste";

$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    
    <ul class="nav navbar-nav navbar-right">
       <li><a href="logout.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>





<div class="container">
<br>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#crypt">Crypt</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#charge">Charge</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#credit">Credit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#chronicle">Chronicle</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#concrete">Concrete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#clutch">Clutch</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#create">Create</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="crypt" class="container tab-pane fade"><br>
    <div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM crypt_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#cryptcollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="cryptcollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers : '.$row['interviewers'].'</div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> 
</div>
      
    </div>
    <div id="charge" class="container tab-pane fade"><br>
    <div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM charge_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#chargecollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="chargecollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers :'.$row["interviewers"].' </div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> </div>
     
    </div>
    <div id="credit" class="container tab-pane fade"><br>

    <div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM credit_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#creditcollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="creditcollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers :'.$row["interviewers"].' </div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> </div>

      
    </div>
    <div id="chronicle" class="container tab-pane fade"><br>
      
<div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM chron_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#chroncollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="chroncollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers :'.$row["interviewers"].' </div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> </div>





    </div>
    <div id="concrete" class="container tab-pane fade"><br>


<div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM conc_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#conccollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="conccollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers :'.$row["interviewers"].' </div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> </div>




      
    </div>
    <div id="clutch" class="container tab-pane fade"><br>


<div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM clut_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#clutcollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="clutcollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers :'.$row["interviewers"].' </div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> </div>


      
    </div>
    <div id="create" class="container tab-pane fade"><br>


    <div class="container">
 
  <div class="panel-group" id="accordion">
  <?php
  $sql = "SELECT name, rollno, number,email,marks,comments,next,interviewers FROM create_save";
  $result = $conn->query($sql);
  $count = 0;
  while($row = $result->fetch_assoc())
  {
    echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
       echo '<h4 class="panel-title">';
         echo  '<a data-toggle="collapse" data-parent="#accordion" href="#createcollapse'.$count.'">'.$row["name"].'<br> Marks : '.$row["marks"].'<br> Next Round : '.$row["next"].'</a>
        </h4>';
      echo '</div>
      <div id="createcollapse'.$count.'" class="panel-collapse collapse">
        <div class="panel-body">Phone Number : '.$row["number"].'<br>Email ID : '.$row["email"].'<br>Comments : '.$row['comments'].' <br>Interviewers :'.$row["interviewers"].' </div>
      </div>
    </div>';
    $count = $count + 1;

 }
    ?>
  </div> </div>
      
    </div>
  </div>
</div>









</body>
</html>
