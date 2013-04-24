<?php
require_once 'ListDisplay.php';
require_once 'TableDisplay.php';

	$data = array('Design Pattern',
			  	  'Gang of Four',
			  	  'Template Method 1',
			  	  'Template Method 2');

	$display1 = new ListDisplay($data);
	$display2 = new TableDisplay($data);

	$display1->display();

	echo '<br>';

	$display2->display();
?>