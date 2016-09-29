<?php

	echo 'Hello World!';
	$myvar = 'hey some text';
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

	echo '<br>';

	print_r($myAssoc['value1']); //prints value in key 'value1'

	echo '<br>';

	class myclass { //class = schematic/blueprint for an object
		public $myPublic;
		private $myPrivate;
		protected $myProtected;

		//review SCOPE OF VARIABLES
		//vars in class = properties. vars outside class = vars
		public function __construct(){ //~*magic method*~ automatically does stuff
		/*"$this" is an internal reference to the object within a class. -> points to a property or method being accessed within the object*/
			$this->myPublic = 1; //can be accessed externally outside of class
			$this->myPrivate = 2; //only accessed inside class; hidden
			$this->myProtected = 3; /*inbetween public & private. can be accessed within classes and
			subclasses but cannot be accessed externally when obj is instantiated
			think like a jail cell*/

			$this->sayHello('Jay'); //call a method within an object & pass a var
		}

	echo '<br>';

		public function sayHello($name){
			echo 'Hello ', $name;
		}
	}

	$obj = new myclass; //instantiate a new class object
	print_r($obj); //print_r also shows objects
?>
