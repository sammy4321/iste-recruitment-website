<!DOCTYPE html>
<html>
<head>
	<title>Charge</title>
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

$sql = "SELECT name, rollno, callno ,whatsapp,email,dat,q1,q2,q3,q4,q5,q6,q7 FROM charge WHERE email = '".$email."'";
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
    $q6 = $row["q6"];
    $q7 = $row["q7"];
  }

?>
<br>Name : <?php echo $name; ?>
<br>Roll No : <?php echo $rollno; ?>
<br>Contact No. (Call/SMS): <?php echo $callno; ?>
<br>Contact No. (WhatsApp): <?php echo $whatsapp; ?>
<br>Email ID : <?php echo $email; ?>
<br>Will you be present on campus on 3rd, 5th and 7th of August?
<?php echo $dat; ?>
<br>
<br>
1. Why do you want to join ISTE Charge?
<br>
<br>
Ans : <?php echo $q1; ?>
<br>
<br>
2. What are your specific areas of interest within Charge?
<br>
<br>
Ans : <?php echo $q2; ?>
<br>
<br>
3. In a fight sequence, James Bond kills the villain onboard a moving train. The train breaks down over a gorge and the bridge is about to explode. There are transmission lines below and no other means of escape visible. The transmission lines are carrying 11000V and hang between two poles on either side of the gorge. Bond makes the jump and ends up alive on the mountain on one side of the gorge. How was he able to pull it off?
<br>
Ans : <?php echo $q3; ?>
<br>
<br>
4.  Some of you may have noticed that although your phone is charged to a considerable percentage, if you switch it off and turn it on again after an update, the battery can show up as being close to dead. Why does this happen?
<br>
<br>
Ans : <?php echo $q4; ?>
<br>
<br>
5. Imagine it’s Music Night at the Pavilion. Does the sound quality from the speakers seem to be impacted if the lead singer moves too close to the speakers? Explain why or why not.
<br>
<br>
Ans : <?php echo $q5; ?>
<br>
<br>
6. In an ideal case, for a circuit consisting of a 1kOhm resistor connected to a 1V battery, the current should be 1mA. If you actually build such a circuit however, the current is unlikely to be what you would expect. What are some reasons to explain this other than wire resistances?
<br>
<br>
Ans : <?php echo $q6; ?>
<br>
<br>
7. You are given a circuit which includes a diode. When you test across the diode with a multimeter, it reads a very high resistance. Under what condition or conditions could this happen?
<br>
<br>
Ans : <?php echo $q7; ?>
<br>
<br>

<form method = "POST" action = "<?php echo 'charge_save.php?'.$name.'?'.$rollno.'?'.$callno.'?'.$email    ?>">
    <div class="form-group">
      <label for="usr">Marks : </label>
      <input type="text" class="form-control" id="usr" name = "marks">
    </div>
    <div class="form-group">
  		<label for="comment">Comments : </label><br>
  		<textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
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