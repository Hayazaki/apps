<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
      $this->data['title'] = "Access Point";
	}

	public function index()
	{

		$this->template->display('access_point/masuk/index', $this->data);
	}
}
