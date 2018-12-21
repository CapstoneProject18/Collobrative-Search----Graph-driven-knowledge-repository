
<!DOCTYPE html>

<html>
<head>
	<title>Register Page</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">


	
	<style>
	
@import url(https://fonts.googleapis.com/css?family=Montserrat);

* {margin: 0; padding: 0;}

html {
	height: 100%;

	background: 
		linear-gradient(rgba(0,163,207,0.45), rgba(155, 89, 182, 0.6));
}

body {
	font-family: montserrat, arial, verdana;
}

#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	
	position: relative;
}

#msform fieldset:not(:first-of-type) {
	display: none;
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
#msform select
{
	padding: 25px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
	height:25px;

}

#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}

#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}

#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; 
}
#progressbar li:first-child:after {
	
	content: none; 
}

#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}




	</style>
</head>
<body>

<form id="msform" name="myform"  action="server.php" method="POST">
	
	<!--
  <ul id= "progressbar">
    <li class="active">Account Setup</li>
     <li>Personal Details</li>
    <li>Topic of Interest</li>
   
  </ul>-->
  
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
   
    <input type="text" name="email" placeholder="Email" required />
    <input type="password" name="pass" placeholder="Password" required />
	<input type="password" name="cpass" placeholder="Confirm Password" required/>
	<input type="text" name="fname" placeholder="First Name" required/>
    <input type="text" name="lname" placeholder="Last Name" required />
	<input type="text" name="phone" placeholder="Phone" required />
	<textarea name="bio" placeholder="Bio"></textarea>
	<select class="country"  size="1" name="topic">

<option>Technology</option>
<option>Fashion</option>
<option>Photography</option>
<option>Music</option>
<option>Movies</option>
</select>
<input type="submit" name="submit" class="submit action-button" value="Submit" />
  
  </fieldset>
  
</form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <!--
<script>
	
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

</script>

<script type="text/javascript">
$(document).ready(function() {
    $("button").click(function(){
        var countries = [];
        $.each($(".country option:selected"), function(){            
            countries.push($(this).val());
        });
        alert("You have selected the topics - " + countries.join(", "));
    });
});
</script>
<script type = "text/javascript">
	
	   // Form validation code will come here.
	   function validate() {
	   
		  if( document.myForm.email.value == "" ) {
			 alert( "Please provide your name!" );
			 document.myForm.email.focus() ;
			 return false;
		  }
		  if( document.myForm.pass.value == "" ) {
			 alert( "Please provide your Email!" );
			 document.myForm.pass.focus() ;
			 return false;
		  }
		  if( document.myForm.cpass.value == "" ) {
			 alert( "Please provide your Email!" );
			 document.myForm.cpass.focus() ;
			 return false;
		  }
		 
		  return( true );
	   }
	//-->
 </script>
</body>
</html>