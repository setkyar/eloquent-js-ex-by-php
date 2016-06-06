<?php

function fizzBuzz($max)
{
	for ($i=0; $i < $max; $i++) { 
		$output = '';
		if ($i % 3 === 0) 
			$output .= "Fizz";
		if ($i % 5 === 0)
			$output .= "Buzz";
		
		if ($output !== '') {
			echo "$output<br/>";
		} else {
			echo "$i<br/>";
		}
	}
}

fizzBuzz(100);