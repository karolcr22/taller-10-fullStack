<?php  
	$message = "";


	if (isset($_POST["person_age"])) {
		$agePerson = intval($_POST["person_age"]);

		if ($agePerson >= 18){
		 	echo "Usted es mayor de edad";
		}

		} else {
			echo "Usted no es mayor de edad";
	}

?>