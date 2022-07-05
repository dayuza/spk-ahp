<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		tambahData($jenis,$nama);

		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>

<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<div class="bd-hero-heading">
						<h1 class="title algolia-lvl0">
							<p>Tambah <?php echo $jenis?></p>
						</h1>

						<form class="ui form" method="post" action="tambah.php">
							<div class="control">
								<label class="label">Nama <?php echo $jenis?></label>
								<input class="input is-primary" type="text" name="nama"
									placeholder="<?php echo $jenis?> baru">
								<input type="hidden" name="jenis" value="<?php echo $jenis?>">
							</div>
							<br>
							<input class="button is-link" type="submit" name="tambah" value="Simpan">
						</form>
				</section>
</main>
<?php include('footer.php'); ?>