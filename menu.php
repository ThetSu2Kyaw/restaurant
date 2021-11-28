<?php
include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;
session_start();
?>
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
		background-image: linear-gradient(180deg, #000, #400a06);
		border: 1px solid #ccc;
	}

	ul{
		list-style: none;
		margin: 0;
		padding: 0;
	}  
	ul li{
		display: block;
		width: 100%;
		border: 1px solid #ccc;
		border-top: 0 none;
		height: 100px;
		line-height: 100px;
		text-align: center;
	}

	ul a{
		text-decoration: none;
		color: #fff;
	}

	ul li:hover{
		background: #4a1612;
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
		position: relative;
		margin-top: 20px;
	}

	.price{
		position: absolute;
		top: 3%;
		left: 6%;
		border-radius: 5px;
		color: yellow;
		font-size: 15px;
		padding: 2px 3px;
	}

	.inner h3{
		font-weight: normal;
		padding: 10px;
		margin-bottom: 15px;
		font-size: 17px;
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
		width: 85%;
		font-size: 18px;
		border: 1px solid #ccc;
		background: #d9534f;
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
	    <a href="get_category.php?id=0">All Categories</a>
	  </li>
		<?php 
		$table = new Table(new MySQL());
		$categories = $table->getAllCategories();
		foreach($categories as $category):
		?>
	  <li>
	    <a href="get_category.php?id=<?= $category->id ?>"><?= $category->name ?></a>
	  </li>
	  	<?php endforeach; ?>
	</ul>
	</div>
	<div id="wrap">
		<h1 class="h2 text-center mt-3 mb-5">Foods Zone!</h1>
		<div class="row">


			<?php 
			$statement = $_SESSION['menu'];
			foreach($statement as $row) :?>
			

			<div class="col-lg-4">
			<div class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger"><?= $row->price ?></span>
				<h3 class="h5 text-center"><?= $row->name ?></h3>
				<a href="add_to_cart.php?id=<?= $row->id?>" class="order">ORDER NOW!</a>
			</div>
			</div>
		<?php endforeach; ?>
		<!-- <div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4" >
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div> -->
	</div>
	<!-- <div class="row" style="">
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4" >
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
	</div>
	<div class="row" style="">
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
		<div class="col-lg-4" >
			<div id="inner1" class="inner">
				<img src="images/menu1.jpg" height="170" width="215" style="padding: 5px 5px;">
				<span class="price bg-danger">1000 Ks</span>
				<h3 class="h5 text-center">Dosa</h3>
				<a href="#" class="order">ORDER NOW!</a>
			</div>
		</div>
	</div> -->
	</div>
</body>
</html>