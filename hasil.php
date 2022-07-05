<?php

include('config.php');
include('fungsi.php');

// menjalankan perintah tolak
if(isset($_POST['delete'])) {
	$id = $_POST['id'];
	deleteAlternatif($id);
}

// menjalankan perintah hapus k_m
if(isset($_POST['hapus'])) {
	$id = $_POST['id'];
	deletekm($id);
}

if(isset($_POST['terima'])){
	$id_pilihan = $_POST['pilihan'];

	foreach ($id_pilihan as $result_id) {
		$data = $koneksi->query("SELECT * FROM alternatif,ranking WHERE id_alternatif='$result_id' ");
		WHILE ($dari = $data->fetch_assoc()){
		$re_id = $dari['id_alternatif'];
		$re_nilai = $dari['nilai'];
		$masuk = $koneksi->query("INSERT INTO `k_m`(`id_alternatif`, `nilai`) VALUES ('$re_id','$re_nilai')");

		if($masuk){
			$id = $_POST['id'];
			deleteAlternatif($id);
			
			print '
				<script>
				window.location.href="?sucees";
				</script>
			';
			}else{
					print '
						<script>
						window.location.href="?failed";
						</script>
					';

					}
				}
	}
}


// menghitung perangkingan
$jmlKriteria 	= getJumlahKriteria();
$jmlAlternatif	= getJumlahAlternatif();
$nilai			= array();

// mendapatkan nilai tiap alternatif
for ($x=0; $x <= ($jmlAlternatif-1); $x++) {
	// inisialisasi
	$nilai[$x] = 0;

	for ($y=0; $y <= ($jmlKriteria-1); $y++) {
		$id_alternatif 	= getAlternatifID($x);
		$id_kriteria	= getKriteriaID($y);

		$pv_alternatif	= getAlternatifPV($id_alternatif,$id_kriteria);
		$pv_kriteria	= getKriteriaPV($id_kriteria);

		$nilai[$x]	 	+= ($pv_alternatif * $pv_kriteria);
	}
}

// update nilai ranking
for ($i=0; $i <= ($jmlAlternatif-1); $i++) { 
	$id_alternatif = getAlternatifID($i);
	$nama = getAlternatifNama($i);
	$query = "INSERT INTO ranking VALUES ($id_alternatif, $nilai[$i]) ON DUPLICATE KEY UPDATE nilai=$nilai[$i]";
	$result = mysqli_query($koneksi,$query);
	if (!$result) {
		echo "Gagal mengupdate ranking";
		exit();
	}
}

// update nilai k_m

include('header.php');

?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<h2 class="ui header">Hasil Perhitungan</h2>
					<table class="ui celled table">
						<thead>
							<tr>
								<th>Overall Composite Height</th>
								<th>Priority Vector (rata-rata)</th>
								<?php
			for ($i=0; $i <= (getJumlahAlternatif()-1); $i++) { 
				echo "<th>".getAlternatifNama($i)."</th>\n";
			}
			?>
							</tr>
						</thead>
						<tbody>

							<?php
			for ($x=0; $x <= (getJumlahKriteria()-1) ; $x++) { 
				echo "<tr>";
				echo "<td>".getKriteriaNama($x)."</td>";
				echo "<td>".round(getKriteriaPV(getKriteriaID($x)),5)."</td>";

				for ($y=0; $y <= (getJumlahAlternatif()-1); $y++) { 
					echo "<td>".round(getAlternatifPV(getAlternatifID($y),getKriteriaID($x)),5)."</td>";
				}


				echo "</tr>";
			}
		?>
						</tbody>

						<tfoot>
							<tr>
								<th colspan="2">Total</th>
								<?php
			for ($i=0; $i <= ($jmlAlternatif-1); $i++) { 
				echo "<th>".round($nilai[$i],5)."</th>";
			}
			?>
							</tr>
						</tfoot>

					</table>


					<h2 class="ui header">Perangkingan</h2>
					<table class="ui celled collapsing table">
						<thead>
							<tr>
								<th>Peringkat</th>
								<th>Alternatif</th>
								<th>Nilai</th>
								<th>Pilih</th>
								<th>Keputusan Manager</th>
							</tr>
						</thead>
						<tbody>
							<?php

				$query  = "SELECT * FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC";
				$result = mysqli_query($koneksi, $query);

				$i = 0;
				while ($row = mysqli_fetch_array($result)) {
					$i++;
				?>
							<tr>
								<?php if ($i == 1) {
						echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>".$i."</td>";
					}

					?>
								<form method="post" action="hasil.php">
									<input type="hidden" name="id" value="<?php echo $row['id_alternatif'] ?>">
									<td><?php echo $row['nama'] ?></td>
									<td><?php echo $row['nilai'] ?></td>
									<td>
										<center><input type="checkbox" name="pilihan[]"
												value="<?= $row['id_alternatif']; ?>"></center>
									</td>
									<td class="right aligned collapsing">
										<button type="submit" name="terima" class="button is-small is-info is-light"><i
												class="right edit icon"></i>&nbsp;&nbsp;Setuju</button>
										<button type="submit" name="delete"
											class="button is-small is-danger is-light"><i
												class="right remove icon"></i>&nbsp;&nbsp;Tolak</button>

									</td>
								</form>


							</tr>


							<?php } ?>
						</tbody>
					</table>

					<h2 class="ui header">Hasil Keputusan Manager</h2>
					<table class="ui celled collapsing table">
						<thead>
							<tr>
								<th>Peringkat</th>
								<th>Nilai</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php	
				$query  = "SELECT * FROM k_m WHERE k_m.id_alternatif ORDER BY nilai DESC";
				$result = mysqli_query($koneksi, $query);
						$result = mysqli_query($koneksi, $query);
						$i = 0;

						while ($row = mysqli_fetch_array($result)) {
							$i++;
				?>

							<tr>
								<?php if ($i == 1) {
						echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>".$i."</td>";
					}
					?>
								<td><?php echo $row['nilai'] ?></td>
								<td class="right aligned collapsing">
									<form method="post" action="hasil.php">
										<input type="hidden" name="id" value="<?php echo $row['id_alternatif'] ?>">
										<button type="submit" name="hapus" class="button is-small is-danger is-light"><i
												class="right remove icon"></i>&nbsp;&nbsp;Hapus</button>
									</form>
								</td>
							</tr>
							<?php } ?>
						</tbody>



					</table>
				</section>
</main>
<?php include('footer.php'); ?>