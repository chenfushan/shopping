<?php 
	require_once 'include.php';

	function admin_show_header()
	{
		?>
		<div id="header">
			<style>
			div#header{
				height: 20px;
				font-size: 16px;
				padding: 15px;
				margin-bottom: 30px;
				background-color: #e9a63b;
			}
			div#adminName{
				width: 300px;
				float: left;
			}
			div#menu{
				width: 400px;
				float: right;
				text-align: right;
			}
			div#menu a{
				margin-left: 15px;
			}
			</style>
			<div id="adminName">
				<span>Welcome Administrator</span>
				<a href="./admin.php"><?php echo $_SESSION['admin']; ?></a>				
			</div>
			<div id="menu">
				<a href="additem.php"><span>Add Items</span></a>
				<a href="unshiporder.php"><span>Viewing Order</span></a>
				<a href="select_modify_category.php">Modify Items</a>
			</div>
		</div>
		<?php
	}
/*************************unshiporder.php***************************************/	
	function display_unship_order($order_array)
	{
		foreach ($order_array as $row) {
			$id = $row['id'];
			$name = $row['name'];
			$orderid = $row['orderid'];
			$num = $row['num'];
			$price = $row['price'];
			$address = admin_get_add($orderid);
			echo $orderid;
			foreach ($address as $add) {
				$ship_name = $add['ship_name'];
				$ship_address = $add['ship_address'];
				$ship_city = $add['ship_city'];
				$ship_state = $add['ship_state'];
				$ship_country = $add['ship_country'];
				$ship_zip = $add['ship_zip'];
				$ship_phonenumber = $add['ship_phonenumber'];
			}
			echo "<div class=\"order-detail\"><div class=\"item-detail\">";
			echo $name."<br />".$num."<br />".$price."<br />";
			echo "</div><hr>";
			echo $ship_name."<br />".$ship_country."-".$ship_state."-".$ship_city."-".$ship_address."<br />".$ship_zip."<br />".$ship_phonenumber;
			echo "<form action=\"ship.php\" method=\"post\">";
			echo "<input type=\"hidden\" name=\"orderid\" value=\"".$orderid."\">";
			echo "<input type=\"submit\" class=\"Ship\" value=\"Ship\"></form>";
			echo "</div><hr>";
		}
	}

/***********************NoRecv.php******************************************/
	function display_norecv_order($order_array)
	{
		foreach ($order_array as $row) {
			$id = $row['id'];
			$name = $row['name'];
			$orderid = $row['orderid'];
			$num = $row['num'];
			$price = $row['price'];
			$address = admin_get_add($orderid);
			echo $orderid;
			foreach ($address as $add) {
				$ship_name = $add['ship_name'];
				$ship_address = $add['ship_address'];
				$ship_city = $add['ship_city'];
				$ship_state = $add['ship_state'];
				$ship_country = $add['ship_country'];
				$ship_zip = $add['ship_zip'];
				$ship_phonenumber = $add['ship_phonenumber'];
			}
			echo "<div class=\"order-detail\"><div class=\"item-detail\">";
			echo $name."<br />".$num."<br />".$price."<br />";
			echo "</div><hr>";
			echo $ship_name."<br />".$ship_country."-".$ship_state."-".$ship_city."-".$ship_address."<br />".$ship_zip."<br />".$ship_phonenumber;
			echo "<input type=\"hidden\" name=\"orderid\" value=\"".$orderid."\">";
			echo "</div><hr>";
		}
	}
/***********************NoRecv.php******************************************/
	function display_complete_order($order_array)
	{
		foreach ($order_array as $row) {
			$id = $row['id'];
			$name = $row['name'];
			$orderid = $row['orderid'];
			$num = $row['num'];
			$price = $row['price'];
			$address = admin_get_add($orderid);
			echo $orderid;
			foreach ($address as $add) {
				$ship_name = $add['ship_name'];
				$ship_address = $add['ship_address'];
				$ship_city = $add['ship_city'];
				$ship_state = $add['ship_state'];
				$ship_country = $add['ship_country'];
				$ship_zip = $add['ship_zip'];
				$ship_phonenumber = $add['ship_phonenumber'];
			}
			echo "<div class=\"order-detail\"><div class=\"item-detail\">";
			echo $name."<br />".$num."<br />".$price."<br />";
			echo "</div><hr>";
			echo $ship_name."<br />".$ship_country."-".$ship_state."-".$ship_city."-".$ship_address."<br />".$ship_zip."<br />".$ship_phonenumber;
			echo "<input type=\"hidden\" name=\"orderid\" value=\"".$orderid."\">";
			echo "</div><hr>";
		}
	}
/***********************list_modify_item.php******************************************/
	function display_modify_list($itemarray)
	{
		if (!is_array($itemarray)) {
			echo "<p>No item currently available in this list";
		}else{
			foreach ($itemarray as $row) {
			?>
			<div class="item">
	 			<div class="item-pic">
	 				<?php echo "<img src=\"./images/item-pic/".$row['pic_name']."\" alt=\"Laptop\">"; ?>
	 			</div>
 				<div class="item-info">
 					<div class="item-name">
 						<?php 
 						echo "<a href=\"./modify_item.php?itemid=".$row['id']."\">
 							<span>".$row['name']."</span>
 							</a>";
 						 ?>
 					</div>
 					<div class="item-price">
 						<span>$<?php echo $row['price']; ?></span>
 					</div>
 				</div>
 			</div>	
		<?php
			}
		}
	}
 ?>