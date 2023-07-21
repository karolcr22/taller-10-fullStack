<?php include "./controller/changeAddController.php" ?>

<section>
	<h2>Segunda suma de números</h2>
	<div class="numbers_content">
		<h3> <?php echo FIXED_NUMBER; ?></h3>
		<h3>+</h3>
		<h3><?php echo $number; ?></h3>
	</div>

	<h3>El resultado es:</h3>
	<h3> <?php echo $result; ?> </h3>
</section>