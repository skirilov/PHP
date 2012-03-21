<?php

//function for checking if number is prime
function is_prime($number)
{
    // 1 is not prime
    if ( $number == 1 ) 
	{
        return 0;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) 
	{
        return 1;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt((float)$number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) 
	{
        if ( $number % $i == 0 ) 
		{
            return 0;
        }
    }
	return 1;
   
}
	
//function for finding the 3rd prime in the array	
function find_3_prime()
{
//array construction with start number 20,edn number 1000 and step 37
    $arr = range(20,1000,37);
	
	$counter = 0;
	foreach ($arr as &$value)
		{
			
			if(is_prime($value))
			{
				$counter=$counter+1;
			}
			if($counter==3)
			{
				echo $value;
				break;
			}
			
		}

}
find_3_prime();

?>