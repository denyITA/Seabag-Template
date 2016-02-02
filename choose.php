<?php
$lang = $_GET["array_languages"];
	if($lang === "AM")
	{
		header("location:http://shop.seabag.us");
	}
	else {
		header("location:http://shop.seabag.it");
	}
?>
