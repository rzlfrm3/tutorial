<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Myupload extends CI_Controller{

	public function __construct(){
		parent::__construct();	
		$this->load->model('m_kode','id');
	}

	public function index(){
		$data['id'] = $this->id->buat_id();
		$this->load->view('myupload_view', $data);
	}

	public function upload_process(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '90000'; //in kb
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->upload->initialize($config);

		//if upload failed
		if ( ! $this->upload->do_upload('image')){

			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		//if upload success
		}else{

			$data_insert = array(
								 'id' => $this->input->post('id'),
					            'first_name' => $this->input->post('first_name'),
					            'last_name' => $this->input->post('last_name'),
					            'image' => $this->upload->data('file_name'),
								'status_id' => $this->input->post('status_id')
					        );
			//query to insert into myupload table
			$this->db->insert('myupload', $data_insert);

			$data['message'] =  'Your file was successfully uploaded!';
			$this->load->view('notification_view', $data);
		}
	}
}	