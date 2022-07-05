<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<h2 class="ui header">Analitycal Hierarchy Process (AHP)</h2>

					<p>Aplikasi Sistem Pendukung Keputusan ini dibuat dengan metode Analytic Hierarchy Process (AHP),
						dikembangkan dengan bahasa Php dengan Modern CSS Framework yang berbasis Flex Box on Rails dan
						Framework ini di bangun dengan Ruby dan Jekyll tool.</p>

					<br>

					<p>AHP sering digunakan sebagai metode pemecahan masalah dibanding dengan metode yang lain karena
						alasan-alasan sebagai berikut :</p>

					<ol class="ui list">
						<li>Struktur yang berhirarki, sebagai konsekuesi dari kriteria yang dipilih, sampai pada
							subkriteria
							yang paling dalam.</li>
						<li>Memperhitungkan validitas sampai dengan batas toleransi inkonsistensi berbagai kriteria dan
							alternatif yang dipilih oleh pengambil keputusan.</li>
						<li>Memperhitungkan daya tahan output analisis sensitivitas pengambilan keputusan.</li>
					</ol>

					<br>

					<h3 class="ui header">Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
					<table class="ui collapsing striped blue table">
						<thead>
							<tr>
								<th>Nilai Numerik</th>
								<th>Tingkat Kepentingan <em>(Preference)</em></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="center aligned">1</td>
								<td>Sama pentingnya <em>(Equal Importance)</em></td>
							</tr>
							<tr>
								<td class="center aligned">2</td>
								<td>Sama hingga sedikit lebih penting</td>
							</tr>
							<tr>
								<td class="center aligned">3</td>
								<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
							</tr>
							<tr>
								<td class="center aligned">4</td>
								<td>Sedikit lebih hingga jelas lebih penting</td>
							</tr>
							<tr>
								<td class="center aligned">5</td>
								<td>Jelas lebih penting <em>(Materially more importance)</em></td>
							</tr>
							<tr>
								<td class="center aligned">6</td>
								<td>Jelas hingga sangat jelas lebih penting</td>
							</tr>
							<tr>
								<td class="center aligned">7</td>
								<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
							</tr>
							<tr>
								<td class="center aligned">8</td>
								<td>Sangat jelas hingga mutlak lebih penting</td>
							</tr>
							<tr>
								<td class="center aligned">9</td>
								<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
							</tr>
						</tbody>
					</table>

				</section>
			</div>
		</div>

</main>

<?php include('footer.php'); ?>