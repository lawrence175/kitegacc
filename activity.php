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
<?php include("..\backend\activity_bc.php");  ?>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="user_home.php">Welcome to Kitega Community Information System </a></h1>
   
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
      
<?php include("navigation.php");  ?>
     <!-- End Main Nav -->
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#">Home</a> <span>&gt;</span>  Activity </div>
    <!-- End Small Nav -->
       <!-- Main -->

</head>
<body>
<div class="div1" align="center">
<div class="div2">Activity Details <!-- <a>(new business, new skill....)</a> -->
<div class="div3">
<!-- form begins // also should validated by the php file-->
<form name="activity_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return pformat()" method="post">
<?php 
    $query = "SELECT * FROM `activity_types`";
    $result_act_types = mysql_query($query) or die(mysql_error());
?>
	<select id="atype" name="atype">
        Activity Type:
        <option value="">Select activity Type</option>
        <?php 
            while($row_lt = mysql_fetch_array($result_act_types)) {
                echo "<option value=".$row_lt["act_type"].">".$row_lt["act_name"]."</option>";
            }
        ?>
    </select><br>
Activity Name: <input type="text" name="act_name" maxlength="100" minlength="6" placeholder="activity name" required><br>
<!-- Meeting Location: <input type="text" name="locationId" maxlength="10" minlength="6" placeholder="location name" required><br> -->
<!-- Facilitator Name: <input type="text" name="facilitatorId" placeholder="facilitator name" maxlength="50" minlength="20" required><br> -->
Date :<input type="text" name="act_date" placeholder="2017-01-01" required/>
<!-- End Date :<input type="text" name="end_date" placeholder="2017-01-01" required/> -->
Activity Description:<textarea name="act_description" rows="4" cols="50" maxlength="400" >
Please you can write here the brief description of what the activity is all about.
</textarea>

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
