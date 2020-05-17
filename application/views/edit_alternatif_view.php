<div class="container"style="padding-top: 5%;">

            <br><br> 
     <?php echo form_open_multipart('Alternatif/update/'.$this->uri->segment(3)); ?>

    <table width=1000 border='0' height=250 align="center"> 
  
                <tr>
                    </td>
                    
                </tr>
                
                <tr>
                    <td align="right" width="10%"> Nama Personel</td>
                    <td width="2%"></td>
                    <td width="35%">
                     <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" placeholder="Masukkan Nama Personel" aria-describedby="basic-addon3" value="<?php echo $personel[0]->nama_alternatif ?>">
                     <span class="text-danger"><font color='red'><?php echo form_error('nama_alternatif'); ?></font></span>
                    </td>
                    
                </tr>

                <tr>
                </tr>

                <tr>
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

