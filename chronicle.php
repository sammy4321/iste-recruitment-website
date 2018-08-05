<!DOCTYPE html>
<html>
<head>
	<title>Chronicle</title>
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

$sql = "SELECT name, rollno, callno ,whatsapp,email,dat,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10 FROM chronicle WHERE email = '".$email."'";
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
    $q8 = $row["q8"];
    $q9 = $row["q9"];
    $q10 = $row["q10"];
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
1. Why do you want to join ISTE Chronicle?
<br>
<br>
Ans :  <?php echo $q1; ?>
<br>
<br>
2. What are your specific areas of interest within Chronicle?
<br>
<br>
Ans : <?php echo $q2; ?>
<br>
<br>
3. Many items/creatures in the fictional worlds exist only in the pages that contain them. We want you to sell the following items/creatures to humans in the regular world with the help of a tagline/slogan. Example: Smaug, the dragon from The Hobbit - Your neighbourhood barbecue just got a whole lot better! 

<br>a) A lightsaber from Star Wars 
<br>b) The Veritaserum from Harry Potter 
<br>c) A direwolf from Game of Thrones, 
<br>d) The Eye of Sauron from The Lord of the Rings
<br>
<br>
Ans : <?php echo $q3; ?>
<br>
<br>
4. What would the title of your autobiography be and why?
<br>
<br>
Ans : <?php echo $q4; ?>
<br>
<br>
5. Using all of the following words, make up a short story of 50-75 words: feast, fire, modify, squash, robbed, forgotten, under-stated.
<br>
<br>
Ans : <?php echo $q5; ?>
<br>
<br>
6. "Friends, Romans, countrymen, lend me your ears." is the opening statement to Mark Anthony’s phenomenal speech over Caesar’s dead body. He turned the angry mob against his friends’ murderers with mere words. Like Antony, draft a passionate argument, making a case for your favourite book. (a short para with 75-100 words)
<br>
<br>
Ans : <?php echo $q6; ?>
<br>
<br>
7. ‘Halfway happy’ is a phrase used in the show Stranger Things by a police chief named Hopper and a girl named El. They use it in place of the word ‘compromise’. Come up with a (as of yet) non-existent word that can be used in place of ‘bittersweet’.
<br>
<br>
Ans : <?php echo $q7; ?>
<br>
<br>
8. If you could make your own Report Card, in what imaginary subjects would you get an A? Come up with at least five. As an example, part of ours might read:
     
<br>Drinking lots of coffee: A
<br>Reading news on the internet: A
<br>Making keynote slideshows: A

<br>What would go on your imaginary Report Card?

<br>
<br>
Ans : <?php echo $q8; ?>
<br>
<br>
9.  Fill in the speech bubbles for an interesting comic sequence.
<br>
<br>
Ans : <?php echo $q9; ?>
<br>
<br>
10. Complete the Meme (think funny :P)
<br>
<br>
Ans : <?php echo $q10; ?>
<br>
<br>

<form  method = "POST" action = "<?php echo 'chron_save.php?'.$name.'?'.$rollno.'?'.$callno.'?'.$email    ?>">
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
      <input type="text" class="form-control" id="usr" name = "interview">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <br><br><br><br>


    
  </form>

</div>
</body>
</html>