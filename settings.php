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

<?php include("..\backend\settings_bc.php");  ?>
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
    <div class="small-nav"> <a href="#">Update Account</a> <span>&gt;</span>  settings </div>
    <!-- End Small Nav -->
       <!-- Main -->

</head>
<body>
<div class="div1" align="center">
<div class="div2">Activity Details
<div class="div3">
<!-- form begins // also should validated by the php file-->
<form name="settings_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return pformat()" method="post">
<b >&nbsp; User details</b>	
 <?php 
    $query = "SELECT * FROM `users` where user_id='".$_SESSION['user_id']."'";
    $result_grp = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($result_grp);
    
    echo "Full Name: <input type='text' name='username' value='".$row['username']."' required><br>";
    echo "Email: <input type='text' id='email' name='email' value='".$row['email']."' maxlength='50' minlength='10' ><br>";
    echo "Phone Number: <input type='text' id='tel' name='tel' value='".$row['phone']."' maxlength='10' minlength='10' required><br>";
    echo "Address :<input type='text' name='address' value='".$row['address']."'/>";

?>

Group :
        <?php 
            $query = "SELECT * FROM `groups`";
            $result_grp = mysql_query($query) or die(mysql_error());
            echo $_SESSION["group_id"];
            echo "<select id='groups' name='groups'>";
            echo "<option value=''>Change Group</option>"; 
            while($row = mysql_fetch_array($result_grp)) {
                if ($row["group_id"]==$_SESSION["group_id"]){
                    echo "<option value=".$row["group_id"]." selected>".$row["name"]."</option>";
                }else{
                    echo "<option value=".$row["group_id"].">".$row["name"]."</option>";
                }
            }
            echo "</select><br>";
        ?>
<br/>
<b >&nbsp; User money account</b>
 <?php 
            $query = "SELECT * FROM `user_money_account` where user_id='".$_SESSION['user_id']."'";
            $result_grp = mysql_query($query) or die(mysql_error());
            $row = mysql_fetch_array($result_grp);
            
            echo "Monthly income: <input type='text' name='income' value='".$row['monthly_income']."' required><br>";
            echo "Current savings: <input type='text' name='savings' value='".$row['total_savings']."' required><br>";
            
        ?>
Currency :
        <?php 
            $query = "SELECT * FROM `currencies`";
            $result = mysql_query($query) or die(mysql_error());
            echo "<select id='currencies' name='currencies'>";
            echo "<option value=''>Change Currency</option>";
            while($row = mysql_fetch_array($result)) {
                if ($row["selected"]=="Y"){
                    echo "<option value='".$row["cur_id"]."' selected>".$row["cur_name"]."</option>";
                }else{
                    echo "<option value='".$row["cur_id"]."'>".$row["cur_name"]."</option>";
                }
            }
            echo "</select>";
        ?>
		
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
