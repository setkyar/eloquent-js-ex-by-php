<?php

function makeGrid($size)
{
	$board = "";

	for ($y=0; $y < $size; $y++) { 
		for ($x=0; $x < $size; $x++) { 
			if (($x + $y) % 2 == 0) 
				$board .= "&nbsp;";
			else 
				$board .= "#";
		}
		$board .= "<br>";
	}

	echo "$board";
}

makeGrid(8);