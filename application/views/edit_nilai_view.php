<div class="container"style="padding-top: 5%;">

            <br><br> 
     <?php echo form_open_multipart('Nilai/update/'.$this->uri->segment(3)); ?>

    <table width=1000 border='0' height=250 align="center"> 
                <tr>
                    </td>
                    
                </tr>
                <tr>
                    <td align="right" width="10%">Nilai</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai" aria-describedby="basic-addon3" value="<?php echo $nilai[0]->nilai ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('nilai'); ?></font></span>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <!-- <input type="hidden" name="id_alternatif" id="id_alternatif" value="<?php echo $nilai[0]->id_alternatif ?>">
                    <input type="hidden" name="id_kriteria" id="id_kriteria" value="<?php echo $nilai[0]->id_kriteria ?>"> -->
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

