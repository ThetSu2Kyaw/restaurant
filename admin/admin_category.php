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
			top: 25%;
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

		form input{
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
		<h1 class="h3 mb-3">Add Category<span class="close text-danger" style="float:right;cursor: pointer">&times;</span></h1>
		<form method="post" action="#" enctype="multipart/form-data">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" placeholder="Category Name"><br><br>
			<input type="button" class="btn btn-sm" value="Add" style="border:2px solid green; border-radius: 10px; color: #fff;width:20%;float: right;margin-right: 30px;">
		</form>
	</div>
	<div id="wrap">
		<h1 class="mb-4">Food Category
			<a href="#" id="add_category" style="float: right;text-decoration: none;font-size: 21px;margin-top: 18px;" class="btn btn-sm btn-danger "><b>+</b> Add Category&nbsp;</a>
		</h1>
		

		<table id="menu-table">
		<tr>
			<th>Category</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>Indian</td>
			<td>
				<a href="#" class = "btn btn-sm btn-success" style="width:20%;">Edit</a> | 
				<a href="#" class="btn btn-sm btn-danger" style="width:20%;">Del</a>
			</td>
		</tr>
		<tr>
			<td>American</td>
			<td>
				<a href="#" class = "btn btn-sm btn-success" style="width:20%;">Edit</a> | 
				<a href="#" class="btn btn-sm btn-danger" style="width:20%;">Del</a>
			</td>
		</tr>
	</table>
	</div>
	<script type="text/javascript">
		var btn = document.getElementById("add_category");
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