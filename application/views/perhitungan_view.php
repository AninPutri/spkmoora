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
      <h2>Normalisasi</h2>
      <table border="1" width="100%">
        <tr>
          <td rowspan="2">Kriteria</td>
          <td colspan="<?php echo count($alternatif)+1?>">Alternatif</td>
        </tr>
        <tr>
                <?php 
                
                $max_alternatif = max(array_keys($alternatif));;

                  for ($i=key($alternatif); $i <= $max_alternatif; $i++) { 
                    if(!empty($alternatif[$i])){   
                ?>
                    <td><?php echo $alternatif[$i][0]; ?></td>
                <?php }}    ?>
        </tr>
        <?php
        for ($i=1; $i <= count($normalisasi[key($normalisasi)]); $i++) { ?> 
        <tr>
          <td><?php echo $alternatif[key($alternatif)][$i]; ?></td>
          <?php for ($z=key($alternatif); $z <= $max_alternatif; $z++) { 
                      if(!empty($normalisasi[$z][$i])){?>
            <td><?php if(!empty($normalisasi[$z][$i])){echo $normalisasi[$z][$i];}else{echo '0';} ?></td>
          <?php }} ?>
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
              <?php 
              $rank = array();
              for ($i=key($alternatif); $i <= $max_alternatif; $i++) {
                  if(!empty($alternatif[$i])){?>
        <tr>
          <td><?php echo $alternatif[$i][0]; ?></td>
          <td><?php echo $optimasi[$i]; ?></td>
        </tr>
            <?php 
                $dtmp = array('optimasi' => $optimasi[$i],'alternatif' => $alternatif[$i][0]);
                array_push($rank,$dtmp);
                }
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
              <?php rsort($rank);
              // var_dump($rank) 
              $a = 1 ;for ($i=0; $i < count($rank); $i++) { ?>
        <tr>
          <td><?php echo $a; ?></td>
          <td><?php echo $rank[$i]['alternatif']; ?></td>
          <td><?php echo $rank[$i]['optimasi']; ?></td>
        </tr>
        <?php $a++; } ?>
      </table>
      <hr>
      
      <h2>Kesimpulan</h2>
      <p><?php echo $perangkingan; ?></p>
        <a href="<?= base_url()?>index.php/perhitungan/printPdf" target="_blank" class="btn btn-success">Print</a>
      <!-- <button id="printbtn" onClick="window.print();">Print</button> -->
    </div>
  </div>
  </div>
</div><!-- /.container -->

<!-- ISI TTP -->

        


<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script>

</body>

   

</html>
