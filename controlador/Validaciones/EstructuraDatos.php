<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

$dataCamp = [
	[$name, "name", "String"],
	[$email, "email", "email"],
	[$website, "website", "URL"],
	[$comment, "comment", "Free"],
	[$gender, "gender", "NA"]
];

$dataRequired = [
	[$name, "Name is required"],
	[$email, "Email is required"],
	[$website, ""],
	[$comment, ""],
	[$gender, "Gender is required"]
];

$dataTest = [
	[$name, ""],
	[$email, ""],
	[$website, ""],
	[$comment, ""],
	[$gender, ""]
];

$dataError = [
	[$name, ""],
	[$email, ""],
	[$website, ""],
	[$comment, ""],
	[$gender, ""]
];
?>