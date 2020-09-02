<?php
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function test_Format($data) {
	// check if name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z-' ]*$/",$data)) {
	  return $nameErr = "Only letters and white space allowed";
	}else{
	  return $nameErr = "";
	}
}

function test_Email($data) {
	if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
		return $emailErr = "Invalid email format";
	}else{
		return $emailErr = "";
	}
}

function test_URL($data) {
	// check if URL address syntax is valid
	$Caracters = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
	if (!preg_match($Caracters, $data)) {
		return $websiteErr = "Invalid URL";
	}else{
		return $websiteErr = "";
	}   
}
?>