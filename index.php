<!DOCTYPE html>
<html l>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="img/fav.png">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">
	
	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>Home Page</title>

	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	
	<link rel="stylesheet" href="../../../../cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<style>
	.navbarbtn
{
 font-size: 12px;
 font-weight:bold;
 font-family: sans-serif;
 letter-spacing: 1px;
 text-align: center; 
 border-radius:1px;
 color: white;
 border:2px solid white;
}
.navbarbtn:hover
{
  background-color: #2ecc71;
}


.login-board
{
    box-shadow: 8px 4px 8px rgba(0,0,0,0.1),0 6px 16px 0 rgba(0,0,0,0.1);
    border-top: 3px solid #68a3d3;
    width:100%;
    
   }
.registerbtn {
  display: inline-block;
  border-radius:28px;
  background-color:#2ecc71;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size:18px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.registerbtn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color: white;
}
.registerbtn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
 
}
.registerbtn:hover span {
  padding-right: 25px;
 
}
.registerbtn:hover span:after {
  opacity: 1;
  right: 0;
  
}
.loginbtn
{
  background-color: #2ecc71;
  width: 120px;
  padding:10px;
  color: white; 
  text-align: center;
  border: none;
  display: inline-block;
  font-size:15px;
  cursor: pointer;
  letter-spacing: 1.5px;
}
.loginbtn:hover
{
  color: white;
  background-color: #2c3e50;
}





.row.vertical-divider {
  overflow: hidden;
}
.row.vertical-divider > div[class^="col-"] {
  
  border-right: 2px solid #2c3e50;
}
.row.vertical-divider div[class^="col-"]:first-child {
  border-left: none;
}
.row.vertical-divider div[class^="col-"]:last-child {
  border-right: none;
}
@media (max-width: 991px)
{
   .row.vertical-divider > div[class^="col-"] 
   {
     border:0;
     }
}

#msform input, #msform textarea  {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
</head>

<body>

	
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index-2.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						
						<li>
							  
       
        <a  type="button" class="btn navbarbtn" data-toggle="modal" data-target="#myModal" >
     Login</a>
      
						</li>
						
						
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">A Place to share knowledge and better understand  the world</h1>
					<p class="text-white">
						In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space
						telescope.
					</p>

					<div class="input-wrap">
						<form action="search.php" class="form-box d-flex justify-content-between autocomplete" autocomplete="off">
							<input type="text" placeholder="Search here" class="form-control"  id="myInput" name="myCountry">
							<button type="submit" class="btn search-btn" name="submit">Search</button>
						</form>
					</div>
					<h4 class="text-white">Most Popular</h4>

						<div class="courses pt-20">
						<a href="search.php?myCountry=Photography&submit=" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Photography
						</a>
						<a href="search.php?myCountry=Music&submit=" data-wow-duration="1s" data-wow-delay=".6s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Music</a>
						<a href="search.php?myCountry=Movies&submit=" data-wow-duration="1s" data-wow-delay=".9s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Movies</a>
						<a href="search.php?myCountry=Coding&submit=" data-wow-duration="1s" data-wow-delay="1.2s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Coding
							
						</a>
						<a href="search.php?myCountry=Machine Learning&submit=" data-wow-duration="1s" data-wow-delay="1.5s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Machine Learning</a>
						<a href="search.php?myCountry=Data Science&submit=" data-wow-duration="1s" data-wow-delay="1.8s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Data
							Science
						</a>
						<a href="search.php?myCountry=Cryptocurrency&submit=" data-wow-duration="1s" data-wow-delay="2.1s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Cryptocurrency</a>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img">
			<img src="assets/images/rocket.png" alt="">
		</div>
	</section>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
    <div class="container-fluid">
      
   <div class="row">
     <div class="col-md-12 col-sm-7 col-sm-offset-3 col-xs-12 col-md-offset-3 login-board ">
     <br>
     <div class="row vertical-divider" style="">
           <div class="col-md-6 register-section">
<br><br><br>
           
              <h2 class="h4" style="font-size:16px;font-family: Montserrat, sans-serif;line-height: 1.42857143"> A Place to share knowledge and better understand  the world</h2><br><br><br>
              <a class="btn  registerbtn" href= "register.html"><span>REGISTER</span></a><br><br>
            
             </div>
            
             <div class="col-md-6 login-section">
               <h3>Login Here...</h3><br>
               <form method="post" id="msform" action="authenticate.php">
               <input type="text" name="email" placeholder="Email" required />
    <input type="password" name="pass" placeholder="Password" required />
   
                   <input type ="submit" name="submit" value="Authenticate" />
                    <span class="fgpass"><a href="" >Forgot Your Password</a></span>


               </form>


             </div>
             </div>
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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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