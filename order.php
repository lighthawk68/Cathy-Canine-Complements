<?php
$title = "Cathy's Canine Complements: Orders"; 
include('includes/header.php');


$cartFinal="";
$cartTotalFinal="";
if(isset($_SESSION["cart_array"])){
	$i = 0;
	foreach($_SESSION["cart_array"] as $each_item){
	$item_id = $each_item['item_id'];
	$sql = mysql_query("SELECT * FROM products WHERE id='$item_id' LIMIT 1");
	while($row = mysql_fetch_array($sql)){
		$product_name = $row["name"];
		$price = $row["price"];
	}
	$price2 = $price * $each_item["quantity"];
	$cartTotalFinal = $price2 + $cartTotalFinal;
	setlocale(LC_MONETARY, "en_US");
	$price2 = money_format("%10.2n", $price2);
	$cartFinal .= '<tr>';
	$cartFinal .= '<td>' . $product_name . '</td>';
	$cartFinal .= '<td>$' . $price . '</td>';
	$cartFinal .= '<td><form action="order.php" method="post">
	<input name="quantity" type="text" value="' . $each_item['quantity'] . '" size="1" maxlength="2">
	<input name="adjustBTN' . $item_id . '" type="submit" value="change">
	<input name="item_to_adjust" type="hidden" value="' . $item_id . '">
	</form></td>';
	$cartFinal .= '<td>' . $price2 . '</td>';
	$cartFinal .= '<td><form action="order.php" method="post"><input name="deleteBTN' . $item_id . '" type="submit" value="Remove"/><input name="index_to_remove" type="hidden" value="' . $i . '"/></form></td>';
	$cartFinal .= '</tr>';
	$i++;
	}
	setlocale(LC_MONETARY, "en_US");
	$cartTotal = money_format("%10.2n", $cartTotal);
}else{
	echo "<p>You have nothing in your cart.</p>";
}

?>
<p><h3>Order Confirmation</h3></p>
<br />
<br />
<table border="1">
<?php echo $cartFinal; ?>
</table>
<br />
<br />
<p><h1>Check out here: </h1><?php echo $pp_checkout_btn; ?></p>

<?php 
include('includes/footer.php');
?>