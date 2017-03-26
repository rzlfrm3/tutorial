<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends CI_Controller {
    
    public function index()
    {
    	$this->load->view('view_proposal');
    }

    function datatables_ajax()
    {
    	/** AJAX Handle */
    	if(
    		isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 
    		!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
    		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    		)
    	{
            
            $this->load->model('m_proposal');
    		
    		/**
    		 * Mengambil Parameter dan Perubahan nilai dari setiap 
    		 * aktifitas pada table
    		 */
            $datatables  = $_POST;
            $datatables['table']    = 'proposal';
    		$datatables['id-table'] = 'id_proposal';

            /**
             * Kolom yang ditampilkan
             */
	    	$datatables['col-display'] = array(
            	    		               
            	    		               'judul',
            	    		               'tahun_perencanaan',
            	    		               'date',
										   'file',
            	    		               'status'
            	    		             );

            /**
             * menggunakan table join
             */
            $datatables['join']    = 'INNER JOIN status ON status = id_status';

	    	$this->m_proposal->Datatables($datatables);
    	}

    	return;
    }
}
