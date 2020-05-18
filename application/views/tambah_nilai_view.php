<div class="container" style="padding-left: 10%;">
            <br><br> 

          <?php echo form_open_multipart('Nilai/create'); ?>

<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
              
             
              <div class="form-group">
                <label for="keterangan">Nama Personel</label>
                <select class="form-control" id="type" name="type" required>
                            <option value="">--Pilih Personel--</option>   
                             <?php foreach ($sekolah as $key) { ?>
                                <option value="<?php echo $key->id_alternatif; ?>"><?php echo $key->nama_alternatif; ?></option>      
                            <?php } ?>                  
                        </select>
                    <span class="text-danger"><font color='red'><?php echo form_error('sekolah'); ?></font></span>
              </div>
              <div class="form-group">
                <label>Kriteria 1</label>
                <select class="form-control" name ="kriteria1" id="kriteria1"> 
                  <option selected> --Pilih Jenjang Pendidikan-- </option>
                  <option value="100">S2</option>
                  <option value="80">S1</option>
                  <option value="60">SMA/Sederjat</option>
                </select>
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria1'); ?></font></span>
                    </div>
              <div class="form-group">
                <label>Kriteria 2</label>
                <input class="form-control" placeholder="Masukkan Nilai Masa Dinas Dalam Perwira" name="kriteria2"  type="number" step = "1" value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('kriteria2'); ?></font></span>
                    </div>
              <div class="form-group">
            <label> Kriteria 3 </label>
            <select class="form-control" name ="kriteria3" id="kriteria3"> 
                  <option selected> --Pilih Nilai Kesehatan Fisik dan Mental-- </option>
                  <option value="100">Sangat Sehat</option>
                  <option value="80">Sehat</option>
                  <option value="60">Cukup Sehat</option>
                  <option value="40">Kurang Sehat</option>
                </select>
                <span class="text-danger"><font color='red'><?php echo form_error('kriteria3'); ?></font></span> 
            </div>
            <div class="form-group">
            <label> Kriteria 4 </label>
            <select class="form-control" name ="kriteria4" id="kriteria4"> 
                  <option selected> --Pilih Nilai Perwira Berpangkat IPDA atau IPTU-- </option>
                  <option value="100">IPTU</option>
                  <option value="80">IPDA</option>
                </select>
                <span class="text-danger"><font color='red'><?php echo form_error('kriteria4'); ?></font></span>
                    </div>
            <div class="form-group">
            <label> Kriteria 5 </label>
            <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Usia" name="kriteria5"  type="number" step = "1" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria5'); ?></font></span>
                    </div>
            <div class="form-group">
            <label> Kriteria 6 </label>
            <input class="form-control" placeholder="Masukkan Nilai Prestasi" name="kriteria6"  type="number"  step = "1"value="" >
                        <span class="text-danger"><font color='red'><?php echo form_error('kriteria6'); ?></font></span>
                    </div>
            <div class="form-group">
            <label> Kriteria 7 </label>
            <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Melayani, Mengayomi, Teladan Masyarakat" name="kriteria7"  type="number" step = "1" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria7'); ?></font></span>
                    </div>
                    <div class="form-group">
            <label> Kriteria 8 </label>
            <input class="form-control" id="new-pass-control" placeholder="Masukkan Nilai Penegakan Hukum" name="kriteria8"  type="number" step = "1" value="" >
                    <span class="text-danger"><font color='red'><?php echo form_error('kriteria8'); ?></font></span>
                    </div>
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Simpan Data</button>
                       
              <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/Nilai">Kembali</a>
              
          
            </div>     

    <?php echo form_close(); ?>    
</div><!-- /.container -->
    