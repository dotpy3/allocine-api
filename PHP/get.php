<?php

require_once(__DIR__.'/allocine.class.php');
require_once(__DIR__.'/header.php');

define('ALLOCINE_PARTNER_KEY', '100043982026');
define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');

$allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);

isset($_GET["movieid"]) ? $result = $allocine->get($_GET["movieid"]) : $result = "{\"movie\": 'noParameter'}";

echo $result;