
<div class="container">
            <br><br> 
	<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
	<div class="panel panel-default">
	  <div class="panel-heading"><B>PERHITUNGAN</B></div>
	  <div class="panel-body">
	  	<h2>Penilaian</h2>
	  	<table border="1" width="100%">
	  		<tr>
			  <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th>C<?= $key->id_kriteria ?></th>
              <?php endforeach ?>
	  		</tr>
	  		<?php if ($alternatif==NULL): ?>
              <tr>
                <td class="text-center" colspan="<?= 2+count($kriteria)  ?>">Silahkan lengkapi data di halaman <a href="<?= base_url('alternatif') ?>" class="text-black"><u>Data.</u></a></td>
              </tr>
            <?php endif ?>

            <?php foreach ($alternatif as $keys): ?>
              <tr>
                <td><?= $keys->nama_alternatif ?></td>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                      $data_pencocokan = $this->perhitungan_model->data_nilai($keys->id_alternatif,$key->id_kriteria);
                    
                      echo $data_pencocokan['nilai'];
                      
                    ?>
                  </td>
                <?php endforeach ?>

               

                
              </tr>
             
            <?php endforeach ?>
	  	</table>

	  	<hr>
	  	<h2>Normalisasi</h2>
	  	<table border="1">
	  		<tr>
	  			<td>Alternatif</td>
				  <?php foreach ($kriteria as $key): ?>
                <th>C<?= $key->id_kriteria ?></th>
              <?php endforeach ?>
	  		</tr>
			  <?php foreach ($alternatif as $keys): ?>
          <tr>
                <td><?= $keys->nama_alternatif ?></td>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                      $data_pencocokan = $this->perhitungan_model->data_nilai($keys->id_alternatif,$key->id_kriteria);
                    
                      $pembagi=$this->perhitungan_model->nilai_pembagi($key->id_kriteria);
                      
                      $normalisasi=round($data_pencocokan['nilai']/$pembagi['pembagi'],3);
                        echo $normalisasi;
                      
                    ?>
                  </td>
                <?php endforeach ?>

               
              </tr>
            <?php endforeach ?>
	  	</table>
		  <h2>Optimasi</h2>
	  	<table border="1">
	  		<tr>
			  <th>Alternatif</th>
              <th>max(C1+C2+C3+C4+C6)</th>
              <th>min(C5+C7+C8)</th>
              <th>Yi = max - min</th>
	  		</tr>
			  <?php foreach ($alternatif as $keys): ?>
          <tr>
                <td><?= $keys->nama_alternatif ?></td>
                <?php 
                $max=0;
                $min=0;
                foreach ($kriteria as $key): ?>
                  
                    <?php 
                    $data_pencocokan = $this->perhitungan_model->data_nilai($keys->id_alternatif,$key->id_kriteria);
                    $pembagi=$this->perhitungan_model->nilai_pembagi($key->id_kriteria);
                    $pembobotan=$this->perhitungan_model->pembobotan($key->id_kriteria);

                      if($pembobotan['tipe']==='Benefit'){
                          
                          $max += round($data_pencocokan['nilai']/$pembagi['pembagi']*$pembobotan['bobot'],5);
                          
                        // $max[]=$key->id_kriteria;
                      }else{
                         
                          $min += round($data_pencocokan['nilai']/$pembagi['pembagi']*$pembobotan['bobot'],5);
                        // $min[]=$key->id_kriteria;
                      }
                    
                      $yi=$max-$min;
                      
                      //echo var_dump($min);
                    ?>
                    
                    <?php endforeach ;?>
                      <?php $optimasi[]=$yi; 
                      $optim[]=$yi;
                      $id[]=$keys->id_alternatif;
                            
                      ?>
                   <td><?php echo $max ?></td>
                    <td><?php echo $min ?></td>
                    <td><?php echo $yi ?></td>
                
                    
               
              </tr>
            <?php endforeach ?>
	  	</table>
        <hr>
	  	<h2>Ranking</h2>
	  	<table border="1">
	  		<tr>
                <td>Ranking</td>
	  			<td>Alternatif</td>
	  			<td>Optimasi</td>
	  		</tr>
              <?php
              
              $a=1;for($i=0; $i<12; $i++) { 
                //perankingan
                rsort($optimasi);
                $id_optimasi = array_search($optimasi[$i], $optim);
                $id_alternatif = $id[$id_optimasi];
                $alternatif = $this->perhitungan_model->hasil($id_alternatif);
                //mencari alternatif terpilih
                $optimasi_tertinggi=max($optimasi);
                $id_optimasi2 = array_search($optimasi_tertinggi, $optim);
                $id_alternatif2 = $id[$id_optimasi2];
                $alternatif_terpilih=$this->perhitungan_model->hasil($id_alternatif2);
         
                ?>
        <tr>
          <td><?php echo $a; ?></td>
          <td><?php echo  $alternatif['nama_alternatif'] ?></td>
          <td><?php echo $optimasi[$i]; ?></td>
        </tr>
        <?php  $a++; } ?>
	  	</table>
	  	<hr>
      
	  	<h2>Kesimpulan</h2>
		  <h4>Hasil perhitungan menggunakan metode MOORA. Alternatif terbaik adalah  <b><?= $alternatif_terpilih['nama_alternatif']?></b> dengan jumlah <b><?= "Optimasi=".$optimasi_tertinggi ?>.</b></h4>
	  </div>
	</div>
	</div>
</div><!-- /.container -->

<!-- ISI TTP -->

</body>

   

</html>
