<html>
<head>
  <title>PHP Single File</title>
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
        <tbody>
            <?php
                foreach ($hasilTransaksi as $data) : //ngabsen data
            ?>
 
            <tr>
                <td><?php echo $data->id_proposal; ?></td> //manggil data id_transaksi
                <td><?php echo $data->judul; ?></td>
                <td><?php echo $data->tahun_perencanaan; ?></td>
				<td><?php echo $data->date; ?></td>
				<td><?php echo $data->file; ?></td>
                <td><?php echo $data->status;?></span></td>
                <td>disi nanti di artikel selanjutnya :)</td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>
   </table>
</div>
</body>
</html>