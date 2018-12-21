

<?php
session_start();



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'capstone');

if (isset($_POST['submit'])) {
  // receive all input values from the form

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cpass']);
  $firstname = mysqli_real_escape_string($db,$_POST['fname']);
  $lastname = mysqli_real_escape_string($db,$_POST['lname']);
  $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $bio  = mysqli_real_escape_string($db,$_POST['bio']);
  $topic = mysqli_real_escape_string($db,$_POST['topic']);

  
  // by adding (array_push()) corresponding error unto $errors array
/*
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($bio)) { array_push($errors, "bio is required"); }
  if (empty($topic)) { array_push($errors, "topic is required"); }

 */
  $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['email'] === $email) {
    /*  array_push($errors, "email already exists");*/
    }
  }

  // Finally, register user if there are no errors in the form
  
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `users` ( `email`, `password`,`firstname`,`lastname`,`phone`,`bio`,`topic`) 
  			  VALUES( '$email', '$password','$firstname','$lastname','$phone','$bio','$topic')";
  	mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['topic'] = $topic;
  	$_SESSION['success'] = "You are now logged in";
 
header("Location:index-2.php");
}

// ... 