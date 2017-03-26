<?php class M_kode extends CI_Model{
function __construct()
{
parent::__construct();
}
function buat_id()
{

$this->db->select('RIGHT(myupload.id,6) as id', FALSE);
$this->db->order_by('id','DESC');
$this->db->limit(1);
$query = $this->db->get('myupload');
//cek dulu apakah ada sudah ada kode di tabel.

if($query->num_rows() <> 0){
//jika kode ternyata sudah ada.
$data = $query->row();

$id = intval($data->id) + 1;
}else{
//jika kode belum ada
$id = 1;
}
$tahun = date("Y");
$strip = "-";
$kodemax = str_pad($id, 6, "0", STR_PAD_LEFT);
$kodejadi = "PNJ-".$tahun .$strip .$kodemax;
return $kodejadi;
}
//end of class
}