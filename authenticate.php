
<?php
$db = mysqli_connect('localhost', 'root', '', 'capstone');
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);
echo $email;
  
  
      $password = md5($password);
      echo $password;
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      
  	if (mysqli_num_rows($results)) {
        $_SESSION['email'] = $email;
        
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index-2.php');
  	}else {
  		header('location:index-2.php?error=loginfailed');
  	}
  }


?>