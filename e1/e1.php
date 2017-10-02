<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php
		$num = 100;
		$row = Array();
		$col = Array();
		for ($i=1; $i <=$num ; $i++) { 
			$row[$i] = $i;
			$col[$i] = $i;
		}
		echo "<tr>";
		echo "<td></td>";
		for ($i=1; $i <= $num; $i++) { 
			echo '<td>'.$row[$i].'</td>';
		}
		echo "</tr>";

		for ($i=1; $i <= $num; $i++) { 
			echo '<tr><td>'.$i.'</td>';
			for ($j=1; $j <= $num ; $j++) { 
				
				echo '<td>'.$i*$j.'</td>';
			}
			echo "<tr/>";
		}
		?>
	</table>
</body>
</html>