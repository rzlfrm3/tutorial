<html>
<head>
  <title>PHP Single File</title>
</head>
<body>
<?php
if(count($data)==0){
   echo "Tidak Ada Data Mahasiswa di Database";
}else{
  foreach($data as $row)){
        print_r($row);
  }
}
?>
</body>
</html>