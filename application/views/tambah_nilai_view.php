<div class="container" style="padding-top: 5%;">
            <br><br> 

          <?php echo form_open_multipart('Nilai/create'); ?>

    <table width=1000 border='0' height=250 align="center"> 
                <tr>


                    <td align="right" width="13%"> Sekolah</td>
                    <td width="2%"></td>
                    <td width="35%">
                        
                        <select id="type" name="type" required>
                            <option value="">--Pilih Personel--</option>   
                             <?php foreach ($sekolah as $key) { ?>
                                <option value="<?php echo $key->id_alternatif; ?>"><?php echo $key->nama_alternatif; ?></option>      
                            <?php } ?>                  
                        </select>
                    <span class="text-danger"><font color='red'><?php echo form_error('sekolah'); ?></font></span>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="13%"> Kriteria 1</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Jenjang Pendidikan" name="kriteria1"  type="number" step = "0.01" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria1'); ?></font></span>
                    </td>

                    
                </tr>

                <tr>
                    <td align="right" width="10%"> Kriteria 2</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan Nilai Masa Dinas Dalam Perwira" name="kriteria2"  type="number" step = "0.01" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('kriteria2'); ?></font></span>
                    </td>

                
                </tr>
                <tr>
                    <td align="right" width="13%"> Kriteria 3</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Kesehatan Fisik dan Mental" name="kriteria3"  type="number" step = "0.01" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria3'); ?></font></span>
                    </td>

                
                </tr>

                <tr>
                    <td align="right" width="10%"> Kriteria 4</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan Nilai Perwira Berpangkat IPDA atau IPTU" name="kriteria4"  type="number" step = "0.01" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('kriteria4'); ?></font></span>
                    </td>

                  
                </tr>
                <tr>
                    <td align="right" width="13%"> Kriteria 5</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Usia" name="kriteria5"  type="number" step = "0.01" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria5'); ?></font></span>
                    </td>

                    
                </tr>

                <tr>
                    <td align="right" width="10%"> Kriteria 6</td>
                    <td width="2%"></td>
                    <td width="35%">
                        <input class="form-control" placeholder="Masukkan Nilai Prestasi" name="kriteria6"  type="number"  step = "0.01"value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('kriteria6'); ?></font></span>
                    </td>

                   
                </tr>

                <tr>
                    <td align="right" width="13%"> Kriteria 7</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Melayani, Mengayomi, Teladan Masyarakat" name="kriteria7"  type="number" step = "0.01" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria7'); ?></font></span>
                    </td>

                
                </tr>

                <tr>
                    <td align="right" width="13%"> Kriteria 8</td>
                    <td width="2%"></td>
                    <td width="35%">
                    <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Penegakan Hukum" name="kriteria8"  type="number" step = "0.01" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria8'); ?></font></span>
                    </td>

                </tr>

               
                         

          
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Simpan Data</button>
                        <button id="cancel-button" type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>       
    </table>        

    <?php echo form_close(); ?>    
</div><!-- /.container -->
    