<?php

/*Global variable declaration
 * The variable $name will return error
 * because the variable has beem declared outside of the function
 * hence cannot be used within the function
*/

$name = "Muideen";
function text(){
	echo $name;
}
text();

/*how to declare the global variable using the global keyword*/
$name ="Olamide";

	function text2(){
		global $name;
		echo $name;
	}
text2();

/*local scope variable
 * this will return the variable value
 * because it was declared within that function
*/ 

function text3(){
	$name ="Ayomide";
	echo $name;
}
text3();

/*static variable declaration
 *
 *
 */
function state(){
	static $age =1;
	echo $age;
	$age++;
}
state();
state();
state();

?>
