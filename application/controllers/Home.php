<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
  function __construct(){
  parent:: __construct();
 }
 
 public function index(){
	 $this->load->model('HomeModel');
			$data = $this->HomeModel->result_getall();
			$this->load->view('index',array('data' => $data));
	}
 
 public function getall(){      
    
    print_r($data['query']);
    die();
    }
}
?>
