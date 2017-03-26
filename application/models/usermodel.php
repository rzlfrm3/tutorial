<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {
	function getTransaksi(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('proposal'); //memeilih tabel
    $this->db->join('status', 'status.id_status = proposal.status'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        
}
}