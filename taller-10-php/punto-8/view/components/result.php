<div>
	<p>Resultado: </p>
	<?php if ($message != "") { ?>
		<p> <?php echo $message; ?> </p>
	<?php } ?>

	<h3> <?php echo "$" . number_format($totalPrice); ?> </h3>
</div>