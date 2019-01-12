<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model('Apkeluar_model');
			$this->data['title'] = "Access Point";
	}

	public function index()
	{
		$this->data['subtitle'] = "Data Access Point Keluar";
		$this->data['apkeluar']	= $this->Apkeluar_model->getall_apkeluar();
		
		$this->template->display('access_point/keluar/index', $this->data);
	}
}
