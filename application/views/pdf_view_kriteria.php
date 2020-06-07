
<div class="container">
            <br><br> 
	<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
	<div class="panel panel-default">
	  <div class="panel-heading"><B>PERHITUNGAN</B></div>
	  <div class="panel-body">
	  	<h2>Kriteria</h2>
	  	<table border="1" width="100%">
	  		<tr>
              <th>No</th>
                                        <th>Nama Kriteria</th>
                                        <th>Tipe</th>
                                        <th>Bobot</th>
	  		</tr>
              <?php $i=1;
                                 foreach ($kriteria_object as $key) { ?>
                                
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $key->nama_kriteria ?></td>
                                        <td><?php echo $key->tipe ?></td>
                                        <td><?php echo $key->bobot ?></td>
                                      
                                    </tr>
                                <?php } ?>
	  	</table>

	  	<hr>
	  	
	  </div>
	</div>
	</div>
</div><!-- /.container -->

<!-- ISI TTP -->

</body>

   

</html>
