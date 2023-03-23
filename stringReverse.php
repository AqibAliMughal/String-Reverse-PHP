<?php
/* ================ STRING REVERSE ================ */
echo  "<h3>String Reverse</h3>";
function myStrReverse($string) // Function Declare
{
	$reversedWord ="";
	for ($y=-1; isset($string[$y]) ; $y--) { 
		$reversedWord .= $string[$y];
	}
	echo $reversedWord;
}
myStrReverse('Reversed'); // FUNCTION CALL
echo "<hr/>";
?>