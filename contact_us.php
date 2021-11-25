<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Candy May Restaurant</title>
	<style>
	body{
		font-family: 'Quicksand', sans-serif;
		position: relative;
	}
	#contact1{
	width: 100%;
	height: 400px;
	background: #fff;
	}

	#lcontact1, #rcontact1{
		float: left;
		width: 50%;
		height: 400px;
		padding: 20px;
		padding-left: 30px;
	}

	#location i, #phone i, #info i{
		color: #6e0f0c;
	}

	button{
		border-radius: 10px;
	}

	#overlap{
		background: #000;
		width: 100%;
		height: 100%;
		opacity: 0.8;
		display: none;
		position: absolute;
		top: 0;
		left: 0;
		z-index: 3;
	}

	#review{
		width: 30%;
		border: 2px solid #ddd;
		border-radius: 20px;
		background: #fff;
		position: absolute;
		top: 45%;
		left: 35%;
		display: none;
		opacity: 1;
		z-index: 5;
	}

	#review form{
		margin: 10px 30px;
	}

	#review_form label{
		display: block;
		color: #000;
		margin-top: 10px;
		margin-bottom: 10px;
	}

	#review_form input, #review_form textarea{
		width: 98%;
		border-radius: 10px;
	}

	.time{
		float: right;
		cursor: pointer;
		font-weight: bold;
	}

	</style>
</head>
<body>
	<div id="image">
		<img src="images/contact.jpg" width="100%" height="400px" style="position: relative;">
		<h1 id="h1about" class="text-center" style="font-weight: normal;top:25%;left:39%;">Get In Touch</h1>
		<div id="cover"></div>
	</div>
	<div id="overlap">
	</div>
	<div id="review" style="background: white;">
		<h1 class="h3 text-dark mt-2 mb-2 pb-2" style="margin-left : 25px;margin-right : 25px;border-bottom: 1px solid #ddd;">Give Review <span class="time text-danger" onclick="hideForm()">&times;</span></h1>
		<form id="review_form" action = "add_review.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" required><br>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" required>
			<br>

			<label for="comment">Comment</label>
			<textarea name="comment" id="comment" required></textarea>
			<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
		</div>

	<div id="contact1">
		<div id="lcontact1">
			<h1 style="padding-left: -15px;font-weight: normal;margin-bottom: 25px;">CANDY MAY RESTAURANT</h1>
		<div id="location"><i class="fa fa-map-marker"></i> <p style="text-indent: 30px;display: inline;">  Candy May Restaurant is located at N0.1,<br>&nbsp;&nbsp; Strand Street, Yangon, Myanmar
			</p>
		</div><br>
		<div id="phone"><i class="fa fa-phone"></i><p style="text-indent : 30px;display : inline;">  (415)915-6815
		</p>
		</div><br>
		<div id="info"><i class="fa fa-comment"></i><p style="text-indent: 30px; display: inline;">  info@candymay.com
		</p>
		</div>
		</div>
		<div id="rcontact1">
			<div class="mapouter"><div class="gmap_canvas"><iframe width="560" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=no.1,%20strand%20street,%20yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:480px;}</style></div></div>
		</div>
	</div>

	<div id="footer">
		<div id="fleft">
		<h2 id="candy" class="h5 text-white">CANDY MAY</h2>
		<p id="pcandy" class="text-white">Candy May Restaurant, N0.1, Strand Street, Yangon, Myanmar
			<br>Check in or Delivery : 8pm - 8pm
			<br>(415)915-6815
			<br>
			<a href="#">candymay.com</a>
		</p>
		</div>
		<div id="fright">
				<a href="https://www.facebook.com" style="color: #fff; padding-right: 30px;"><i class="fa fa-facebook-square fa-lg"></i></a>
				<a href="https://www.instagram.com" style="color: #fff; padding-right: 30px;"><i class="fa fa-instagram fa-lg"></i></a>
				<a href="https://www.twitter.com" style="color: #fff"><i class="fa fa-twitter fa-lg"></i></a><br>
				<p class="mt-3">Give review for us  &nbsp;
				<button style="display:inline;" onclick="showForm()">Post review</button></p>
		</div>
		<div id="last">&copy; 2021 Grand Design by May & Su</div>
	</div>
	<script>
		function showForm(){
			document.getElementById("overlap").style.display = "block";
			document.getElementById("review").style.display = "block";
		}

		function hideForm() {
			document.getElementById("overlap").style.display = "none";
			document.getElementById("review").style.display = "none";
		}
	</script>
</body>
</html>