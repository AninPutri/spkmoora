
 <div class="container" style="padding-top: 5%;">
            <br><br> 

     <?php echo form_open_multipart('User/create/'); ?>

    <table width=1000 border='0' height=250 align="center"> 
                <tr>
                    <td align="right" width="13%"> User*</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Username" name="username"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('username'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="13%"> Nama</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nama" name="nama"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('nama'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="13%"> Level</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <select class="form-control" name ="level" id="level"> 
                  <option selected> --Pilih Level User-- </option>
                  <?php foreach ($user_level as $k) { ?>
                  <option value="<?php echo $k->id_user_level?>"><?php echo $k->user_level?></option>
                <?php } ?>
                </select>
                    <span class="text-danger"><font color='red'><?php echo form_error('level'); ?></font></span>
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
    