<?php 
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=kriteria&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteKriteria($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('kriteria',$nama);
	}

	include('header.php');
?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<h2 class="ui header">Kriteria (C)</h2>

					<table class="ui celled table">
						<thead>
							<tr>
								<th class="collapsing">No</th>
								<th colspan="2">Nama Kriteria</th>
							</tr>
						</thead>
						<tbody>

							<?php
			// Menampilkan list kriteria
			$query = "SELECT id,nama FROM kriteria ORDER BY id";
			$result	= mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
		?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $row['nama'] ?></td>
								<td class="right aligned collapsing">
									<form method="post" action="kriteria.php">
										<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
										<button type="submit" name="edit" class="button is-small is-info is-light"><i
												class="right edit icon"></i>&nbsp;&nbsp;Edit</button>
										<button type="submit" name="delete"
											class="button is-small is-danger is-light"><i
												class="right remove icon"></i>&nbsp;&nbsp;Delete</button>
									</form>
								</td>
							</tr>


							<?php } ?>


						</tbody>
						<tfoot class="full-width">
							<tr>
								<th colspan="3">
									<a href="tambah.php?jenis=kriteria">
										<div style="float: right;" class="button is-warning is-light">
											<i class="plus icon"></i>&nbsp;&nbsp;Tambah
										</div>
									</a>
								</th>
							</tr>
						</tfoot>
					</table>

					<br>
					<form action="alternatif.php">
						<button class="button is-grey is-light" style="float: right;">
							<i class="right arrow icon"></i>&nbsp;&nbsp;
							Lanjut
						</button>
					</form>

				</section>
</main>
<?php include('footer.php'); ?>