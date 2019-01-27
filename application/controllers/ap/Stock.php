<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model('Stockap_model');
      $this->data['title'] = "Access Point";
	}

	public function index()
	{
		$this->data['subtitle'] = "Data Stock Access Point";
		$this->data['stockap']	= $this->Stockap_model->getall_stockap();

		$this->template->display('access_point/stock/index', $this->data);
	}

	public function keluarkan()
	{
	  $this->data['stockap'] = $this->Stockap_model->get_stockap($id);
	}
}
