<!DOCTYPE html>
<html>
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
                    <a class="navbar-brand" href="#">DETAIL NILAI</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a href="<?php echo site_url()?>/Nilai/create">
                                <i class="ti-plus"></i>
                                <p><font color='black'> &nbsp Tambah Data</font></p>
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo site_url()?>/Nilai/index">
                                <i class="ti-layers-alt"></i>
                                <p><font color='black'> &nbsp Lihat Data</font></p>
                            </a>                        
                        </li>
                            <li>
                                <a href="<?php echo site_url() ?>/Cetak">
                                <i class="ti-layers-alt"></i>
                                <p><font color='black'> &nbsp Cetak Data</font></p>
                                
                            </a>
                             
                        </li>
                       
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

<head>
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/style.css">
</head>
<body>
<div class="container">
    <br><br> 
    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
    <table class="table table-hover" cellspacing='0' width='100%'>
        <thead>
            <tr>
                <th>Nama Personel</th>                        
                <th>Kriteria</th>
                <th>Skor</th>     
                <th>Create By</th>                        
                <th width="10%"><center>Action</center></th>                     
            </tr>                        
        </thead>                        
        <tbody>
            <?php $i=1;
            foreach ($nilai_object as $key) { ?>
            <tr>
                <td><?php echo $key->nama_alternatif?></td>
                <td><?php echo $key->nama_kriteria?></td>
                <td><?php echo $key->nilai?></td>
                <td><?php echo $key->nama?></td>
                <td>
                    <div class="btn-group">
                    <a href="<?php echo site_url('Nilai/update/').$key->id_nilai ?>" class="btn btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>   
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>