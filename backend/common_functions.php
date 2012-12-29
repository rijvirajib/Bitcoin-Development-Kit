<?php


/*
	Common Functions
*/



// Header/Footer Include functions
function bdk_header_include(){
	global $bdk_settings;
	include($bdk_settings["directory"]."backend/includes/header.php");
}

function bdk_footer_include(){
	global $bdk_settings;
	include($bdk_settings["directory"]."backend/includes/footer.php");
}