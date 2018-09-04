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
<?php include("..\backend\uevent_bc.php");  ?>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="user_home.html">Welcome to Kitega Community Information System </a></h1>
   
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
    <div class="small-nav"> <a href="#">Home</a> <span>&gt;</span>  Events </div>
    <!-- End Small Nav -->
       <!-- Main -->

</head>
<body>
<div class="div1" align="center">
<div class="div2">Event Details
<div class="div3">
<!-- form begins // also should validated by the php file-->
<form name="fill_in" action="#" onsubmit="return pformat()" method="post">
<?php 
    $query = "SELECT * FROM `event_types`";
    $result_event_types = mysql_query($query) or die(mysql_error());
?>
	<select id="etype" name="etype">
        Event Type:
        <option value="">Select event Type</option>
        <?php 
            while($row_lt = mysql_fetch_array($result_event_types)) {
                echo "<option value=".$row_lt["event_type"].">".$row_lt["event_name"]."</option>";
            }
        ?>
    </select><br>
Event Name: <input type="text" name="event_name" placeholder="event name" maxlength="50" minlength="20" required><br>
Event location: <input type="text" name="event_loc" maxlength="10" minlength="6" placeholder="location name"><br>
Date :<input type="text" name="event_date" placeholder="2017-01-01" required/>
Event Description:<textarea name="event_desc" rows="4" cols="50" maxlength="400">
Please you can write here the brief description of what the event is all about.
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
