<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
      $this->data['title'] = "Stock Access Point";
	}

	public function index()
	{

		$this->template->display('access_point/stock/index', $this->data);
	}
}
