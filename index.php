<?php
echo "Composer Practice<br/>";

require("vendor/autoload.php");

$myarray = array(
			"person" => array(
						"fname" => "Ajay",
						"lname" => "Parmar"
					)
			);

$fname = array_get($myarray,"person.fname");
echo $fname;

?>