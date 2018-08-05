<?php
session_start();
if (isset($_SESSION["username"])) {
  header("Location: main.php");
}

$servername = "localhost";
$username = "iste";
$password = "iste@nitk";
$dbname = "localhost";

$check == 0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user, pass, type FROM username_password";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "username: " . $row["username"]. " password: " . $row["password"]. " type: " . $row["type"]. "<br>";
        if((strcmp($row["username"] == $_POST["name"])==0)&(strcmp($row["password"],$_POST["pwd"])==0))
        {
        	echo "Validated";
        	session_start();
        	$_SESSION["username"] = $row["username"];
        	$_SESSION["type"] = $row["type"];
        	#$check == 1;
        	header("Location: main.php");
        	exit();
        }
    }
} else {
    
}
echo "Username or Password Does'nt Exist<br>Go back and try again<br>";

$conn->close();


?>