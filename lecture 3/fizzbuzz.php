<html>
<body>
<?php 
echo"<ol type=1>";
for ($x = 1; $x <= 100; $x++)
{
	if ($x % 3 == 0 and $x % 5 == 0)
	{
	echo "<li>"."fizzbuzz"."</li>";
	}
	elseif($x % 3 == 0)
	{
		echo "<li>"."fizz"."</li>";
	}
	elseif($x % 5 == 0)
	{
		echo "<li>"."buzz"."</li>";
	}
	else
	{
		echo "<li></li>";
	}
	
}
	
echo"</ol>";
?>
</body>
</html>
