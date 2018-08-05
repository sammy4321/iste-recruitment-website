<?php
session_start();
if (isset($_SESSION["username"])) {
  
}
else{
  header("Location: login.php");
}

#echo $_POST["marks"];
#echo $_POST["comments"];
#echo $_POST["optradio"];
#echo $_POST["interview"];
$arr = explode("?",$_SERVER[REQUEST_URI]);

$name = $arr[1];
$rollno = $arr[2];
$callno = $arr[3];
$email = $arr[4];


$servername = "localhost";
$username = "iste";
$password = "iste@nitk";
$dbname = "iste";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT name, rollno, callno ,whatsapp,email,dat,q1,q2,q3,q4,q5 FROM credit WHERE email = '".$email."'";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc())
  {
    $name = $row["name"];
    $rollno = $row["rollno"];
    $callno = $row["callno"];
    $whatsapp = $row["whatsapp"];
    $email = $row["email"];
    $dat = $row["dat"];
    $q1 = $row["q1"];
    $q2 = $row["q2"];
    $q3 = $row["q3"];
    $q4 = $row["q4"];
    $q5 = $row["q5"];
  }


$sql = "INSERT INTO credit_save (name, rollno, number,email,marks,comments,next,interviewers)
VALUES ('".$name."', '".$rollno."', '".$callno."','".$email."','".$_POST["marks"]."','".$_POST["comments"]."','".$_POST["optradio"]."','".$_POST["interview"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>