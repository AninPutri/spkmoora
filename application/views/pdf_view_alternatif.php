
<div class="container">
            <br><br> 
	<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
	<div class="panel panel-default">
	  <div class="panel-heading"><B></B></div>
	  <div class="panel-body">
	  	<h2>Alternatif</h2>
	  	<table border="1" width="100%">
	  		<tr>
              <th>No</th>
                                        <th>Nama Alternatif</th>
                                        <th>Create By</th>
	  		</tr>
              <?php $i=1;
                                 foreach ($alternatif_object as $key) { ?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $key->nama_alternatif?></td>
                                        <td><?php echo $key->nama?></td>
                                      
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
