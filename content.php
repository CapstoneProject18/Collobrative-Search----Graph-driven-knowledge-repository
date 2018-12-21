

<?php
session_start();



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'capstone');
if(isset($_SESSION['email'])) { $usermail=$_SESSION['email']; } else { $usermail="";  }
$email = $_SESSION['email'];
$date=gmdate('d-m-Y H:i:s'); //Returns IST
if (isset($_POST['submit'])) {


  
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $tag = mysqli_real_escape_string($db,$_POST['tag']);
  $name = mysqli_real_escape_string($db,$_POST['name']);


  
  	$query = "INSERT INTO `topic` ( `title`, `content`,`tag`,`user`,`name`,`date`) 
  			  VALUES( '$title', '$content','$tag','$email','$name','$date')";
  	mysqli_query($db, $query);
  
 
header("Location:add-topic.php");
}

// ... 