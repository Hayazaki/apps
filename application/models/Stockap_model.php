<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockap_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getall_stockap()
  {
    return $this->db->get('tb_stockap')->result_array();
  }

}
