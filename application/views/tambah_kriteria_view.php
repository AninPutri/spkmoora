
 <div class="container" style="padding-top: 5%;">
            <br><br>

          <?php echo form_open_multipart('Kriteria/create/'); ?>

    <table width=1000 border='0' height=250 align="center"> 
                <tr>
                    <td align="right" width="10%"> Nama Kriteria</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan Nama Kriteria" name="nama_kriteria"  type="text" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('nama_kriteria'); ?></font></span>
                    </td>
                </tr>
                
                <tr>


                    <td align="right" width="13%"> Tipe</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <select class="form-control"id="tipe" name="tipe">                      
                              <option value="0">--Pilih Tipe--</option>
                              <option value="Benefit">Benefit</option>
                              <option value="Cost">Cost</option>
                            </select>
                    <!-- <input class="form-control" id="new-pass-control" placeholder="Masukkan Tipe" name="tipe"  type="text" value="" > -->
                    <span class="text-danger"><font color='red'><?php echo form_error('tipe'); ?></font></span>
                    </td>
                </tr>

                <tr>
                    <td align="right" width="10%"> Bobot</td>
                    <td width="2%"></td>
                    <td width="35%">
                         
                        <input class="form-control" placeholder="Masukkan Bobot" name="bobot"  type="text" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('bobot'); ?></font></span>
                    </td>

                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button id="cancel-button" type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>       
    </table>        

    <?php echo form_close(); ?>    
</div><!-- /.container -->
    