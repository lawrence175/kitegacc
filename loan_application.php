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
<?php include("..\backend\loan_application_bc.php");  ?>
<script>
function pformat()
{
	var ltype=document.forms["loan_form"]["ltype"].value;
    if(ltype=="")
    {
    	alert("Please select a loan type");
    	return false;
    }
    var loan_amt=document.forms["loan_form"]["loan_amt"].value;
    var shares=document.forms["loan_form"]["shares"].value;
    if(loan_amt=="" && shares=="")
    {
    	alert("Please enter loan amount or shares");
    	return false;
    }
}
</script>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Welcome to Kitega Community Information System </a></h1>
   
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
    <div class="small-nav"> <a href="user_portal.php">Home</a> <span>&gt;</span>  Create new loan application </div>
    <!-- End Small Nav -->
    <!-- Main -->
</head>
<body>
<div class="div1" align="center">
<div class="div2">Fill in details
<div class="div3">
<form name="loan_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return pformat()" method="post">
    <select id="ltype" name="ltype">
        Loan Type:
        <option value="">Select Loan Type</option>
        <?php 
            while($row_lt = mysql_fetch_array($result_loan_types)) {
                echo "<option value=".$row_lt["loan_type_id"].">".$row_lt["loan_type_name"]."</option>";
            }
        ?>
    </select><br>
    <!-- monthly income -->
    Monthly Income :
    <select id="month_income" name = "month_income">
        <option value="">Select your monthly income in shillings</option>
        <option value="50">50.000</option>
        <option value="100"> 100.000</option>
        <option value="150">150.000</option>
        <option value="200">200.000</option>
        <option value="300">300.000</option>
        <option value="OTH">Other</option>
    </select><br>
    <input  id="oth_income" type="text" name="oth_income" value="" placeholder="Enter other amount"/><br>
    <!-- end of monthly income -->

    <!-- user should select his/her loan_amount here -->
    Loan Amount :
    <select id="loan_amt" name = "loan_amt">
        <option value="">Select Loan amount in shillings</option>
        <option value="50">50.000</option>
        <option value="100"> 100.000</option>
        <option value="150">150.000</option>
        <option value="200">200.000</option>
        <option value="300">300.000</option>
        <option value="OTH">Other</option>
    </select><br>
    <input id="oth_loan_amt" name="oth_loan_amt" type="text" value="" placeholder="Enter other amount"/><br>
    <!-- end of loan_amount  -->


    Loan Duration :
    <input id="loan_duration_val" name="loan_duration_val" type="text" value="" placeholder="Enter loan duration" required/>
    <select id="loan_duration_type" name="loan_duration_type" required>
        <option value="">Select days/weeks...</option>
        <option value="d">Days</option>
        <option value="w">Weeks</option>
        <option value="m">Months</option>
        <option value="y">Years</option>
    </select>
    <br>
    <!-- end of loan duration -->

    <!-- business shares -->
    Shares: 
    <select id="business" name="business">
        <option value="">Select business</option>
        <?php 
        while($row_bus = mysql_fetch_array($result_business)) {
            echo "<option value=".$row_bus["business_id"].">".$row_bus["business_name"]."(".$row_bus["username"].","
                            .$row_bus["owner_shares"]."% of shares remain)</option>";
            }
        ?>
    </select>
    <select id="shares" name="shares" >
        <option value="null">Select Business Shares</option>
        <option value="10">10%</option>
        <option value="20">20%</option>
        <option value="30">30%</option>
        <option value="40">40%</option>
        <option value="OTH">Other</option>
    </select>
    <input id="oth_shares" name="oth_shares" type="text" value="" placeholder="Enter other amount"/><br>
    <!-- end of business shares-->
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
