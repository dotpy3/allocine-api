<?php

require_once(__DIR__.'/allocine.class.php');
require_once(__DIR__.'/header.php');

/*
	values:
	- lat : latitude
	- long : longitude
	- radius : radius around the localization in km
		(between 1 and 500)

	or

	- theaters : theater codes, separated by a comma
		(e.g. "P0728,P0093")

	or

	- location : string representing the theater
		(e.g. "ugc mondeville")

	or

	- zip : zip code representing the town
		(e.g. "14000")

	and

	- movie : movie code
*/

isset($_GET['movie']) ?
	$params = ['movie' => $_GET['movie']]
	: $params = [];

if (isset($_GET['zip']))
{
	$params['zip'] = $_GET['zip'];
	$result = $allocine->showTimeList($params);
}
	elseif (isset($_GET['lat'])
		&& isset($_GET['long'])
		&& isset($_GET['radius']))
{
	foreach ($i in array('lat','long','radius')) $params[$i] = $_GET[$i];
	$result = $allocine->showTimeList($params);
}
	elseif (isset($_GET['theaters']))
{
	$params['theaters'] = $_GET['theaters'];
	$result = $allocine->showTimeList($params);
}
	elseif (isset($_GET['location']))
{
	$params['location'] = $_GET['location'];
	$result = $allocine->showTimeList($params);
}
	else
{
	$result = "{'feed': 'notFound'}";
}

echo $result;