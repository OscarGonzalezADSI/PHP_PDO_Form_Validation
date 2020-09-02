<?php

	/*-------------------------------------------------------------
	  Recepcion de datos del formulario
	//-------------------------------------------------------------*/
	
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
	
	/*-------------------------------------------------------------
	  valida campos obligatorios e
	  impide envio de datos con excepciones personalizadas
	//-------------------------------------------------------------*/	
	
	$variable[0] = $name;
	$variable[1] = $email;
	$variable[2] = $gender;
	
	try {
		$rrr = Evaluar222($variable);
		$o = new ProbarExcepcion($rrr);
		
		/* -----------------------------------------------------------
	    Si todo esta "OK" hasta aqui, envia los datos.
	    // ---------------------------------------------------------*/		
		echo "<h2>Your Input:</h2>";
		echo $name . "<br>";
		echo $email . "<br>";
		echo $website . "<br>";
		echo $comment . "<br>";
		echo $gender . "<br>";
		//echo $clave;
		?>
		<form method="post" action="../modelo/PHP_PDO/Objetos/InsertSTMT.php">  
		  <input type="hidden" name="nameEnv" value="<?php echo $name;?>">
		  <input type="hidden" name="emailEnv" value="<?php echo $email;?>">
		  <input type="hidden" name="websiteEnv" value="<?php echo $website;?>">
		  <input type="hidden" name="commentEnv" value="<?php echo $comment;?>">
		  <input type="hidden" name="genderEnv" value="<?php echo $gender;?>">
		  <input type="hidden" name="clave" value="<?php echo $clave;?>">
		  <input type="submit" name="submit" value="Submit">  
		</form>
		<?php
		// -----------------------------------------------------------
		
	} catch (MiExcepcion $e) {      // Será atrapada
		echo "<br>";
		echo "<br>-----------------------------------------------<br>";
		echo "Atrapada mi excepción";
		echo "<br>".$e;
		echo "<br>-----------------------------------------------<br>";
		echo "<br>";
		$e->funcionPersonalizada();
	} catch (Exception $e) {        // Skipped
		echo "<br>";
		echo "<br>-----------------------------------------------<br>";
		echo "Atrapada la Excepción Predeterminada\n", $e;
		echo "<br>-----------------------------------------------<br>";
		echo "<br><br><br>";
	}
?>