<?php  

	$sum = 0;

	for ($i = 0; $i <= 100; $i += 2) {
		$sum = $sum + $i; ?>
		<tr>
			<td> <?php echo $i; ?> </td>
		</tr>
<?php } ?>		