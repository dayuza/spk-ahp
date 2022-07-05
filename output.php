<?php
	include('header.php');

?>
<main class="bd-docs-main">
	<div class="hero-body">

		<div class="container">

			<div class="bd-hero-body">
				<section class="hero bd-hero bd-is-basic">
					<h3 class="ui header">Matriks Perbandingan Berpasangan</h3>
					<table class="ui collapsing celled blue table">
						<thead>
							<tr>
								<th>Kriteria</th>
								<?php
	for ($i=0; $i <= ($n-1); $i++) { 
		echo "<th>".getKriteriaNama($i)."</th>";
	}
?>
							</tr>
						</thead>
						<tbody>
							<?php
	for ($x=0; $x <= ($n-1); $x++) { 
		echo "<tr>";
		echo "<td>".getKriteriaNama($x)."</td>";
			for ($y=0; $y <= ($n-1); $y++) { 
				echo "<td>".round($matrik[$x][$y],5)."</td>";
			}

		echo "</tr>";
	}
?>
						</tbody>
						<tfoot>
							<tr>
								<th>Jumlah</th>
								<?php
		for ($i=0; $i <= ($n-1); $i++) { 
			echo "<th>".round($jmlmpb[$i],5)."</th>";
		}
?>
							</tr>
						</tfoot>
					</table>


					<br>

					<h3 class="ui header">Matriks Nilai Kriteria</h3>
					<table class="ui celled red table">
						<thead>
							<tr>
								<th>Kriteria</th>
								<?php
	for ($i=0; $i <= ($n-1); $i++) { 
		echo "<th>".getKriteriaNama($i)."</th>";
	}
?>
								<th>Jumlah</th>
								<th>Priority Vector</th>
							</tr>
						</thead>
						<tbody>
							<?php
	for ($x=0; $x <= ($n-1); $x++) { 
		echo "<tr>";
		echo "<td>".getKriteriaNama($x)."</td>";
			for ($y=0; $y <= ($n-1); $y++) { 
				echo "<td>".round($matrikb[$x][$y],5)."</td>";
			}

		echo "<td>".round($jmlmnk[$x],5)."</td>";
		echo "<td>".round($pv[$x],5)."</td>";

		echo "</tr>";
	}
?>

						</tbody>
						<tfoot>
							<tr>
								<th colspan="<?php echo ($n+2)?>">Principe Eigen Vector (λ maks)</th>
								<th><?php echo (round($eigenvektor,5))?></th>
							</tr>
							<tr>
								<th colspan="<?php echo ($n+2)?>">Consistency Index</th>
								<th><?php echo (round($consIndex,5))?></th>
							</tr>
							<tr>
								<th colspan="<?php echo ($n+2)?>">Consistency Ratio</th>
								<th><?php echo (round(($consRatio * 100),2))?> %</th>
							</tr>
						</tfoot>
					</table>

					<?php
	if ($consRatio > 0.1) {
?>
					<article class="message is-danger">
						<div class="message-header">
							<i class="warning circle icon">&nbsp;&nbsp;Warning</i><i class="close icon"></i></div>
							<div class="message-body">
								<div class="content">
									<p> Nilai Consistency Ratio melebihi <strong>10%</strong> !!!</p>
									<p>Mohon input kembali tabel perbandingan...</p>
								</div>
							</div>
						</div>
					</article>

			<br>

			<a href='javascript:history.back()'>
				<button class="button is-grey is-light">
					<i class="left arrow icon"></i>&nbsp;&nbsp;
					Kembali
				</button>
			</a>

			<?php
	} else {

?>
			<br>

			<a href="bobot.php?c=1">
				<button class="button is-grey is-light" style="float: right;">
					<i class="right arrow icon"></i>&nbsp;&nbsp;
					Lanjut
				</button>
			</a>

			<?php 
	}
	echo "</section>";
	include('footer.php');
?>
			</section>
</main>