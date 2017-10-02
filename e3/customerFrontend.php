<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$item = $_POST['item'];
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$num3 = $_POST["num3"];
		$num4 = $_POST["num4"];
		$num5 = $_POST["num5"];
		$express = $_POST["express"];
		$expressPrice = Array("Free 7 day"=>20,"$50.00 over night"=>30,"$5.00 three day"=>40);
		switch (null) {
				case $num1:
					$num1=0;
				break;
				case $num2:
					$num2=0;
				break;
				case $num3:
					$num3=0;
				break;
				case $num4:
					$num4=0;
				break;
				case $num5:
					$num5=0;
				break;
			default:
				break;
		}
		$itemKeyNum= Array("apple"=>$num1,"banana"=>$num2,
			"Pear"=>$num3,"Ferrari"=>$num4,"Lamborghini"=>$num5);

		$itemKeyPrice= Array("apple"=>100,"banana"=>100,
			"Pear"=>100,"Ferrari"=>100,"Lamborghini"=>100);
		$itemName = Array();
	?>
	<p>Welcome 
	<?php echo $_POST["username"]."!!   ";
			echo " Your pass is ".$_POST["pwd"];
	?></p>
	<div>
		<table>
			<tr>
				<td></td>
				<td>Quantity</td>
				<td>Cost Per Item</td>
				<td>Sub Total</td>
			</tr>
			<?php
					$cost1 = ($itemKeyNum["apple"]*$itemKeyPrice["apple"]);
					$cost2 = ($itemKeyNum["banana"]*$itemKeyPrice["banana"]);
					$cost3 = ($itemKeyNum["Pear"]*$itemKeyPrice["Pear"]);
					$cost4 = ($itemKeyNum["Ferrari"]*$itemKeyPrice["Ferrari"]);
					$cost5 = ($itemKeyNum["Lamborghini"]*$itemKeyPrice["Lamborghini"]);
					$total = $cost1+$cost2+$cost3+$cost4+$cost5+$expressPrice[$express];
					echo "<tr><td>"."Item 1</td>";
					echo "<td>".$itemKeyNum["apple"]."</td>";
					echo "<td>".$itemKeyPrice["apple"]."</td>";
					echo "<td>".($itemKeyNum["apple"]*$itemKeyPrice["apple"])."</td></tr>";
					echo "<tr><td>"."Item 2</td>";
					echo "<td>".$itemKeyNum["banana"]."</td>";
					echo "<td>".$itemKeyPrice["banana"]."</td>";
					echo "<td>".($itemKeyNum["banana"]*$itemKeyPrice["banana"])."</td></tr>";
					echo "<tr><td>"."Item 3</td>";
					echo "<td>".$itemKeyNum["Pear"]."</td>";
					echo "<td>".$itemKeyPrice["Pear"]."</td>";
					echo "<td>".($itemKeyNum["Pear"]*$itemKeyPrice["Pear"])."</td></tr>";
					echo "<tr><td>"."Item 4</td>";
					echo "<td>".$itemKeyNum["Ferrari"]."</td>";
					echo "<td>".$itemKeyPrice["Ferrari"]."</td>";
					echo "<td>".($itemKeyNum["Ferrari"]*$itemKeyPrice["Ferrari"])."</td></tr>";
					echo "<tr><td>"."Item 5</td>";
					echo "<td>".$itemKeyNum["Lamborghini"]."</td>";
					echo "<td>".$itemKeyPrice["Lamborghini"]."</td>";
					echo "<td>".($itemKeyNum["Lamborghini"]*$itemKeyPrice["Lamborghini"])."</td></tr>";
					echo "<tr><td>Shipping</td>";
					echo "<td>".$express."</td>";
					echo "<td>".$expressPrice[$express]."</td>";
					echo "<td>".$total."</td><tr>";
			?>
		</table>
	</div>
</body>
</html>

