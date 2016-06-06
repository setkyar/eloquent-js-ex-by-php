<?php 

function makeTriangle($size)
{
	for ($line='#'; strlen($line) < $size; $line .="#") { 
		echo "$line <br/>";
	}
}

return makeTriangle(7);