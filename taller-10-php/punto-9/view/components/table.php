<div class="table-container">
	<table>
		<tr>
			<th>Operación</th>
			<th>Resultado</th>
		</tr>

		<?php  
			$number = $_GET["number"];
			$i = 0;
			while ($i <= 30) { ?>

		<tr>
			<td> <?php echo $number . "  X  " . $i; ?> </td>
			<td> <?php echo $number * $i; ?> </td>
		</tr>

		<?php
			$i++; 
			} 
		?>

	</table>
</div>

<div class="go-back">
		<a href="./form.php">Volver a calcular</a>
</div>