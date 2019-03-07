<?php
session_start();
$totalValue="";
$_Session['txtTotal']= $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
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
    <head>
        <meta charset="utf-8"/>
        <title>Products | Aoife Vista Services </title>
        
        
         

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
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

        <link rel="stylesheet" href="style.css" type="text/css"/>      
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
            <h1>Our Products</h1>
            <hr/>
            <center>
                        <table cellspacing="10">
                        <tr>
                                <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b>Blockchain</b></td>
                            <td><input type="radio" id="CocaCola" name="rdoGroup" value="1"/></td>
                        </tr>
                        <tr>
                            <td><b>Autonomous Things (Robots)</b></td>
                            <td><input type="radio" id="Sprite" name="rdoGroup" value="5"/></td>
                        </tr>
                        <tr>
                            <td><b>Immersive Experience</b></td>
                            <td><input type="radio" id="Fanta" name="rdoGroup" value="30"/></td>
                        </tr>
                       
                        </table>
            </center>
            <br />
            <center>
                <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td><b>Amount</b></td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td><input type="text" id="txtSubTot" name="txtSub" readonly/></td>
                    </tr>
                    <tr>
                        <td>-Discount @10%</td>
                        <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                    </tr>
                    <tr>
                        <td>+VAT @20%</td>
                        <td><input type="text" id="txtVAT" name="txtVAT" readonly/></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                    </tr>
                </table>
            </center>
            <br/>
            <br>
            <br>
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
            <br>
            <br>
            <br>
            <br>
            </form>
        </div>
        <script type="text/javascript">
            function calcSub(){
                //Assigning variables to the values
                var subAmount= parseFloat(document.getElementById('txtSubTot').value);
                var CocaCola = parseFloat(document.getElementById('CocaCola').value);
                var Sprite = parseFloat(document.getElementById('Sprite').value);
                var Fanta = parseFloat(document.getElementById('Fanta').value);
           
            //If radio buttons are clicked values are assigned
           if (document.getElementById('CocaCola').checked){
               document.intCalc.txtSubTot.value = CocaCola;
               subAmount= CocaCola;
               calculation(subAmount);
           }
           else if (document.getElementById('Sprite').checked){
               document.intCalc.txtSubTot.value = Sprite;
               subAmount= Sprite;
               calculation(subAmount);
           }
            else if (document.getElementById('Fanta').checked){
               document.intCalc.txtSubTot.value = Fanta;
               subAmount= Fanta;
               calculation(subAmount);
           }
       }
        //Function for calculating values
        function calculation(parmSTotal){
            var subTotal = parseFloat(parmSTotal);
            var discCalc = parseFloat(subTotal*.10);
            var vatCalc = parseFloat(subTotal*.20);
            var total = parseFloat(subTotal - discCalc + vatCalc);
           
            //Instering them into the correct fields
            document.intCalc.txtDisc.value = discCalc;
             document.intCalc.txtVAT.value = vatCalc;
              document.intCalc.txtTotal.value = total;
          }
          function AmountClear(){
              document.getElementById("txtSubTot").value = "";
               document.getElementById("txtDisc").value = "";
                document.getElementById("txtVAT").value = "";
                 document.getElementById("txtTotal").value = "";
                       
          }
         
           
     </script>  
    </body>
   
</html>