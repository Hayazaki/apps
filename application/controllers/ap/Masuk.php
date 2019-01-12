<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model('Apmasuk_model');
      $this->data['title'] = "Access Point";
	}

	public function index()
	{
		$this->data['subtitle'] = "Data Access Point Masuk";
		$this->data['apmasuk'] = $this->Apmasuk_model->get_all_apmasuk();

		$this->template->display('access_point/masuk/index', $this->data);
	}

	public function remove($id=NULL)
	{
          $this->Apmasuk_model->delete_apmasuk($id);
            redirect('ap/masuk/index');
  }
}
