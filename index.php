
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CANDY MAY Restaurant</title>
		<link href="css/index.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
	<h1 style="text-align: center">Candy May Restaurant</h1>
		<div class="container">

				<!-- Navigation -->
			<div class="topnav" >
	
  <a href="index.php"> <i class="fa fa-home">Home</a></i>
  <a href="menu.php" ><i class="fa fa-paw" aria-hidden="true">Menu</a></i>
  <a href="about_us.php" ><i class="fa fa-phone" aria-hidden="true"> About us </a></i>
  <a href="contact_us.php" ><i class="fa fa-phone" aria-hidden="true"> Contact us </a></i>
 
			
			<div class="topnav_right">
	
	<a href="register.php"><i class="fa fa-phone" aria-hidden="true">Register</i></a>
	<a href="login.php"><i class="fa fa-phone" aria-hidden="true">Login</i></a>
		</div>
	</div>

<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/home1.jpg"
  style= "width:100%; height: 500px">
  <img class="mySlides" src="images/home2.jpg"
  style="width:100%; height: 500px">
  <img class="mySlides" src="images/home3.jpg"
  style="width:100%; height: 500px">
   <img class="mySlides" src="images/home4.jpg"
  style="width:100%; height: 500px">
   <img class="mySlides" src="images/home5.jpg"
  style="width:100%; height: 500px">

</section>
</div>

</div>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>
