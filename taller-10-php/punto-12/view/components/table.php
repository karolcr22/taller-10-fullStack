<div class="table-container">
	<table>
		<tr>
			<th>Operación</th>
			<th>Resultado</th>
		</tr>

		<?php  
			$number = $_GET["number"];

			for ($i = 0; $i <= 30; $i++) { ?>

		<tr>
			<td> <?php echo $number . "  X  " . $i; ?> </td>
			<td> <?php echo $number * $i; ?> </td>
		</tr>

		<?php } ?>	
	</table>
</div>

<div class="go-back">
		<a href="./form.php">Volver a calcular</a>
</div>