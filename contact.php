<?php 
  //1. Create database connection
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_juneau";  
  $dbpass = "coffee1N"; 
  $dbname = "urcscon3_juneau";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = Trim(stripcslashes($_POST["name"]));
$email = Trim(stripcslashes($_POST["email"]));

  //2. Perform database query
  $query = "INSERT INTO students (name, email) VALUES ('$name','$email')";
  $result = mysqli_query($connection, $query); 

  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
  <body>
		 
      Success!
      The student
      <?php echo $_POST["name"]; ?>
     has been successfully added!
 </body>
</html>

<?php
  mysqli_close($connection);
?>