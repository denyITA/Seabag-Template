<?php

if (!isset($_GET["choose"])) {
	header('location: http://'.$_SERVER["SERVER_NAME"]);
}

function array_languages() {
	$countries = array
	(
		'EU' => 'Europa',
		'AM' => 'America',
		'AS' => 'Asia',
		'OC' => 'Oceania',
		'AF' => 'Africa',
	);

	return $countries;
}
$lingue = array_languages();
foreach ($lingue as $key => $value) {
	echo '<option value='.$key.'>'.htmlspecialchars($value, ENT_QUOTES).'</option>';
}
?>
