<?php
	include('config.php');
	include('fungsi.php');

	$jenis = $_GET['c'];

	include('header.php');
?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<section class="content">
						<h2 class="ui header">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis-1) ?>
						</h2>
						<?php showTabelPerbandingan($jenis,'alternatif'); ?>
					</section>
</main>
					<?php include('footer.php'); ?>