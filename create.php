<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
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

$sql = "SELECT name, rollno, callno ,whatsapp,email,dat,q1,q2,q3,q4,q5 FROM create_isg WHERE email = '".$email."'";
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
<br>Email ID : <?php echo $email; ?>
<br>Will you be present on campus on 3rd, 5th and 7th of August?
<?php echo $dat; ?>
<br>
<br>
1. Why do you want to join ISTE Create?
<br>
<br>
Ans : <?php echo $q1; ?>
<br>
<br>
2. What are your specific areas of interest within Create?
<br>
<br>
Ans : <?php echo $q2; ?>
<br>
<br>
3. Go through the ISTE Facebook page and describe, among the posters made during the last academic year,
<br>  i) Which one do you like the most and why?
<br>  ii) Which one do you dislike the most and why? What changes would you suggest?

<br>
<br>
Ans : <?php echo $q3; ?>
<br>
<br>
4. What do you think when you see these?
(Specific to design - font, colors, etc.)
<br> a. Google logo
<br> b. Facebook home page
<br>
<br>
Ans : <?php echo $q4; ?>
<br>
<br>
5. For graphic designing, upload your portfolio. Be creative! (Portfolio is designers’ resume. Please include why you want to apply for this, rate yourself on creativity, on skill(s), your previous work, etc. The upload formats should be jpeg or PDF only. We may request the native file during the interview.)
<br><br>
(and/or)
<br><br>
For video editing, upload a 1 minute video using some basic tools in your software of choice. This need not be restricted to any theme. (Drive Link. We may request the native file during the interview.) 

<br>
<br>
Ans : <?php echo $q5; ?>
<brq<br>


<form method = "POST" action = "<?php echo 'create_save.php?'.$name.'?'.$rollno.'?'.$callno.'?'.$email    ?>">
    <div class="form-group">
      <label for="usr">Marks : </label>
      <input type="text" class="form-control" id="usr" name="marks">
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