<!DOCTYPE html>
<html>
    <head>
            <style> 
    /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style>
        <title>
            Purchase Receipt
        </title>
        <meta charset="utf-8"/>
        <title>Products | Aoife Vista Services </title>

<div class="w3-content" style="max-width:1400px">

<header class="w3-container w3-center w3-padding-32"> 
    <center>
  <h1><b><img src="Logo.jpg" style="width:320px;height:145px;"></b></h1>
  <p>Strategic Consulting Services </p> </center>
</header>

<div class="topnav">
  <a href="ConsultingServices2.html">Home</a>
  <a href="OurProducts2.html">Our Products</a>
  <a href="AboutConsulting2.html">About Consulting</a>
  <a href="ContactUs2.html">Contact Us</a>
  <a href="index.php">Return to MY Homepage</a>
  <a href="eBus1.php" style="float:right"><img src="Shopping.png" style="width:35px;height:35px;"></a>
</div>

    </head>
    <body>
        <h2>
            Purchase Receipt for;
        </h2>
<!--      //Starting the session to get the session variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ".$fullNameValue.".";
echo "<br><br>";
echo "The total value is : ".$totalValue2.".";
?>
    </body>
</html>




