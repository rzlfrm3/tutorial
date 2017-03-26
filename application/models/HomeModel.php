<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {
   function __construct(){
   parent:: __construct();
 }

 function result_getall(){

    $this->db->select('*');
    $this->db->from('trn_employee'); 
    $this->db->join('trn_address', 'trn_employee.employee_id = trn_address.address_id', 'left'); 
    $query = $this->db->get();
    return $query->result();

    }
}
?>
