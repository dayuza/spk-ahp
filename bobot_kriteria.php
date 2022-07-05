<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');
?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<h2 class="ui header">Perbandingan Kriteria</h2>
					<?php showTabelPerbandingan('kriteria','kriteria'); ?>
				</section>
</main>
				<?php include('footer.php'); ?>