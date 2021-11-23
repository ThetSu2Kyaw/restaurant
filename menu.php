<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Candy May Restaurant</title>
	<style>
		body{
  			margin: 0;
  			height: 200vh;
		}

		#nav{
			height: 100%;
			width: 20%;
			float: left;
			background: red;
		}

		ul{
			list-style: none;
			margin: 0;
			padding: 0;
		}  

		ul li{
			display: block;
			width: 100%;
			border: 1px solid black;
			border-top: 0 none;
			height: 100px;
			line-height: 100px;
			text-align: center;
			background: red;
		}

		ul a{
			text-decoration: none;
			color: #000;
		}

		ul li:hover{
			background: darkred;
			color: #fff;
		}

		ul li:hover a{
			color: #fff;
		}

		#wrap{
			width: 80%;
			float: left;
		}

		.row{
			height:300px;
			width: 80%;
			margin:20px auto;
		}

		.inner{
			width:95%; 
			border:2px solid #ccc;
			height:280px;
			box-shadow: 5px 5px 5px #ddd;
			border-radius: 4px;
		}

		.inner h3{
			font-weight: normal;
			padding: 10px;
			margin-bottom: 15px;
		}

		.fa-ellipsis-v{
			float: right;
			font-size: 16px; 
			margin-top : 10px;
		}

		.inner p{
			font-size: 16px;
		}

		.order{
			width: 80%;
			font-size: 18px;
			border: 1px solid #ccc;
			background: red;
			color: white;
			height: 30px;
			display: block;
			text-align: center;
			text-decoration: none;
			margin: 10px auto;
			border-radius: 10px;
		}

		.order:hover{
			color: darkred;
		}
	</style>
</head>
<body>
	<div id="nav">
	<ul>
	  <li>
	    <a href="#">Category 1</a>
	  </li>
	  <li>
	    <a href="#">Category 2</a>
	  </li>
	  <li>
	    <a href="#">Category 3</a>
	  </li>
	  <li>
	    <a href="#">Category 4</a>
	  </li>
	</ul>
	</div>
	<div id="wrap">
		<h1 class="h2 text-center mt-3 mb-5">Foods Zone!</h1>
		<div class="row" style="">
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="inner2" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4" >
			<div id="inner3" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
	</div>
	<div class="row" style="">
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="inner2" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4" >
			<div id="inner3" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
	</div>
	<div class="row" style="">
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="inner2" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4" >
			<div id="inner3" class="inner">
				<img src="images/about.jpg" height="30%" width="100%">
				<h3 class="h5">Dosa<i class="fa fa-ellipsis-v"></i></h3>
				<p class="text-center" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
	</div>
	</div>
</body>
</html>