<!DOCTYPE html>
<html>
<head>
	 <style type="text/css">
            table {
                background: #fff;
                padding: 7px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 2px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 80px;
                    height: 80px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                    border-bottom: 2px solid #616161;
                    margin: -1rem 0 1rem;
                }

            }
        </style>

         <body onload="window.print()">
</head>
<p style="text-align: center">PERHITUNGAN METODE MOORA</p>
</tr>
</table> 
<body>
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
	
</body>
</table>	
</html>
