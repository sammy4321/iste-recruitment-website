<?php
session_start();
if (isset($_SESSION["username"])) {
  
}
else{
  header("Location: login.php");
}

?>
<?php

$servername = "localhost";
$username = "iste";
$password = "iste@nitk";
$dbname = "iste";

$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recruitment Portal</title>
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
    <?php
    if($_SESSION["type"] == "normal")
    {
      echo "<li><a href='' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-user'></span> Results</a></li>";
    }
    else{
      echo "<li><a href='results.php' ><span class='glyphicon glyphicon-user'></span> Results</a></li>";
    }
    ?>
    
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">From Admin</h4>
        </div>
        <div class="modal-body">
          <p>Access Denied.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<div class="container">
<h1 style="text-align: center;">ISTE Recruitment Portal</h1>
<div class="input-group">

    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
    <input id="search_name" type="text" class="form-control" name="email" placeholder="Name" title="Type in a name" onkeyup="searchFunction()">
</div>
</div>


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
      <table class="table" id="search_table_1">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM crypt";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='crypt.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
    <div id="charge" class="container tab-pane fade"><br>
      <table class="table" id="search_table_2">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM charge";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='charge.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
    <div id="credit" class="container tab-pane fade"><br>
      <table class="table" id="search_table_3">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM credit";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='credit.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
    <div id="chronicle" class="container tab-pane fade"><br>
      <table class="table" id="search_table_4">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM chronicle";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='chronicle.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
    <div id="concrete" class="container tab-pane fade"><br>
      <table class="table" id="search_table_5">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM concrete";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='concrete.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
    <div id="clutch" class="container tab-pane fade"><br>
      <table class="table" id="search_table_6">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM clutch";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='clutch.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
    <div id="create" class="container tab-pane fade"><br>
      <table class="table" id="search_table_7">
    <thead>
      <tr>
        <th>Name</th><th>Roll No</th><th>Email ID</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT name, rollno, email FROM create_isg";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {echo "<tr>";echo "<td><a href='create.php?".$row["email"]."'>".$row["name"]."</a></td><td>".$row["rollno"]."</td><td>".$row['email']."</td>";echo "</tr>";}
 ?>  
    </tbody>
  </table>
    </div>
  </div>
</div>


<script>
function searchFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_name");
  filter = input.value.toUpperCase();
  table = document.getElementById("search_table_1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  table = document.getElementById("search_table_2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  table = document.getElementById("search_table_3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  table = document.getElementById("search_table_4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  table = document.getElementById("search_table_5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  table = document.getElementById("search_table_6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  table = document.getElementById("search_table_7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>




</body>
</html>
<!-- ueYElg HhFYIlhhbe -->