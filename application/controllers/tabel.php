<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel extends CI_Controller {

	public function index()
	{
		$data = $this->model_tabel->GetUser();
			$this->load->view('tabel',array('data' => $data));
	}
	public function add_data(){
		$this->load->view('myupload_view');
	}
	
	public function kirim(){
		$this->load->view('tabel_kirim');
	}
	
	
	public function edit_data($first_name){
		$mhs = $this->model_tabel->GetUser("where first_name = '$first_name'");
		$data = array(
		"first_name" => $mhs[0]['first_name'],
		"last_name" => $mhs[0]['last_name'],
		"image" => $mhs[0]['image'],
		"status" => $mhs[0]['status'],
		);
		$this->load->view('form_edit',$data);
	}
	public function do_update(){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$image = $_POST['image'];
		$status = $_POST['status'];
		$data_update = array(
		'last_name' => $last_name,
		'status' => $status,
		'image' => $image
		);
		$where = array('first_name' => $first_name);
		$res = $this->model_tabel->updatedata('myupload',$data_update,$where);
		if($res>=1){
			redirect('tabel/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	
	public function edit_kirim($first_name){
		$mhs = $this->model_tabel->GetUser("where first_name = '$first_name'");
		$data = array(
		"first_name" => $mhs[0]['first_name'],
		"last_name" => $mhs[0]['last_name'],
		"image" => $mhs[0]['image'],
		);
		$this->load->view('form_kirim',$data);
	}
	public function do_kirim(){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$image = $_POST['image'];
		$data_update = array(
		'first_name' => $first_name,
		'last_name' => $last_name,
		'image' => $image
		);
		$where = array('first_name' => $first_name);
		$res = $this->model_kirim->insertdata('reviewer',$data_update);
		if($res>=1){
			redirect('index.php/tabel/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	
	
	
	
		public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->model_tabel->deletedata('myupload',$where);
		if($res>=1){
			redirect('index.php/tabel');
		}
	}
}