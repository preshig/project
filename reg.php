<?php 
 $con=mysql_connect("localhost","root","");
 $b=mysql_select_db("priya",$con);
 $l=$_POST['order'];
 $m=$_POST['name'];
 $n=$_POST['qua'];
 $o=$_POST['id'];
 $p=$_POST['mob'];
 $q=$_POST['add'];
 $r=$_POST['con'];
  if(isset($_POST['submit']))
 {

 mysql_query("insert into reg(ono,name,quantity,id,mo,betu,country)values('$l','$m','$n','$o','$p','$q','$r')");

 }
 
?>
<!doctype html>
<html>
<head>
<title>contact</title>
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

<tr> <p><h3><marquee><font face="vijaya" size="6">Welcome To Online Radiant Fresh Restaurant</font></p>
</marquee>
</table>
<!-- header nav end -->

<!-- nav top  start-->	<table width="990" cellspacing="0" cellpadding="0" border="1" >
	
	<tr  bgcolor="#b93b66"  height="27" align="center" >
	<h2>
		<td>
<ul id="drop-nav">
 
 <li><a href="#">Chineese</a> 
	<ul> 
	<li><a href="burger.php">Burger</a></li> 
	<li><a href="chillipaneer.php">Chilli Paneer</a></li> 
	<li><a href="noodles.php">Noodles</a>
	<li><a href="pizza.php">Pizza</a>
	<li><a href="sandwich.php">Sandwich</a>
	

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
<form action="#" method="post">
<table width="414" cellspacing="2" align="center">
<tr><td width="148">Order no.:</td><td width="254"><input type ="text" name="order"></input ></td></tr></br>
<tr><td>Name:</td><td><input type ="text" id="uname" pattern="[a-zA-Z]{4,15}" required></input ></td></tr></br>
<td>Email-id:</td><td><input type ="email" name="id" required></input> </td></tr></br>
<td>Mobile:</td><td><input type ="text" name="mob" pattern="[0-9] {0,10}" maxlength="10" required></input > </td></tr></br>
<tr><td><p>Residential address</p></td></tr>
<tr><td>Address:</td><td><input type ="text" name="add"></input> </td></tr></br>
<td>Country:</td><td><input type ="text" name="con"></input > </td></tr></br>
<td>Product quantity:</td><td><input type ="text" name="qua" required></input > </td></tr><td height="21"></br>
<td><input type ="submit" value="Get availability" name="submit"></input > </td></tr>
<a href="pay.php">go to next page</a>
</TABLE>
</form>


	
<table  align="center" class="ft">
<hr>
	<tr>&nbsp;</tr>
	<tr ><td width="22">&nbsp;</td> <td><h4><font color="black">Menu</font></h4></td><td><h4><font color="black">Information</font></h4></td></tr>
	<tr><td width="22" >&nbsp;</td><td><a target="_new" href="chineese.html">Chineese</td><td><a target="_new" href="contact.html">Contact Us</td></tr>
	
	<tr><td width="22" >&nbsp;</td><td><a target="_new" href="dessert.html">Dessert</td><td><a target="_new" href="about.html">About Us</td></tr>
	
	<tr><td width="22" >&nbsp;</td><td><a target="_new" href="sweets.html">Sweets</td><td><a target="_new" href="terms.html">Terms and codition</td><td><img width="15" src="images/add.png"><font size="3" color="#2b005c"><b> RADIANT FRESH -</b></font>Radiant fresh, Indore</td></tr>
	
	<tr><td width="22" >&nbsp;</td><td><a target="_new" href="south.html">South Indian</td><td><a target="_new" href="privacy.html">Privacy Policy</td><td><img width="20" src="images/call.png"><font size="3" color="#2b005c"><b> Call us now:</b></font> 0731-4279528 <td></tr>
	
	<tr><td width="22">&nbsp;</td><td valign="top"><a target="_new" href="thali.html">Thali</td>
	<td valign="top"><a target="_new" href="site map.html">Site Map</td><td><img width="20" src="images/mail.png"><font size="3" color="#2b005c"><b>  email- </b></font>radiantfresh@gmail.com</td></tr>
	
	<tr><td width="22">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	
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




