<form method="post">
	<h2>Seleccione las siguientes opciones para realizar la operación</h2>
	<div class="form__row">
		<div>
			<label for="first-number">Digite el primer número</label>
			<input
				id="first-number" 
				type="text"
				name="first_number"
				placeholder="7"
				>
		</div>

		<div>
			<label for="second-number">Digite el segundo número</label>
			<input
				id="second-number" 
				type="text"
				name="second_number"
				placeholder="13"
				>
		</div>

		<div>
			<label for="operation-type">Sellecione la operación </label>
			<select 
				name="operation_type" 
				id="operation-type">
				
				<option value="1">Suma</option>
				<option value="2">Resta</option>
				<option value="3">Multiplicación</option>
				<option value="4">División</option>
			</select>
		</div>
	</div>
	<button>Cálcular</button>
</form>