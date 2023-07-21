<?php include "./controller/calculationController.php" ?>

<form method="post">
	<h2>Calculadoras de entradas</h2>
	<div class="form__row">
		<div>
			<label for="person-number">Número de personas</label>
			<input
				id="person-number" 
				type="text"
				name="number_person"
				placeholder="5"
				>
		</div>

		<div>
			<label for="membership-type">Tipo de afiliación</label>
			<input
				id="membership-type" 
				type="text"
				name="membership_type"
				placeholder="A"
				>
		</div>
	</div>
	<button>Cálcular</button>
</form>