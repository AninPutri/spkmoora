
<div class="container">
            <br><br> 
	<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
	<div class="panel panel-default">
	  <div class="panel-heading"><B>PERHITUNGAN</B></div>
	  <div class="panel-body">
	  	<h2>Normalisasi</h2>
	  	<table border="1" width="100%">
	  		<tr>
	  			<td rowspan="2">Kriteria</td>
	  			<td colspan="<?php echo count($alternatif)?>">Alternatif</td>
	  		</tr>
	  		<tr>
	  			<?php for ($i=1; $i <= count($alternatif); $i++) { ?>
            <td><?php echo $alternatif[$i][0]; ?></td>
          <?php } ?>
	  		</tr>
	  		<?php
	  		for ($i=1; $i <= count($normalisasi[1]); $i++) { ?> 
	  		<tr>
	  			<td><?php echo $alternatif[1][$i]; ?></td>
	  			<?php for ($z=1; $z <= count($alternatif); $z++) { ?>
	  				<td><?php if(!empty($normalisasi[$z][$i])){echo $normalisasi[$z][$i];}else{echo '0';} ?></td>
  				<?php } ?>
  			</tr>
  			<?php } ?>
	  	</table>

	  	<hr>
	  	<h2>Optimasi</h2>
	  	<table border="1">
	  		<tr>
	  			<td>Alternatif</td>
	  			<td>Optimasi</td>
	  		</tr>
	  		<?php $rank = array();for ($i=1; $i <= count($alternatif); $i++) {?>
	  		<tr>
	  			<td><?php echo $alternatif[$i][0]; ?></td>
	  			<td><?php echo $optimasi[$i]; ?></td>
	  		</tr>
              <?php 
            $dtmp = array('alternatif' => $alternatif[$i][0],'optimasi' => $optimasi[$i]);
            array_push($rank,$dtmp);
        } ?>
	  	</table>
        <hr>
	  	<h2>Ranking</h2>
	  	<table border="1">
	  		<tr>
                <td>Ranking</td>
	  			<td>Alternatif</td>
	  			<td>Optimasi</td>
	  		</tr>
              <?php $rank_sort = rsort($rank); 
              $i = 1 ;foreach ($rank as $key) { ?>
	  		<tr>
                <td><?php echo $i; ?></td>
	  			<td><?php echo $key['alternatif']; ?></td>
	  			<td><?php echo $key['optimasi']; ?></td>
	  		</tr>
	  		<?php $i++; } ?>
	  	</table>
	  	<hr>
      
	  	<h2>Kesimpulan</h2>
	  	<p><?php echo $perangkingan; ?></p>
	  </div>
	</div>
	</div>
</div><!-- /.container -->

<!-- ISI TTP -->

</body>

   

</html>
