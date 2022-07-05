<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis']) && isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$jenis	= $_GET['jenis'];

		// hapus record
		$query 	= "SELECT nama FROM $jenis WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);
		
		while ($row = mysqli_fetch_array($result)) {
			$nama = $row['nama'];
		}
	}

	if (isset($_POST['update'])) {
		$id 	= $_POST['id'];
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		$query 	= "UPDATE $jenis SET nama='$nama' WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);

		if (!$result) {
			echo "Update gagal";
			exit();
		} else {
			header('Location: '.$jenis.'.php');
			exit();
		}
	}

	include('header.php');
?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<div class="bd-hero-heading">
					<h1 class="title algolia-lvl0">Edit <?php echo $jenis?></h1>

					<form class="ui form" method="post" action="edit.php">
						<div class="inline field">
							<label>Nama <?php echo $jenis ?></label>
							<input type="text" name="nama" value="<?php echo $nama?>">
							<input type="hidden" name="id" value="<?php echo $id?>">
							<input type="hidden" name="jenis" value="<?php echo $jenis?>">
						</div>
						<br>
						<input class="ui green button" type="submit" name="update" value="UPDATE">
					</form>
				</section>
</div>
</div>
</div>
</main>

				<?php include('footer.php'); ?>