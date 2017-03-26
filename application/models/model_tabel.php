<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tabel extends CI_Model {
	public function GetUser(){
		//$data = $this->db->query('select * from myupload '.$where);
	
	$this->db->select('myupload.id,myupload.first_name,myupload.last_name,myupload.image,status.status_id,status.status_name')
		->join('status','status.status_id=myupload.status_id');
		return $this->db->get('myupload')->result();
	///	return $data->result_array();
	}
	public function insertdata($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function updatedata($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function deletedata($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
	
}
