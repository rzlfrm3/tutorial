<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi extends CI_Controller {
	public function __construct(){
		parent::__construct();	
	}
	
	public function index(){
    $this->load->model('usermodel'); //load model
    $data['hasilTransaksi'] = $this->usermodel->getTransaksi(); //membuat data dari hasil transaksi masuk ke $data
 
    
    $this->load->view('view_proposal.php',$data); //load tampilan content + mengirimkan $data
   }
   
   
}
