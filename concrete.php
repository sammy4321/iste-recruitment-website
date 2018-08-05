<!DOCTYPE html>
<html>
<head>
	<title>Concrete</title>
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

$sql = "SELECT name, rollno, callno ,whatsapp,email,dat,q1,q2,q3,q4,q5,q6,q7 FROM concrete WHERE email = '".$email."'";
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
1. Why do you want to join ISTE Concrete?
<br>
<br>
Ans :  <?php echo $q1; ?>
<br>
<br>
2. What are your specific areas of interest within Concrete?
<br>
<br>
Ans : <?php echo $q2; ?>
<br>
<br>
3. It is estimated that by 2050, two-thirds of the world’s population will be living in cities. In that case, what according to you is the major civil engineering challenge? 
<br>
<br>
Ans : <?php echo $q3; ?>
<br>
<br>
4. “Form follows function” is a well-known principle of 20th century modernist architecture. Give an example of a structure where “Function follows form” and describe the reason for the same. 
<br>
<br>
Ans : <?php echo $q4; ?>
<br>
<br>
5. After the recent floods that happened in Mangalore and other parts of the country, what according to you can be done in the field of civil engineering to prevent or minimize damage caused by the floods? 
<br>
<br>
Ans : <?php echo $q5; ?>
<br>
<br>
6. Concrete is the most widely used construction material in the world. Why is it preferred over steel?
<br>
<br>
Ans : <?php echo $q6; ?>
<br>
<br>
7. The following was written in a recent article: “By 2030, India’s demand for water is estimated to be double the available water supply. This could result in a possible 6 percent loss to India’s GDP.” As a Civil Engineer, suggest some methods to help India recover from the acute water shortage. 
<br>
<br>
Ans : <?php echo $q7; ?>
<br>
<br>

<form method = "POST" action = "<?php echo 'conc_save.php?'.$name.'?'.$rollno.'?'.$callno.'?'.$email    ?>">
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