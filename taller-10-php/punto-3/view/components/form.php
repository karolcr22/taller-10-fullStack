<?php include "./controller/calculationController.php" ?>

<form method="post">
	<h2>Calculadora de sumas</h2>
	<div class="form__row">
		<div>
			<label for="first-number">Digite el primer número</label>
			<input
				id="first-number" 
				type="text"
				name="first_number"
				placeholder="50"
				>
		</div>

		<div>
			<label for="second-number">Digite el segundo número</label>
			<input
				id="second-number" 
				type="text"
				name="second_number"
				placeholder="70"
				>
		</div>
	</div>
	<button>Sumar</button>
</form>