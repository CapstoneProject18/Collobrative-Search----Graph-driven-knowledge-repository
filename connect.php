<?php
$conn = mysqli_connect('localhost','root','');
if(!$conn){
    die('could not  connect to database'.mysqli_error());
}
mysqli_select_db($conn,'capstone');
?>