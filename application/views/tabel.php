<html>
<head>
<title>Data Mahasiswa</title>
</head>
<body>
 <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example ">
                                <thead>
							   <tr style="background:gray;">
								<th>id</th>
								<th>first_name</th>
								<th>Last_name</th>
								<th>image</th>
								<th>status</th>
								<th>Action</th>
								</tr>
								 </thead>
								  <tfoot>
							   <tr style="background:gray;">
								<th>id</th>
								<th>first_name</th>
								<th>Last_name</th>
								<th>image</th>
								<th>status</th>
								<th>Action</th>
								</tr>
								 </tfoot>
								<?php foreach($data as $d){?>
								<tr>
								<td><?php echo $d->id; ?></td>
								<td><?php echo $d->first_name; ?></td>
								<td><?php echo $d->last_name; ?></td>
								<td><?php echo $d->image; ?></td>
								<td><?php echo $d->status_name; ?></td>
								<td align="center">
								<a href="<?php echo base_url()."index.php/tabel/edit_data/".$d->first_name; ?>"><button class="btn">Edit</button></a> 
								<a href="<?php echo base_url()."index.php/tabel/do_delete/".$d->first_name; ?>"><button class="btn btn-danger">Delete</button></a>
								<a href="<?php echo base_url()."index.php/download/download/".$d->first_name; ?>"><button class="btn">Download</button></a> 
								<a href="<?php echo base_url()."index.php/tabel/edit_kirim/".$d->first_name; ?>"><button class="btn">kirim</button></a> 
								</tr>
								<?php }?> 
                            </table>
							<a href="<?php echo base_url()."index.php/Myupload"; ?>"><button class="btn btn-success">Tambah data</button></a>
                        </div>
</body>
</html>
