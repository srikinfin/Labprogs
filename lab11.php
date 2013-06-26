<?php

setcookie('lastVisit',date("G:i - d/m/y"));
if(isset($_COOKIE['lastVisit']))
{
	$visit=$_COOKIE['lastVisit'];
	echo "your last visit was ".$visit;
}
else   "you have some unopened cookies";

?>

