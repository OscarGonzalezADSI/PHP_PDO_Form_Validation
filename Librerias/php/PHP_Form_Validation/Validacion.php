<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
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
	
	$dataPOST = [
		[$name, empty($_POST["name"])],
		[$email, empty($_POST["email"])],
		[$website, empty($_POST["website"])],
		[$comment, empty($_POST["comment"])],
		[$gender, empty($_POST["gender"])]
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


	for ($i=0; count($dataPOST)-$i; $i++){
		if ($dataPOST[$i][1]) {
			echo $dataError[$i][1] = $dataRequired[$i][1];
		} else {
			$data = $dataCamp[$i][1];
			$dataTest[$i][1] = test_input($_POST[$data]);
			if($dataCamp[$i][2]== "String"){
				$Format = test_Format($dataTest[$i][1]);
				if($Format!==""){
					$dataError[$i][1] = $Format;
				}
			}elseif($dataCamp[$i][2]== "email"){
				$Email = test_Email($dataTest[$i][1]);
				if($Email!==""){
					$dataError[$i][1] = $Email;
				}
			}elseif($dataCamp[$i][2]== "URL"){
				$URL = test_URL($dataTest[$i][1]);
				if($URL!==""){
					$dataError[$i][1] = $URL;
				}
			}			
			
		}
	}

$name = $dataTest[0][1];
$email = $dataTest[1][1];
$website = $dataTest[2][1];
$comment = $dataTest[3][1];
$gender = $dataTest[4][1];

$nameErr = $dataError[0][1];
$emailErr = $dataError[1][1];
$websiteErr = $dataError[2][1];
$commentErr = $dataError[3][1];
$genderErr = $dataError[4][1];	




	
	
}