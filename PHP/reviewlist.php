<?php

require_once(__DIR__.'/allocine.class.php');
require_once(__DIR__.'/header.php');

/*
	values:
	- code : movie code
	- filter : either 'desk-press' (press) or 'public'
*/

(isset($_GET['code']) && isset($_GET['filter'])) ?
	$result = $allocine->reviewList($_GET['code'], $_GET['filter'])
	: $result = "{'movie': 'notFound'}";

echo $result;