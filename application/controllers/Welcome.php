<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['title'] = "Dashboard";

		$this->load->view('dashboard',$this->data);
	}
}
