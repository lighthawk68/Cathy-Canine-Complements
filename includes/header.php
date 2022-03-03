<?php session_start();
include('mysql_connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="css/psstyle.css" />
</head>
<body>
<br/>
<div id="nav">
<ul id="list-nav">
<li><a href="index.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />Home</b></a></li>
<li><a href="about.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />About Us</b></a></li>
<li><a href="massage.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />Massage</b></a></li>
<li><a href="aroma.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />Aromatherapy</b></a></li>
<li><a href="blog.php"><b><img src="images/paw3.png" style="margin:5px; float:left;" />Blog</b></a></li>
<li><a href="order.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />Orders</b></a></li>
<li><a href="links.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />Links</b></a></li>
<li><a href="contact.php"><b><img src="images/paw3.png" style="margin: 5px; float: left;" />Contact</b></a></li>
</ul>
<table width="135" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
<tr>
<td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.cathyscaninecomplements.com&amp;size=L&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script><br />
<a href="http://www.symantec.com/ssl-certificates" target="_blank"  style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a></td>
</tr>
</table>
<img src="images/picktn.jpg" height="75" width="75"/>
</div>
<br />
<br />
<div id="cart">
<table width="100%" border="0" cellspacing="0" cellpadding='4'>
	<tr>
	<td><b>Item</b></td>
	<td><b>Price</b></td>
	<td><b>Quantity</b></td>
	<td><b>Total</b></td>
	</tr>
<?php echo $cartOutput; ?>
<tr>
<td colspan="2">Cart Total</td>
<td colspan="2" align="right"><?php echo $cartTotal; ?></td>
</tr>
</table>
<br />
<br />
<a href="order.php?cmd=emptycart">Empty Cart</a> &nbsp; &middot; &nbsp; <a href="order.php">Checkout</a>
</div>
<div id="content">
<p align="center"><img src="images/C3logo.png" alt="Foot Treatment" style="margin: 5px" /></p>