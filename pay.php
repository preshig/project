<!doctype html>
<html>
<head>
 <script>
			function msg()
			{
				alert("Your Payment Is Successfully Done");
				}
	</script>
<title>index</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<style type="text/css">
    body {margin:0px;
	
	background-repeat:no-repeat;}
	.ft{
		width:950; 
		//border-collapse:collapse; 
		align:center;
	}
	.ft td{ 
		padding:5px; 
	}
   table, td, th{border: solid 0px;}
     a {text-decoration:none;}

</style>



</head>

<body text="black" link="#370260" vlink="#370260" leftmargin="0"><font face="helvetica"  >
<!--- main table start--->
<table width="990" align="center" cellspacing="0" cellpadding="0" border="1" bgproperties="fixed"   background="background/002.jpg" >
<!-- header top start-->
<tr>
<td><table width="990" cellspacing="0" cellpadding="0"  bgcolor="#b93b66">
	
	<tr bgcolor="#b93b66"  height="20"  >
	<td width="22">&nbsp;</td>
	<td width="210" >Call us now:0731-245609</td>
	<td width="220">&nbsp;</td>
	<td width="45"><a target href="indexapna.html">Home</td>
	<td width="65"><a target href="contact.html"><img width="15" src="images/mail.png"> Contact Us</td>
	<td width="22">&nbsp;</td>
	</tr>
	</table>
</td>
</tr>

<!-- header top end -->

<!-- header nav start -->
<tr>
<td>
<table cellspacing="0" cellpadding="0" width="990" border="0">

	<tr height="9"></tr>
	<tr align="center "  >
		<td width="29">&nbsp;</td>
		<td bgcolor="purple" width="135" ><font size="5" color="white"><b><i>Radiant Fresh</i></b></font></td>
		<td width="30" >&nbsp;</td>
		<td height="49" width="150"><input type="text" value="search"></td>
	
		<td height="49" width="250" align="right"><input type="search" value="cart(empty)"></td>
		<td width="22">&nbsp;</td>
	</tr>

<tr> <p><h3><marquee><font face="vijaya" size="6">Welcome To Online Radiant Fresh Restaurant</font></h3></p></tr>
</marquee>
</table>
<!-- header nav end -->
	
	
<!-- nav top  start-->	
<table width="990" cellspacing="0" cellpadding="0" border="1" >
	
	<tr  bgcolor="#b93b66"  height="27" align="center" >
	<h2>
		<td>
<ul id="drop-nav">
 
 <li><a href="#">Chineese</a> 
	<ul> 
	<li><a href="burger.php">Burger</a></li> 
	<li><a href="paneer.php">Chilli Paneer</a></li> 
	<li><a href="noodles.php">Noodles</a>
	<li><a href="pizza.php">Pizza</a>
	<li><a href="sandwich.php">Sandwhich</a>
	</li> 
	</ul> 
	</li> 
 
<li><a href="#">Dessert</a>
	<ul> 
	<li><a href="cake.php">Cake</a></li>
	<li><a href="Choclate.php">Chocolate</a></li>
	<li><a href="colddrink.php">Cold Drink</a></li>
	<li><a href="cupcake.php">Cup Cake</a></li>
	<li><a href="icecream.php">Ice Cream</a></li>
	</ul> 
	</li> 
	
<li><a href="#">Sweets</a> 
	<ul> 
	<li><a href="bengali.php">Bengali </a></li> 
	<li><a href="dryfruit.php">Dry Fruit </a></li> 
	<li><a href="shaahisweet.php">Shaahi Sweets</a></li> 
	</ul> 
	</li>
	
<li><a href="#">South Indian</a> 
	<ul> 
	<li><a href="dosa.php">Dosa</a></li> 
	<li><a href="idli.php">Idli</a></li> 
	<li><a href="shaahijaika.php">Shaahi Jaika</a></li> 
	</ul> 
	</li>	
<li><a href="thali.php">Thali</a> 
	<ul> 
	<li><a href="thali.php">Thali week</a></li> 
	</ul> 
	</li>
</ul>
</td>
</h2>	
</tr>
</table>

<?php
}
}
?>
<form action="#" method="post"><table align="center" width="40%">
<tr><td>&nbsp;</td></tr>
<tr><td>
Type your Order no.: <input type="text" name="order"/>
<input type="submit" value="search" name="search"/>
</td>
</tr>
</form>

<?php
 $con=mysql_connect("localhost","root","");
 $b=mysql_select_db("priya",$con);
 $k=$_POST['order'];
// echo ($k);
 if(isset($_POST['search']))
 {
 $c=mysql_query("select * from reg where ono='$k'");
 while($h=mysql_fetch_array($c))
 { ?>
 <form><table border="1"  width="40%" align="center">
 <tr>&nbsp;</tr>
 	<tr><td>Order no:</td><td> <?php echo $h["ono"]; ?></td></tr>
	<tr><td>Name:</td><td> <?php echo $h["name"]; ?></td></tr>
	<tr><td>Email-id:</td><td> <?php echo $h["id"]; ?></td></tr>
	<tr><td>Mobile:</td><td> <?php echo $h["mo"]; ?></td></tr>
	<tr><td>Address:</td><td> <?php echo $h["betu"]; ?></td></tr>
	<tr><td>Country:</td><td><?php echo $h["country"]; ?></td></tr>
	<tr><td>Quantity:</td><td> <?php echo $h["quantity"]; ?></td></tr>
	</center></table>
	</form>
 </br><p><font color="blue" face="comic sance" size="7" >...Mode Of Payment...</font></p> 

<table align="center" >
<tr><td><h2>Net Banking</h2></td></tr>
<tr>
<td>User id:</td>
<td><input type="email" id="uid" required/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" maxlenghth="15" minlength="5" required/></td>
</tr>
<tr>
<td>Branch:
<td><select>
<option>State Bank Of India (SBI) </option>  
<option> Bank Of India (BOI) </option>
<option> Panjab National Bank Of India (PNB) </option>
<option> Bank Of Badoda (SBI) </option>
<option> Bank Of Maharastra (BOM) </option>
 <option>Axis Bank   </option>
 <option>State Bank Of India (SBI) </option>
 <option>State Bank Of India (SBI) </option> 
 <option>State Bank Of India (SBI) </option>
 <option>State Bank Of India (SBI) </option></select></td>
<tr><td><input type="button" value="Get" onClick="msg();"/></td></tr>
</tr></table>


<table align="center" width="40%">
<tr> <td><h2>Debit</h2></td></tr>
<tr>
<td>Card no.:</td>
<td><input type="text" name="uname" required/></td>
</tr>
<tr>
<td>CVV no.:</td>
<td><input type="text" name="uname" required/></td>
<tr>
<td>Branch:
<td><select>
<option>State Bank Of India (SBI) </option>      
<option> Bank Of India (BOI) </option>
 <option> Panjab National Bank Of India (PNB) </option>
 <option> Bank Of Badoda (SBI) </option>
 <option> Bank Of Maharastra (BOM) </option>
 <option>Axis Bank   </option>
 <option>State Bank Of India (SBI) </option>
 <option>State Bank Of India (SBI) </option> 
 <option>State Bank Of India (SBI) </option>
 <option>State Bank Of India (SBI) </option></select></td>
<tr><td><input type="button" value="Get" onClick="msg();"/></td></tr>
</tr></table>


<table align="center" width="40%">
<tr><td><h2>Credit</h2></td></tr>
<tr>
<td>Card no.:</td>
<td><input type="text" name="uname" required/ ></td>
</tr>
<tr>
<td>CVV no.:</td>
<td><input type="text" name="uname" required/></td>
<tr>
<td>Branch:
<td><select>
<option>State Bank Of India (SBI) </option>                                                                     
<option> Bank Of India (BOI) </option>
 <option> Panjab National Bank Of India (PNB) </option>
 <option> Bank Of Badoda (SBI) </option>
 <option> Bank Of Maharastra (BOM) </option>
 <option>Axis Bank   </option>
 <option>State Bank Of India (SBI) </option>
 <option>State Bank Of India (SBI) </option> 
 <option>State Bank Of India (SBI) </option>
 <option>State Bank Of India (SBI) </option></select></td>
<tr><td><input type="button" value="Get" onClick="msg();"/></td></tr>
</tr></table >


<table align="center" width="40%">
<tr><td><h2>cash on delivery</h2></td></tr>
<tr>
<td>Home Address:</td>
<td><input type="text" name="uname"/ required></td>
</tr>
<tr>
<td>Pin Code:</td>
<td><input type="text" name="uname" required/></td>
</tr>
<tr>
<td>Landmark:</td>
<td><input type="text" name="uname"/></td>
</tr>
<tr>
<td>Contact no.:</td>
<td><input type="text" name="uname" required/></td>
</tr>
<tr>
<td>State:</td>
<td><input type="text" name="uname"/></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="uname" required/></td>
</tr>
<tr><td><input type="button" value="Get" onClick="msg();"/></td></tr>
<tr><td>&nbsp;<td></tr>
</table>


<!-- footer top end -->

<!-- footer bottom start -->
<table  width="990" align="center" border="0"cellspacing="0" cellpadding="0"  bgcolor="#ab1c4d">
	
	<tr height="20">
	<font size="2">
	<td width="880" align="center">@copyright reserved</td>
	</font>
	<td width="30" ><p align="center"><a target="_new" href="https://www.facebook.com/"><img width="20" src="images/fb.png"></a></p></td>
	<td width="30" ><p align="center"><a target="_new" href="https://twitter.com/?lang=en/"><img width="20" src="images/twi.png"></a></p></td>
	<td width="22">&nbsp;</td>
	</tr>
	</table>
<!-- footer bottom end -->
</td>
</tr>
</table>
<!-- main table end -->

</body>
<html>
