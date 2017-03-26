<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datatables Codeigniter</title>
  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

</head>
<body>
  </div>
    <table  class="table table-bordered table-striped">
         <thead>
            <tr>
                <th>ID proposal</th>
                <th>judul</th>
                <th>tahun_perencanaan</th>
                <th>date</th>
				<th>file</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        
            <?php foreach ($hasilTransaksi as $data) { //ngabsen data ?>
 
            <tr>
                <td><?php echo $data[id_proposal]; ?></td> //manggil data id_transaksi
                <td><?php echo $data[judul]; ?></td>
                <td><?php echo $data[tahun_perencanaan]; ?></td>
				<td><?php echo $data[date]; ?></td>
				<td><?php echo $data[file]; ?></td>
                <td><?php echo $data[status];?></td>
                <td>disi nanti di artikel selanjutnya :)</td>
            </tr>
            <?php }?> 
        
    </table>
</div>


  <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
  <script>
 
  </script>
</body>
</html>