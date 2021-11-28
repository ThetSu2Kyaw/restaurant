<?php
include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$table = new Table(new MySQL());
$statement = $table->getAllOrders();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Candy May Restaurant</title>
	<style>
		#left{
			margin: 40px;
			width: 45%;
			float: left;
			height: 900px;
		}
		#right{
			margin-left: 0;
			padding-left: 0;
			width: 48.3%;
			height: 900px;
			float: left;
			background: #000;
		}
		#menus{
			list-style: none;
		}
		.name{
			margin-left: 40px;
			font-size: 22px;
			font-weight: bold;
		}
		.qty{
			margin-left: 40px;
			border: 1px solid black;
			padding: 0px 10px;
			border-radius: 20px;
			font-size: 14px;
		}
		.qty a{
			text-decoration: none;
			color: #000;
			font-size: 18px;
		}
		.price{
			margin-left: 40px;
		}
		.del{
			font-size: 26px;
			margin-left: 40px;
			cursor: pointer;
		}
		.del a{
			text-decoration: none;
			color: #000;
		}
	</style>
</head>
<body>
<div id="left">
	<h1 class="h3 mt-3 mb-5">Shopping Cart</h1>
	<ul id="menus">
		<li>
			<img src="images/menu1.jpg" width="100" height="100" style="border-radius: 50px;box-shadow: 5px 5px 6px #000;">
			<span class="name">Menu1</span>
			<span class="qty"><a href="#"><b>-</b></a>&nbsp;&nbsp;1&nbsp;&nbsp;<a href="#"><b>+</b></a></span>
			<span class="price">1000 Ks</span>
			<span class="del"><a href="#">&times;</a></span>
		</li>
	</ul>
	</div>
	<div id="right">
		<img src="images/chef.jpg" width="100%" height="100%">
	</div>
</body>
</html>