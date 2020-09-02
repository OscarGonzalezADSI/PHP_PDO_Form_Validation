<?php



function Evaluar($variable){
	switch ($variable) {
		case ""  : $rrr = 1; break;
		default  : $rrr = 0; break;
	}
	return $rrr;
}

function Evaluar222($variable){
	$rrr = 0;
	
	for($i=0; count($variable) > $i; $i++){
		$rrr += Evaluar($variable[$i]);
	}
	
	if($rrr > 0){
		$rrr = 1;
	}		
	return $rrr;
}

?>