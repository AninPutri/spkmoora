<div class="container"style="padding-top: 5%;">

            <br><br> 
     <?php echo form_open_multipart('Kriteria/update/'.$this->uri->segment(3)); ?>

    <table width=1000 border='0' height=250 align="center"> 
                <tr>
                    </td>
                    
                </tr>
                <tr>
                    <td align="right" width="10%"> Nama Kriteria</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" placeholder="Nama Kriteria" aria-describedby="basic-addon3" value="<?php echo $kriteria[0]->nama_kriteria ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('nama_kriteria'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Tipe</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <select id="tipe" name="tipe">                      
                        <option selected> <?php echo $kriteria[0]->tipe ?></option>
                              <option value="Benefit">Benefit</option>
                              <option value="Cost">Cost</option>
                            </select>
                     <!-- <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe" aria-describedby="basic-addon3" value="<?php echo $kriteria[0]->tipe ?>"> -->
                     <span class="text-danger"><font color='red'><?php echo form_error('tipe'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Bobot</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Masukkan Bobot" aria-describedby="basic-addon3" value="<?php echo $kriteria[0]->bobot ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('bobot'); ?></font></span>
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

