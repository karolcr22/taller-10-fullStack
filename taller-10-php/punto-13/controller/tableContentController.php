<?php  
	$numbers = array(3, 6, 12, 4, 9, 11);
	$sum = 0;

	foreach ($numbers as $number) { 
		$sum = $sum + $number;
?>
		<tr>
			<td> <?php echo $number; ?> </td>>
		</tr>
<?php } ?>		