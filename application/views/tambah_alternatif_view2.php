
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

                    <td align="right" width="13%"> Jenjang Pendidikan </td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Jenjang Pendidikan" name="jenjang_pendidikan"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('jenjang_pendidikan'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="10%"> Masa Dinas Dalam Perwira</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan Masa Dinas Dalam Perwira" name="masa_dinas_dalam_perwira"  type="text" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('masa_dinas_dalam_perwira'); ?></font></span>
                    </td>

                    <td align="right" width="13%"> Kesehatan Fisik Dan Mental</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Kesehatan Fisik Dan Mental" name="kesehatan_fisik_dan_mental"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kesehatan_fisik_dan_mental'); ?></font></span>
                    </td>
                </tr>

                <tr>
                    <td align="right" width="10%"> Perwira Berpangkat Ipda dan Iptu</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan SPerwira Berpangkat Ipda dan Iptu" name="perwira_berpangkat_ipda_dan_iptu"  type="text" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('perwira_berpangkat_ipda_dan_iptu'); ?></font></span>
                    </td>

                    <td align="right" width="13%"> Usia</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan usia" name="usia"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('usia'); ?></font></span>
                    </td>
                </tr>

                <tr>
                    <td align="right" width="10%"> Melayani, Mengayomi, dan Teladan Masyarakat</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan Melayani, Mengayomi, dan Teladan Masyarakat" name="melayani_mengayomi_teladan_masyarakat"  type="text" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('melayani_mengayomi_teladan_masyarakat'); ?></font></span>
                    </td>

                    <td align="right" width="13%"> Penegakan Hukum</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Penegakan Hukum" name="penegakan_hukum"  type="text" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('pintu'); ?></font></span>
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
    