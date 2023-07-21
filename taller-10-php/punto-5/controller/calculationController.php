<?php 

	const TICKET_PRICE = 25000;
	$totalPrice = 0; 
	$message = "";


	if (isset($_POST["number_person"]) && isset($_POST["membership_type"])) {
		$numberPerson = intval($_POST["number_person"]);
		$membershipType = $_POST["membership_type"];

		$totalPrice = $numberPerson * TICKET_PRICE;

		if (strtoupper($membershipType) == "A" || strtoupper($membershipType) == "B")  {
		$totalPrice = $totalPrice - ($totalPrice * 0.3);
		}
	} else {
		$message ="Usted no cuenta con membresia, por lo tanto no aplica el descuento.";
	}

	

?>