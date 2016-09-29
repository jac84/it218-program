<?php

	echo 'Hello World!';
	$myvar = 'text';
	echo '<br>';

	echo '$myvar'; //prints $myvar
	echo '<br>';
	echo "$myvar"; //prints 'text'

	echo '<br>';

	//example of php array
	$myarray = array(); //create empty array
	$myarray[] = 'some value 1'; //push a value into array
	$myarray[] = 'some value 2';
	$myarray[] = 'some value 3';

	print_r($myarray); //IMPORTANT: View inside an object or array
	//print works the same as echo, print_r is different

	echo '<br>';

	$myAssoc = array('value1' => $myarray, 'value2' => $myarray); //associative array has named key
	//associative arrays can embed array within itself
	print_r($myAssoc);
?>
