<?php


session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Profile</title>
  
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="css/style.css" rel="stylesheet">

    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
  
</head>

<body >
   
  
 
   
      
     <header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index-2.html"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index-2.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li ><a href="topics.php">Topics</a></li>
                        <li ><a href="add-topic.php">Add Topics</a></li>
                             <li class="menu-active"><a href="profile.html">profile</a></li>
                             <li ><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php 
//Get database credentials
$db = mysqli_connect('localhost', 'root', '', 'capstone');
	 
	 if(isset($_SESSION['email'])) { $usermail=$_SESSION['email']; } else { $usermail="";  }
	 
	 $sql="SELECT * FROM users WHERE email='$usermail'";
     $result=mysqli_query($db,$sql);
     $count=mysqli_num_rows($result);
     // If result matched $myusername and $mypassword, table row must be 1 row
     if($count==1){
	 
     while($row = mysqli_fetch_array($result))
     {   
        
	       
	 
?>

<section class="banner-area relative">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h5 class="text-white">
                        
                    </h5>
                    <p><?php echo $row['bio']; ?></p>
                        <!--
                    <div class="link-nav">
                        <span class="box">
                            <a href="index-2.html">Home </a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="courses.html">Courses</a>
                        </span>
                    </div>-->
                </div>
            </div>
        </div>
    
    </section>
       
      
        <div class="page-wrapper">
         
            <div class="container-fluid">
              
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                 
                </div>
      
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <img src="assets/images/users/Chaitanya.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $row['firstname']; ?></h4>
                                   
                                </center>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo $row['firstname']?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="<?php echo $row['email'] ?>" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo $row['phone'] ?>" class="form-control form-control-line">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12">Bio</label>
                                        <div class="col-md-12">
                                                     <textarea name="bio" placeholder="<?php echo $row['bio'] ?>" cols="55" rows="5"></textarea>
                                        </div>
                                    </div>
                            
                                  
                               
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </div>
           
        <?php 


     }
    }
     ?>
           
        </div>
       
    </div>

 <div id="back-top">
        <a title="Go to Top" href="#"></a>
    </div>
    

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
     crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
