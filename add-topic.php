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
    <title>Add-Topic</title>
  
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
                        <li ><a href="interests.php">interests</a></li>
                                <li class="menu-active"><a href="add-topic.php">Add-Topic</a></li>
                             <li ><a href="profile.php">profile</a></li>
                             <li ><a href="logout.php">logout</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'capstone');
	 
	 if(isset($_SESSION['email'])) { $usermail=$_SESSION['email']; } else { $usermail="";  }
	 
	 $sql="SELECT * FROM users WHERE email='$usermail'";
     $result=mysqli_query($db,$sql);
     $count=mysqli_num_rows($result);
     // If result matched $myusername and $mypassword, table row must be 1 row
     if($count==1){
	 
     while($row = mysqli_fetch_array($result))
     {   
       $_SESSION['firstname'] = $row['firstname'];
       $firstname=$_SESSION['firstname'];
	       
	 
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
       
      <?php
     }
    }
      ?>
        <div class="page-wrapper">
         
            <div class="container-fluid">
              
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Topic of Interest</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                            <li class="breadcrumb-item active">Add-Topic</li>
                        </ol>
                    </div>
                 
                </div>
      

                <div class="row">
                  
                    
                    <div class="col-lg-12 col-xlg-9 col-md-9">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" method="post" action="content.php">
                                    <div class="form-group">
                                        <label class="col-md-12">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Add title" class="form-control form-control-line"  name="title" required>
                                        </div>
                                    </div>
                                 
                                    
                                  

                                     <div class="form-group">
                                        <label class="col-md-12">Content</label>
                                        <div class="col-md-12">
                                                     <textarea name="content" placeholder="Add Content" cols="100" rows="5" required></textarea>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12">Tags</label>
                                        <div class="col-md-12">
                                                      <input type="text" name="tag" placeholder="Add Tags" class="form-control form-control-line"   id="myInput" name="myCountry" required>
                                        </div>
                                    </div>
                            <input type="hidden" value="<?php echo $firstname?>" name="name" /> 
                                  
                               
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="submit">Publish</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </div>
           
        
           
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
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
	
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Photography","Music","Arts","Data Science","Artificial Intelligence","Machine Learning","BlockChain","Neural Networks","Cyber Security","Movies","Music","Sports","cricket","FootBall","Web Development","Android","Cryptocurrency" ,"Games","Fitness","Entertainment","Love","Food","Architecture","Lifestyle","Art","Adventure","Health"];
autocomplete(document.getElementById("myInput"), countries);
</script>


</body>

</html>
