<?php

require_once(__DIR__.'/allocine.class.php');
require_once(__DIR__.'/header.php');

/*
	values:
	- string : string to search
*/

isset($_GET["string"]) ?
	$result = $allocine->search($_GET["string"]) :
	$result = "{\"feed\": 'noParameter'}";

echo $result;