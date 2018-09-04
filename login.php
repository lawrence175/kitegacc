<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title align ="center">Kitega Community Information System</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="login.css" type="text/css" media="all" />
<style type="text/css">
<link rel="icon" type="image/png" href="/css/images/favicon.png" sizes="16x16">


</style>
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="login.php">Welcome to Kitega Community Information System </a></h1>
   
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
    <ul>
        <li><a href="login.php"class="active"><span>Login</span></a></li>
        <li><a href="register.php"class="active"><span>Register</span></a></li>
        <li><a href="#"class="active"><span>About</span></a></li>
        
      </ul>
    </div>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="register.php">Create Account</a> <span> &gt;</span> login </div>
    <!-- End Small Nav -->
       <!-- Main -->
    <script>
function pformat()
{
var pw=document.forms["sign_in"]["Password"].value;
var cl=/[A-Z]/.test(pw);//checking for capital letter
var nu=/[0-9]/.test(pw);//checking for numeral
var sc=/[^a-zA-Z0-9]/.test(pw);//checking for special character
if(!(cl==true && nu==true && sc==true))
{
// alert("Password must contain a number,capital letter and special character");//alerting user about password format
// return false;
}
}
</script>

	<div class="div1" align="center">
    	<div class="div2">Login Credentials
        	<div class="div3">
        		<form name="sign_in" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return pformat()" method="post">
        			User Id: <input type="text" name="userId" maxlength="10" minlength="3" placeholder="user id" required><br>
        			Password: <input type="text" name="password" placeholder="Enter 3 - 30 characters"
        						maxlength="10" minlength="3" required><br>
        			<input type="submit">
        		</form>
        	</div>
    	</div>
    </div>
     
    <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
  </div>
</div>
<!-- End Container -->
</br></br></br></br></br></br>
<!-- Footer -->
<div id="footer">
  <div class="shell"> <span class="left">&copy; 2017 - Kitega Community Center</span> <span class="right"> Design by <a href="#">Kitega Community Center</a> </span> </div>
</div>
<!-- End Footer -->
</body>
</html>

<?php include("..\backend\login_bc.php"); //run form submit  ?>