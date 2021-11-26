<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
	<title>Rating Stars</title>
	<style>

		#wrap{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Arial;
		}

		#content{
			margin: 50px auto;
			width: 350px;
		}

		label{
			color: #eee;
			font-size: 44px;
			padding-left: 10px;
			float: right;
		}

		input[type="radio"]{
			display: none;
		}

		#content input:not(:checked) ~label:hover,#content input:not(:checked) ~label:hover ~ label{
			color: #ffc107;
		}

		#content input:checked ~ label{
			color: #ffc107;
		}

		#reaction-msg: before{
			float: left;
			color: #ffc107;
			width: 100%;
		}

		#content input:not(:checked) ~ form{
			display: none;
		}

		#content input:checked ~ form{
			display: inline-block;
			border-top: 1px solid black;
			width: 100%;
			padding-top: 15px;
			margin-top: 15px;
		}

		#submit-rating{
			border: none;
			outline: none;
			background: #795548;
			color: #ffc107;
			font-size: 18px;
			border-radius: 4px;
			padding: 5px 15px;
			cursor: pointer;
			float: right;
		}

		#content #str1:checked ~ form #reaction-msg{
			content:  "I hate it";
		}

		#content #str2:checked ~ form #reaction-msg{
			content:  "I don't like it";
		}

		#content #str3:checked ~ form #reaction-msg{
			content:  "It is good";
		}

		#content #str4:checked ~ form #reaction-msg{
			content:  "I like it";
		}

		#content #str5:checked ~ form #reaction-msg{
			content:  "I love it";
		}
	</style>
</head>
<body>
<div id="wrap">
	<div id="content">
		<input type="radio" name="star-rating" id="str1">
		<label for="str1" class="fas fa-star"></label>

		<input type="radio" name="star-rating" id="str2">
		<label for="str2" class="fas fa-star"></label>

		<input type="radio" name="star-rating" id="str3">
		<label for="str3" class="fas fa-star"></label>

		<input type="radio" name="star-rating" id="str4">
		<label for="str4" class="fas fa-star"></label>

		<input type="radio" name="star-rating" id="str5">
		<label for="str5" class="fas fa-star"></label>

		<form>
			<span id="reaction-msg"></span>
			<button type="submit" id="submit-rating">Submit</button>
		</form>
		<script>
			// const btn =document.querySelector("#submit-rating");
			// btn.onclick(){
			// 	document.querySelector();
			// }
		</script>
	</div>
</div>
</body>
</html>