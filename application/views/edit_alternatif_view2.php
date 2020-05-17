<div class="container"style="padding-top: 5%;">

            <br><br> 
     <?php echo form_open_multipart('Alternatif/update/'.$this->uri->segment(3)); ?>

    <table width=1000 border='0' height=250 align="center"> 
  
                <tr>
                    </td>
                    
                </tr>
                <tr>
                    <td align="right" width="10%"> Nama Sekolah</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan Nama Sekolah" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->nama_sekolah ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('nama_sekolah'); ?></font></span>
                    </td>
                    
                </tr>
                <tr>
                    <td align="right" width="10%"> Luas Lahan</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="luas_lahan" name="luas_lahan" placeholder="Luas Lahan" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->luas_lahan ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('luas_lahan'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Dimensi</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Masukkan Dimensi" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->dimensi ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('dimensi'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Status Tanah</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="status_tanah" name="status_tanah" placeholder="Masukkan Status Tanah" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->status_tanah ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('status_tanah'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Kota</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukkan Kota" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->kota ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('kota'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Provinsi</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukkan Provinsi" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->provinsi ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('provinsi'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Keterangan</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" aria-describedby="basic-addon3" value="<?php echo $sekolah[0]->keterangan ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('keterangan'); ?></font></span>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>       
    </table>
    <?php echo form_close(); ?>
</div><!-- /.container -->

