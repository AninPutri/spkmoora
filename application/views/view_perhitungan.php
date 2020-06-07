
<?php $this->load->view('partials/header'); ?>
<style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
    .copyright {
    display :  none;  
    }

    .element::-webkit-scrollbar { 
      width: 0 !important 
    }
}
</style>
    <div class="main-panel">
       <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Perhitungan Metode</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                            <!-- <img class="img-rounded"  src="<?php echo base_url()?>assets/uploads/<?php echo $foto; ?>" height=25> -->
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><center><font>Hai,<?php echo $this->session->nama ?></font></center></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('histori'); ?>">   
                              <center><font><i class="ti-time"></i><b>
                              Histori</b></font></center>
                              </a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('home/logout'); ?>">   
                              <center><font><i class="ti-power-off"></i><b>
                              Keluar</b></font></center>
                              </a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- ISI -->

<div class="container">
            <br><br> 
  <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
  <div class="panel panel-default">
    <div class="panel-heading"><B>PERHITUNGAN</B></div>
    <div class="panel-body">
      <h2>Penilaian</h2>
      <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th>C<?= $key->id_kriteria ?></th>
              <?php endforeach ?>
              
            </tr>
          </thead>
          <tbody>
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
          </tbody>
        </table>

      <hr>
      <h2>Normalisasi</h2>
      <table class="table table-hover table-bordered">
          <thead>
          <tr>
              <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th>C<?= $key->id_kriteria ?></th>
              <?php endforeach ?>
            </tr>
          </thead>
          <tbody>
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
          </tbody>
        </table>

        <hr>
      <h2>Optimasi</h2>
      <table class="table table-hover table-bordered">
          <thead>
          <tr>
              <th>Alternatif</th>
              <th>max(C1+C2+C3+C4+C6)</th>
              <th>min(C5+C7+C8)</th>
              <th>Yi = max - min</th>
            </tr>
          </thead>
          <tbody>
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
                          
                          $max += round($data_pencocokan['nilai']/$pembagi['pembagi']*$pembobotan['bobot'],4);
                          
                        // $max[]=$key->id_kriteria;
                      }else{
                         
                          $min += round($data_pencocokan['nilai']/$pembagi['pembagi']*$pembobotan['bobot'],4);
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
          </tbody>
        </table>
        <hr>
      <h2>Perankingan 12 Besar</h2>
      <table class="table table-hover table-bordered">
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
        <a href="<?= base_url()?>index.php/perhitungan/printPdf" target="_blank" class="btn btn-success">Print</a>
      <!-- <button id="printbtn" onClick="window.print();">Print</button> -->
    </div>
  </div>
  </div>
</div><!-- /.container -->

<!-- ISI TTP -->

        

 <?php $this->load->view('partials/footer'); ?> 
<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>

</body>

 

</html>

