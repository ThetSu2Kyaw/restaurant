<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin_menu.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Candy May Restaurant</title>
	<style>
		#overlay{
			position: absolute;
			background: black;
			opacity: 0.8;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			display: none;
		}

		#new_form{
			position: absolute;
			background: #000;
			color: #fff;
			top: 2%;
			left: 25%;
			width: 50%;
			border: 2px solid green;
			border-radius: 10px;
			display: none;
		}

		#new_form h1, form{
			margin: 10px;
		}

		form label{
			margin-bottom: 5px;
			font-size: 16px;
		}

		form input, form select, form textarea{
			width: 98%;
			border-bottom: 2px solid green;
			border-radius: 10px;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div id="overlay">
	</div>
	<div id="new_form">
		<h1 class="h3 mb-3">Add Menu <span class="close text-danger" style="float:right;cursor: pointer">&times;</span></h1>
		<form method="post" action="#" enctype="multipart/form-data">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" placeholder="Menu Name"><br>
			<label for="category">Category</label>
			<select name="category" id="category">
				<option selected>--Select Category---</option>
				<option value="1">Chinese</option>
				<option value="2">Indian</option>
				<option value="3">American</option>
			</select><br>
			<label for="price">Price</label>
			<input type="text" name="price" id="price" placeholder="Price"><br>
			<label for="description">Description</label>
			<textarea name="description" id="description" placeholder="Write some description..."></textarea><br>
			<label for="photo">Photo</label>
			<input type="file" name="photo" id="photo"><br>
			<input type="button" class="btn btn-sm" value="Add" style="border:2px solid green; border-radius: 10px; color: #fff;width:20%;float: right;margin-right: 30px;">
		</form>
	</div>
	<div id="wrap">
		<h1 class="mb-4">Food Menu
			<a href="#" id="add_menu" style="float: right;text-decoration: none;font-size: 21px;margin-top: 18px;" class="btn btn-sm btn-danger "><b>+</b> Add Menu&nbsp;</a>
		</h1>
		

		<table id="menu-table">
		<tr>
			<th>Category</th>
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>Indian</td>
			<td>Dosa</td>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
			<td>1000 Ks</td>
			<td>
				<img src="../images/menu1.jpg" width="50%" height="50%">
			</td>
			<td>
				<a href="#" class = "btn btn-sm btn-success">Edit</a> | 
				<a href="#" class="btn btn-sm btn-danger">Del</a>
			</td>
		</tr>
		<tr>
			<td>American</td>
			<td>Burger</td>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
			<td>1500 Ks</td>
			<td>
				<img src="../images/menu1.jpg" width="50%" height="50%">
			</td>
			<td>
				<a href="#" class = "btn btn-sm btn-success">Edit</a> | 
				<a href="#" class="btn btn-sm btn-danger">Del</a>
			</td>
		</tr>
	</table>
	</div>
	<script type="text/javascript">
		var btn = document.getElementById("add_menu");
		var close = document.querySelector(".close");
		btn.addEventListener("click",showForm);
		function showForm(){
			document.getElementById("overlay").style.display = "block";
			document.getElementById("new_form").style.display = "block";
		}

		close.addEventListener("click",hideForm);
		function hideForm(){
			document.getElementById("overlay").style.display = "none";
			document.getElementById("new_form").style.display = "none";
		}
	</script>
</body>
</html>