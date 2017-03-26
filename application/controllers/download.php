<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));
	}
	public function tabel(){
		$this->load->view('tabel');
	}
	public function download($first_name)
{
    # load download helper
    $this->load->helper('download');
    # search for filename by id
    $this->db->select('image');
    $this->db->where('first_name', $first_name);
    $q = $this->db->get('myupload');
    # if exists continue
    if($q->num_rows() > 0)
    {
        $row  = $q->row();
        $file = FCPATH . 'uploads/'. $row->image;
        if(file_exists($file))
            force_download($file, NULL);
    }
    else
        show_404();
}
}