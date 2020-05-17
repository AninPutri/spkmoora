
 <div class="container" style="padding-top: 5%;">
            <br><br> 

     <?php echo form_open_multipart('Alternatif/create/'); ?>

    <table width=1000 border='0' height=250 align="center"> 
                <tr>
                    <td align="right" width="13%"> Nama Personel</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nama Personel" name="nama_alternatif"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('nama_alternatif'); ?></font></span>
                    </td>
                </tr>

                
                    <td></td>
                    <td></td>
                    <td>
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button id="cancel-button" type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
                    </td>
                    <td></td>
                    <td></td>
                    
                     
    </table>        

    <?php echo form_close(); ?>    
</div><!-- /.container -->
    