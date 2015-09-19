<html>
<body>
<?php 
echo "<table border=1 style=width:100%>";
for ($x = 1; $x <= 12; $x++)
{
	echo "<tr>";
	for ($y = 1; $y <= 12; $y++)
	{
		echo "<td>".$x*$y."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>