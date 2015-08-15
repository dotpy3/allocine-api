<?php

require_once(__DIR__.'/allocine.class.php');
require_once(__DIR__.'/header.php');

isset($_GET["movieid"]) ? $result = $allocine->get($_GET["movieid"]) : $result = "{\"movie\": 'noParameter'}";

echo $result;