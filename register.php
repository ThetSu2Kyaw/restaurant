
<!DOCTYPE html>
<html>
<head>
	<title>Candy May Restaurant</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css">

  <style>
body {
  font-family: Rockwell;
}
img:hover {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=password] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #696969 ;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #696969 ;
}
.close:hover,
.close:focus {
color: red;
cursor: pointer;
}
.close {
position: absolute;
right: 25px;
top: 0;
color: #000;
font-size: 35px;
font-weight: bold;
}
button {
background-color: #696969;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}
button:hover {
color : grey ;
}




/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color:white;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



 
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
    <h1 style="text-align: center">Register Now!</h1>

  <div class="row">
    <div class="column">
      <img src="images/home3.jpg" style="width:600px;height:600px; border-radius:50% ">
    </div>
    <div class="column">
     <form name="myForm" action="register_check.php" onsubmit="return validateForm()" method="post">
      
        <input type="text" id="fname" name="fname" placeholder="Enter your name.." required>
       
        <input type="text" id="email" name="email" placeholder="Enter your email...@gmail.com"  required>
        
        <input type="password" id="password" name="password" placeholder="Enter password..." required ><br><br>
         
        <button type="submit" value="Submit" onclick="return validateForm()">Submit</button>
      </form>
    </div>

  </div>
</div>
<script>
function validateForm() {
  var f = document.forms["myForm"]["fname"].value;
  var e = document.forms["myForm"]["email"].value;
  var p = document.forms["myForm"]["password"].value;
  if (f == "" || e=="" || p=="" ) {
    alert("Please complete all the form ");
    return false;}
    else{alert("Thanks for completed form");}

    }
 
</script>

</body>
</html>
