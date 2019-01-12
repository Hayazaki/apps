<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apkeluar_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getall_apkeluar()
  {
    return $this->db->get('tb_apkeluar')->result_array();
  }

}
