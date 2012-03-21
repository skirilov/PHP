<form action="homework_1.php" method="get">
number: <input type="text" name="fnumber" />
<input type="submit" value="Check" />
<?php

if (ISSET($_GET['fnumber']))
{
	echo "<br/>";
	if (!is_numeric($_GET['fnumber']))
	{
		echo '<font color="red"> The parameter is not a number !</font>'."<br/>";
		
	}
	else
	{
	
	if($_GET['fnumber']<=0 or $_GET['fnumber']>=19999)
		echo '<font color="red"> The parameter is not within the range [0,19999] !</font>'."<br/>";


	function isPrime($number)
	{
			if ($number < 2) {
					return false;
			}
			for ($i=2; $i<=($number / 2); $i++) {
					if($number % $i == 0) { 
							return false;
					}
			}
			return true;
	}

	if(isPrime($_GET['fnumber']))
	echo '<font color="black"> The number'.' '.($_GET['fnumber']).' '.'is prime ! <font/>'."<br/>";
	else 
	echo '<font color="blue"> The number'.' '.($_GET['fnumber']).' '.'is NOT prime ! <font/>'."<br/>";
}
}

?>
</form>




