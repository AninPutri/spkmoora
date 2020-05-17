<h2>Laporan Alternatif</h2>
<table border="1" width="100%" style="page-break-after: always;">
	<thead>
		<tr>
			<td>Alternatif</td>
			<td>Kriteria</td>
			<td>Niali</td>
		</tr>
	<thead>
	<tbody>
	
		<?php $a = 1; $tmp_nilai = 0; foreach ($alternatif as $value) { ?>
			<tr>
				<td><?= $value->nama_alternatif;?></td>
				<td><?= $value->nama_kriteria;?></td>
				<td><?= $value->nilai;?></td>
			</tr>
		<?php $a++;} ?>
	</tbody>
</table>