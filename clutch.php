<!DOCTYPE html>
<html>
<head>
	<title>Clutch</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php
#echo $_SERVER[REQUEST_URI];
$arr = explode("?",$_SERVER[REQUEST_URI]);
$email = $arr[1];

$servername = "localhost";
$username = "iste";
$password = "iste@nitk";
$dbname = "iste";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT name, rollno, callno ,whatsapp,email,dat,q1,q2,q3,q4,q5 FROM clutch WHERE email = '".$email."'";
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

?>
<br>Name : <?php echo $name; ?>
<br>Roll No : <?php echo $rollno; ?>
<br>Contact No. (Call/SMS): <?php echo $callno; ?>
<br>Contact No. (WhatsApp): <?php echo $whatsapp; ?>
<br>Email ID :  <?php echo $email; ?>
<br>Will you be present on campus on 3rd, 5th and 7th of August?
<?php echo $dat; ?>
<br>
<br>
1. Why do you want to join ISTE Clutch?
<br>
<br>
Ans :  <?php echo $q1; ?>
<br>
<br>
2. What are your specific areas of interest within Clutch?
<br>
<br>
Ans : <?php echo $q2; ?>
<br>
<br>
3. Briefly describe the manufacturing steps involved if you wanted to manufacture the McDonald’s ice-cream cone (including the ice-cream) shown in the figure, out of Mild Steel. Note that the ice cream and cone should be separable. Also, for the scope of this question, assume that 3D Printing and CNC machining are not permitted.
<br>
<br>
Ans : <?php echo $q3; ?>
<br>
<br>
4. Why are chain and sprocket drives still in widespread use even though they are one of the least efficient power transmission means? Explain in brief.
<br>
<br>
Ans : <?php echo $q4; ?>
<br>
<br>
5. Why do IC engines have 4, 6, 8 or even 10 cylinders of smaller displacements instead of one single large cylinder of a volume equal to the combined volume?
<br>
<br>
Ans : <?php echo $q5; ?>
<br>
<br>


<form method = "POST" action = "<?php echo 'clut_save.php?'.$name.'?'.$rollno.'?'.$callno.'?'.$email    ?>">
    <div class="form-group">
      <label for="usr">Marks : </label>
      <input type="text" class="form-control" id="usr" name="marks">
    </div>
    <div class="form-group">
  		<label for="comment">Comments : </label><br>
  		<textarea class="form-control" rows="5" id="comment" name = "comments"></textarea>
	</div>
	
	<b>Send to next Round : </b><br>
	<label class="radio-inline">
      <input type="radio" name="optradio" checked value="Yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="No">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Maybe">Maybe
    </label> 
    <br><br>
    <div class="form-group">
      <label for="usr">Interviewers : </label>
      <input type="text" class="form-control" id="usr" name="interview">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <br><br><br><br>


    
  </form>

</div>
</body>
</html>