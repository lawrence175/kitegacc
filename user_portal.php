<!-- 
author :lawrence k & Reddy B

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title align ="center">Kitega Community Information System</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<style type="text/css">
<link rel="icon" type="image/png" href="/css/images/favicon.png" sizes="16x16">


.div1 {
height: 98%;
width: 99%;
background-image: url(f1.jpg);

border-color: #a64dff;

}
.div2 {
width:370px;

border-color: #c62007;


font-weight: bold;
font-size: 35px;
text-align: left;

}
.div3 {
padding: 10px;
font-weight: bold;
font-size: 25px;
line-height: 50px;
}
input[type=text], select {
width: 370px;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
input[type=submit] {
width: 370px;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 18px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #45a049;
}
</style>
</head>

<?php include("..\backend\user_portal_bc.php");  ?>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
      <div id="top">
      <h1><a href="#">Kitega Community Information System </a></h1>
      <div id="top-navigation"> Welcome <a href="#"><strong>User</strong></a> <span>|</span> <a href="#">Help</a> <span>|</span>   <a href="logout.php">Log out</a> </div>
    </div>

   
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
<?php include("navigation.php");  ?>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="user_portal.php">Home</a> <span>&gt;</span> Welcome </div>
    <!-- End Small Nav -->
       <!-- Main -->
		<?php 
		      echo "<div >&nbsp; Welcome  ".$row['username']."</div><br>";
		      echo "<b >&nbsp; Details</b>";
		      echo "<div >&nbsp; Total loans  ".$row_money_account['total_loans']."</div>";
		      echo "<div >&nbsp; Total savings  ".$row_money_account['total_savings']."</div>";
		      echo "<div >&nbsp; Monthly income  ".$row_money_account['total_income']."</div>";
		      echo "<b >&nbsp; Upcomng meetings</b><br>";
		      echo "&nbsp; <input type='button' onclick='' value='Join a meeting'><br>";
		      while($row_meeting = mysql_fetch_array($result_meetings)) {
		          echo "<div >&nbsp;Meeting : " . $row_meeting["name"]." on ".$row_meeting["mdate"].
		                      "</div>";
		      }
		      echo "<br><b >&nbsp; Activities added in this month</b><br>";
		      while($row_ativity = mysql_fetch_array($result_activities)) {
		          echo "<div >&nbsp;" . $row_ativity["activity"]." - by ".$row_ativity["username"]." (on ".$row_ativity["adate"].
		          ") </div>";
		      }
		      echo "<br><b >&nbsp; More events from this month</b><br>";
		      while($row_event = mysql_fetch_array($result_events)) {
		          echo "<div >&nbsp;Event : " . $row_event["name"]." on ".$row_event["edate"].", added by ".$row_event["username"].
		          "</div>";
		      }
		?>
     
      
    </div>
    <!-- Main -->
  </div>
</div>
<!-- End Container -->
</br></br></br></br></br></br>
</br></br></br></br></br></br>
</br></br></br></br></br></br>
</br></br></br></br></br></br>
<!-- Footer -->
<div id="footer">
  <div class="shell"> <span class="left">&copy; 2017 - Kitega Community Center</span> <span class="right"> Design by <a href="#">Kitega Community Center</a> </span> </div>
</div>
<!-- End Footer -->
</body>
</html>
