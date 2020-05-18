
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
                    <a class="navbar-brand" href="#">BERANDA PEGAWAI</a>
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
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('histori/histori_user'); ?>">   
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
      <div class="panel-heading">
        <center><B><h2>SELAMAT DATANG DI SPK METODE MOORA POLRES KUTIM</h2></B></center>
      </div>
      <div class="panel-body">
        <br>
        <center><img src="<?php echo base_url()?>assets/img/kaltim.png" height=450>
            <br>
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
