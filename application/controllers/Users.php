<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->data['title'] = "User Management";
	}

	public function index()
	{

		$this->template->display('users/index', $this->data);
	}

  public function create()
  {

    $this->template->display('users/create_user', $this->data);
  }

  public function edit()
  {

    $this->template->display('users/edit_user', $this->data);
  }
}
